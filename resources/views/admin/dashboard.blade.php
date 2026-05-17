<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard — Nelson Admin</title>
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
                <h1 class="admin-page-title">Dashboard</h1>
                <a class="admin-btn" href="{{ route('admin.orders') }}">View Orders →</a>
            </div>

            <div class="stat-grid">
                <div class="stat-card">
                    <span class="stat-label">Total Products</span>
                    <span class="stat-value">{{ $totalProducts }}</span>
                </div>
                <div class="stat-card">
                    <span class="stat-label">Total Orders</span>
                    <span class="stat-value">{{ $totalOrders }}</span>
                </div>
                <div class="stat-card">
                    <span class="stat-label">Hidden (Draft)</span>
                    <span class="stat-value">{{ $hiddenCount }}</span>
                </div>
                <div class="stat-card">
                    <span class="stat-label">Sections</span>
                    <span class="stat-value">{{ $sections->count() }}</span>
                </div>
            </div>

            <div class="admin-section">
                <h2 class="admin-section-title">Products by Section</h2>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Section</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sections as $section => $count)
                        <tr>
                            <td>{{ ucwords(str_replace('-', ' ', $section)) }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="admin-section">
                <h2 class="admin-section-title">Recently Added</h2>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Section</th>
                            <th>Price</th>
                            <th>Hidden</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentProducts as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ ucwords(str_replace('-', ' ', $product->section)) }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->hidden ? 'Yes' : 'No' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="admin-section">
                <h2 class="admin-section-title">Orders</h2>
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
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($recentOrders as $order)
                        <tr>
                            <td>#{{ $order->id }}</td>
                            <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ collect($order->items)->sum('quantity') }}</td>
                            <td>₦{{ number_format((float) $order->total, 2) }}</td>
                            <td>{{ ucfirst($order->status) }}</td>
                            <td>{{ $order->created_at->format('M d, Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No orders yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
