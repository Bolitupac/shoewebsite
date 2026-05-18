<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products — Nelson Admin</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        .button-spinner {
            display: inline-block;
            width: 14px;
            height: 14px;
            border: 2px solid rgba(255,255,255,0.4);
            border-top-color: #fff;
            border-radius: 50%;
            margin-right: 8px;
            animation: spinner-rotate 0.8s linear infinite;
            vertical-align: middle;
        }
        @keyframes spinner-rotate {
            to { transform: rotate(360deg); }
        }
    </style>
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
                <h1 class="admin-page-title">Products <span class="count-badge">{{ $totalProducts }}</span></h1>
                <button class="admin-btn" type="button" onclick="openAddModal()">+ Add Product</button>
            </div>

            @if (session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert-error">
                    <ul style="margin:0; padding-left:20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <style>
                .admin-row-one-of-one {
                    background: linear-gradient(135deg, #111 0%, #222 100%) !important;
                    color: #d4af37 !important;
                }
                .admin-row-one-of-one td {
                    border-bottom-color: #333 !important;
                    color: inherit;
                }
                .admin-row-one-of-one .admin-table-img {
                    border-color: #d4af37;
                }
            </style>
            {{-- Products Table --}}
            <div class="table-wrap">
                <table class="admin-table products-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Categories</th>
                            <th>Section</th>
                            <th>Colour</th>
                            <th>Hidden</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        @php
                            // Decode categories since it is cast to array
                            $catStr = is_array($product->category) ? implode(', ', array_map('ucfirst', $product->category)) : ucfirst($product->category);
                        @endphp
                        <tr id="row-{{ $product->id }}" class="{{ !empty($product->limited_edition) ? 'admin-row-one-of-one' : '' }}">
                            <td data-label="Image">
                                @if($product->image)
                                    <img src="{{ Str::startsWith($product->image, 'http') ? $product->image : asset($product->image) }}" alt="image" style="width: 50px; height: 50px; object-fit: cover;">
                                @endif
                            </td>
                            <td data-label="Name">{{ $product->name }}</td>
                            <td data-label="Price">{{ $product->price }}</td>
                            <td data-label="Categories">{{ $catStr }}</td>
                            <td data-label="Section">{{ $product->section }}</td>
                            <td data-label="Colour">{{ $product->colour }}</td>
                            <td data-label="Hidden">{{ $product->hidden ? 'Yes' : 'No' }}</td>
                            <td class="actions-cell" data-label="Actions">
                                <button class="tbl-btn edit-btn" type="button" onclick="openEditModal({{ json_encode($product) }})">Edit</button>
                                <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}" style="display:inline" onsubmit="return confirm('Delete {{ addslashes($product->name) }}?')">
                                    @csrf @method('DELETE')
                                    <button class="tbl-btn delete-btn" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    {{-- Modal Overlay --}}
    <div id="productModal" class="admin-modal-overlay" style="display:none;" aria-hidden="true">
        <div class="admin-modal-content">
            <button class="admin-modal-close" onclick="closeModal()">×</button>
            <h2 class="admin-section-title" id="modalTitle">Add Product</h2>
            
            <div class="modal-flex-container">
                <div class="modal-image-preview" id="modalImagePreview" style="display:none;">
                    <img id="previewImg" src="" alt="Preview">
                </div>

                <form id="productForm" method="POST" action="{{ route('admin.products.store') }}" class="add-form" enctype="multipart/form-data" style="flex:1;">
                    @csrf
                    <input type="hidden" name="_method" id="formMethod" value="POST">
                    
                    <div class="edit-grid">
                        <div class="field-group">
                            <label for="form-name">Name</label>
                            <input type="text" id="form-name" name="name" required>
                        </div>
                        <div class="field-group">
                            <label for="form-price">Price</label>
                            <input type="number" id="form-price" name="price" placeholder="150000" required>
                        </div>
                        <div class="field-group">
                            <label for="form-category-target">Gender</label>
                            <select id="form-category-target" name="category_target" required>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="All" selected>All</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="form-category-item">Item Type</label>
                            <select id="form-category-item" name="category_item" required onchange="document.getElementById('shoe-type-group').style.display = this.value === 'Shoes' ? 'block' : 'none'">
                                <option value="" disabled selected>Select Item Type</option>
                                <option value="Shoes">Shoes</option>
                                <option value="Bags">Bags</option>
                                <option value="Wallets">Wallets</option>
                                <option value="Belts">Belts</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="field-group" id="shoe-type-group" style="display: block;">
                            <label for="form-category-shoe-type">Shoe Type</label>
                            <select id="form-category-shoe-type" name="category_shoe_type">
                                <option value="">Select Shoe Type (Optional)</option>
                                <option value="Oxford">Oxford</option>
                                <option value="Derby">Derby</option>
                                <option value="Brogue">Brogue</option>
                                <option value="Loafer">Loafer</option>
                                <option value="Penny Loafer">Penny Loafer</option>
                                <option value="Tassel Loafer">Tassel Loafer</option>
                                <option value="Fringed Loafer">Fringed Loafer</option>
                                <option value="Monk Strap">Monk Strap</option>
                                <option value="Chelsea Boot">Chelsea Boot</option>
                                <option value="Chukka Boot">Chukka Boot</option>
                                <option value="Country Boot">Country Boot</option>
                                <option value="Sneaker">Sneaker</option>
                                <option value="Trainer">Trainer</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="form-image">Product Image <small id="imageHelp">(required for new)</small></label>
                            <input type="file" id="form-image" name="image" accept="image/*">
                        </div>
                        <div class="field-group">
                            <label for="form-colour">Colour (Material / Finish)</label>
                            <input type="text" id="form-colour" name="colour" required>
                        </div>
                        <div class="field-group">
                            <label for="form-construction-type">Construction Type</label>
                            <input type="text" id="form-construction-type" name="construction_type" placeholder="e.g. Lockstitch">
                        </div>
                        <div class="field-group">
                            <label for="form-fitting-type">Fitting Type</label>
                            <select id="form-fitting-type" name="fitting_type" required>
                                <option value="All fittings" selected>All fittings</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="form-sole-type">Sole Type</label>
                            <input type="text" id="form-sole-type" name="sole_type" placeholder="e.g. Leather">
                        </div>
                        <div class="field-group">
                            <label for="form-hidden">Hidden</label>
                            <select id="form-hidden" name="hidden">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="form-limited-edition-count">Number of items to be made (Leave empty if not limited)</label>
                            <input type="number" id="form-limited-edition-count" name="limited_edition_count" placeholder="e.g. 1 for One-of-One" min="1">
                        </div>
                        <div class="field-group">
                            <label for="form-sold-out">Sold Out</label>
                            <input type="checkbox" id="form-sold-out" name="sold_out" value="1">
                        </div>
                        <div class="field-group full-width">
                            <label for="form-description">Description</label>
                            <textarea id="form-description" name="description" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="edit-actions" style="margin-top:1rem; justify-content:flex-end;">
                        <button class="tbl-btn" type="button" onclick="closeModal()">Cancel</button>
                        <button class="admin-btn" type="submit" id="submitBtn">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('productModal');
        const form = document.getElementById('productForm');
        const modalTitle = document.getElementById('modalTitle');
        const formMethod = document.getElementById('formMethod');
        const imageHelp = document.getElementById('imageHelp');
        const imageInput = document.getElementById('form-image');
        const previewContainer = document.getElementById('modalImagePreview');
        const previewImg = document.getElementById('previewImg');
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.dataset.originalText = submitBtn.textContent;
        const params = new URLSearchParams(window.location.search);
        const requestedProductId = params.get('open');

        function openAddModal() {
            modalTitle.textContent = 'Add Product';
            form.action = "{{ route('admin.products.store') }}";
            formMethod.value = "POST";
            form.reset();
            
            document.getElementById('form-category-target').value = "All";
            document.getElementById('form-category-item').value = "";
            document.getElementById('form-category-shoe-type').value = "";
            document.getElementById('shoe-type-group').style.display = 'none';
            document.getElementById('form-limited-edition-count').value = "";
            document.getElementById('form-sold-out').checked = false;
            document.getElementById('form-construction-type').value = '';
            document.getElementById('form-fitting-type').value = 'All fittings';
            document.getElementById('form-sole-type').value = '';

            imageHelp.textContent = '(required)';
            imageInput.required = true;
            previewContainer.style.display = 'none';
            submitBtn.textContent = 'Add Product';
            
            modal.style.display = 'flex';
            setTimeout(() => modal.classList.add('is-visible'), 10);
            document.body.style.overflow = 'hidden';
        }

        function openEditModal(product) {
            modalTitle.textContent = 'Edit Product';
            form.action = `/admin/products/${product.id}`;
            formMethod.value = "PATCH";
            form.reset();

            document.getElementById('form-name').value = product.name;
            document.getElementById('form-price').value = product.price;
            document.getElementById('form-colour').value = product.colour;
            document.getElementById('form-hidden').value = product.hidden ? '1' : '0';
            document.getElementById('form-description').value = product.description;

            const cats = Array.isArray(product.category) ? product.category : [product.category];
            document.getElementById('form-category-target').value = cats[0] || "Men";
            document.getElementById('form-category-item').value = cats[1] || "Shoes";
            document.getElementById('form-category-shoe-type').value = cats[2] || "";
            document.getElementById('shoe-type-group').style.display = document.getElementById('form-category-item').value === 'Shoes' ? 'block' : 'none';
            
            document.getElementById('form-limited-edition-count').value = product.limited_edition_count || '';
            document.getElementById('form-sold-out').checked = product.sold_out ? true : false;
            document.getElementById('form-construction-type').value = product.construction_type || '';
            let fType = product.fitting_type || 'All fittings';
            if (fType === 'All fitting types') {
                fType = 'All fittings';
            }
            document.getElementById('form-fitting-type').value = fType;
            document.getElementById('form-sole-type').value = product.sole_type || '';

            imageHelp.textContent = '(optional, leave empty to keep current)';
            imageInput.required = false;

            if (product.image) {
                const imgUrl = product.image.startsWith('http') ? product.image : `/${product.image}`;
                previewImg.src = imgUrl;
                previewContainer.style.display = 'flex';
            } else {
                previewContainer.style.display = 'none';
            }

            submitBtn.textContent = 'Save Changes';
            
            modal.style.display = 'flex';
            setTimeout(() => modal.classList.add('is-visible'), 10);
            document.body.style.overflow = 'hidden';
        }

        function openRequestedProductFromQuery() {
            if (!requestedProductId) {
                return;
            }

            const product = @json($products->keyBy('id'));
            const selectedProduct = product[requestedProductId];

            if (!selectedProduct) {
                return;
            }

            openEditModal(selectedProduct);

            const row = document.getElementById(`row-${requestedProductId}`);
            if (row) {
                row.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }

            const cleanUrl = new URL(window.location.href);
            cleanUrl.searchParams.delete('open');
            window.history.replaceState({}, '', cleanUrl.toString());
        }

        function closeModal() {
            modal.classList.remove('is-visible');
            setTimeout(() => {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }, 300);
        }

        function setSubmitLoading(isLoading) {
            if (!submitBtn) return;
            submitBtn.disabled = isLoading;
            submitBtn.innerHTML = isLoading ? '<span class="button-spinner"></span> Saving...' : submitBtn.dataset.originalText || submitBtn.textContent;
        }

        function createAdminToast(message) {
            let container = document.getElementById('admin-toast-container');
            if (!container) {
                container = document.createElement('div');
                container.id = 'admin-toast-container';
                container.style.cssText = 'position: fixed; bottom: 24px; right: 24px; z-index: 9999; display: flex; flex-direction: column; gap: 10px;';
                document.body.appendChild(container);
            }

            const toast = document.createElement('div');
            toast.textContent = message;
            toast.style.cssText = 'background: #111; color: #fff; padding: 12px 20px; border-radius: 8px; box-shadow: 0 8px 20px rgba(0,0,0,.25); font-size: 14px; opacity: 0; transform: translateY(16px); transition: all .25s ease; max-width: 320px;';
            container.appendChild(toast);
            requestAnimationFrame(() => {
                toast.style.opacity = '1';
                toast.style.transform = 'translateY(0)';
            });
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateY(16px)';
                setTimeout(() => toast.remove(), 250);
            }, 3200);
        }

        async function handleAdminFormSubmit(event) {
            event.preventDefault();
            setSubmitLoading(true);
            const data = new FormData(form);
            if (formMethod.value && formMethod.value !== 'POST') {
                data.set('_method', formMethod.value);
            }

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    },
                    body: data,
                });

                if (!response.ok) {
                    const payload = await response.json().catch(() => null);
                    const message = payload?.message || 'Failed to save product. Please try again.';
                    createAdminToast(message);
                    return;
                }

                const payload = await response.json();
                createAdminToast(payload.message || 'Product saved.');
            } catch (error) {
                createAdminToast('Unable to save product right now.');
            } finally {
                setSubmitLoading(false);
            }
        }

        form.addEventListener('submit', handleAdminFormSubmit);

        // Close when clicking outside modal content
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        openRequestedProductFromQuery();
    </script>
</body>
</html>
