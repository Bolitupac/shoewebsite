<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orders — Nelson Admin</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-layout">
        <nav class="admin-nav">
            <span class="admin-nav-brand">Nelson <strong>Admin</strong></span>
            <div class="admin-nav-links">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.orders') }}" class="nav-link {{ request()->routeIs('admin.orders') ? 'active' : '' }}">Orders</a>
                <a href="{{ route('admin.products') }}" class="nav-link {{ request()->routeIs('admin.products') ? 'active' : '' }}">Products</a>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" style="margin:0">
                @csrf
                <button class="nav-logout" type="submit">Log out</button>
            </form>
        </nav>

        <main class="admin-main">
            <div class="admin-header">
                <h1 class="admin-page-title">Orders <span class="count-badge">{{ $totalOrders }}</span></h1>
            </div>

            <div class="stat-grid">
                <div class="stat-card">
                    <span class="stat-label">Total Orders</span>
                    <span class="stat-value">{{ $totalOrders }}</span>
                </div>
                <div class="stat-card">
                    <span class="stat-label">Pending Orders</span>
                    <span class="stat-value">{{ $pendingOrders }}</span>
                </div>
                <div class="stat-card">
                    <span class="stat-label">Revenue</span>
                    <span class="stat-value" style="font-size: 1.35rem;">₦{{ number_format((float) $totalRevenue, 2) }}</span>
                </div>
            </div>

            <div class="table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->order_number ?? ('#' . $order->id) }}</td>
                            <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ collect($order->items)->sum('quantity') }}</td>
                            <td>₦{{ number_format((float) $order->total, 2) }}</td>
                            <td><span class="order-status-badge">{{ ucfirst($order->status) }}</span></td>
                            <td>{{ $order->created_at->format('M d, Y H:i') }}</td>
                            <td>
                                <button class="tbl-btn edit-btn" type="button" data-open-order data-order='@json($order)'>View</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">No orders yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <div id="orderModal" class="admin-modal-overlay" style="display:none;" aria-hidden="true">
        <div class="admin-modal-content admin-order-modal">
            <button class="admin-modal-close" type="button" onclick="closeOrderModal()">×</button>
            <div class="admin-header" style="margin-bottom: 1rem;">
                <h2 class="admin-section-title" id="orderModalTitle" style="margin-bottom:0; border-bottom:none; padding-bottom:0;">Order Details</h2>
            </div>

            <div class="order-summary-grid">
                <div class="order-summary-card">
                    <span class="stat-label">Customer</span>
                    <strong id="orderCustomer"></strong>
                    <span id="orderEmail"></span>
                </div>
                <div class="order-summary-card">
                    <span class="stat-label">Shipping</span>
                    <strong id="orderAddress"></strong>
                </div>
                <div class="order-summary-card">
                    <span class="stat-label">Order Meta</span>
                    <strong id="orderMeta"></strong>
                </div>
            </div>

            <div class="table-wrap" style="margin-top: 1rem;">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Item</th>
                            <th>Size</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Colour</th>
                            <th>Construction</th>
                            <th>Fitting</th>
                            <th>Sole</th>
                        </tr>
                    </thead>
                    <tbody id="orderItemsTable"></tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        const orderModal = document.getElementById('orderModal');
        const orderModalTitle = document.getElementById('orderModalTitle');
        const orderCustomer = document.getElementById('orderCustomer');
        const orderEmail = document.getElementById('orderEmail');
        const orderAddress = document.getElementById('orderAddress');
        const orderMeta = document.getElementById('orderMeta');
        const orderItemsTable = document.getElementById('orderItemsTable');

        const currency = (value) => `₦${Number(value).toLocaleString('en-NG', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;

        const openOrderModal = (order) => {
            orderModalTitle.textContent = `Order ${order.order_number || ('#' + order.id)}`;
            orderCustomer.textContent = `${order.first_name} ${order.last_name}`;
            orderEmail.textContent = order.email;
            orderAddress.textContent = `${order.address_line_1}, ${order.city}, ${order.state}`;
            orderMeta.textContent = `${order.order_number || ('#' + order.id)} · ${order.status} · ${currency(order.total)} · ${new Date(order.created_at).toLocaleString()}`;

            orderItemsTable.innerHTML = (order.items || []).map((item) => `
                <tr>
                    <td>${item.image ? `<img src="${item.image}" alt="${item.name}" class="admin-table-img">` : '<span class="order-empty-image">No image</span>'}</td>
                    <td>${item.name || 'Unnamed item'}</td>
                    <td>${item.size || 'N/A'}</td>
                    <td>${item.quantity || 1}</td>
                    <td>${item.price || 'N/A'}</td>
                    <td>${item.colour || 'N/A'}</td>
                    <td>${item.constructionType || 'N/A'}</td>
                    <td>${item.fittingType || 'N/A'}</td>
                    <td>${item.soleType || 'N/A'}</td>
                </tr>
            `).join('');

            orderModal.style.display = 'flex';
            setTimeout(() => orderModal.classList.add('is-visible'), 10);
            orderModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        };

        const closeOrderModal = () => {
            orderModal.classList.remove('is-visible');
            orderModal.setAttribute('aria-hidden', 'true');
            setTimeout(() => {
                orderModal.style.display = 'none';
            }, 180);
            document.body.style.overflow = '';
        };

        document.querySelectorAll('[data-open-order]').forEach((button) => {
            button.addEventListener('click', () => {
                openOrderModal(JSON.parse(button.dataset.order));
            });
        });

        orderModal.addEventListener('click', (event) => {
            if (event.target === orderModal) {
                closeOrderModal();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && orderModal.classList.contains('is-visible')) {
                closeOrderModal();
            }
        });
    </script>
</body>
</html>
