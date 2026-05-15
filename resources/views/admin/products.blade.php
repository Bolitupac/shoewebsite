<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products — Nelson Admin</title>
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
                            <th>Badge</th>
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
                        <tr id="row-{{ $product->id }}">
                            <td>
                                @if($product->image)
                                    <img src="{{ Str::startsWith($product->image, 'http') ? $product->image : asset($product->image) }}" alt="image" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $catStr }}</td>
                            <td>{{ $product->section }}</td>
                            <td>{{ $product->colour }}</td>
                            <td>{{ $product->badge ?? '—' }}</td>
                            <td>{{ $product->hidden ? 'Yes' : 'No' }}</td>
                            <td class="actions-cell">
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
                            <input type="text" id="form-price" name="price" placeholder="N1,000,000" required>
                        </div>
                        <div class="field-group">
                            <label for="form-category">Category (Hold Ctrl/Cmd to select multiple)</label>
                            <select id="form-category" name="category[]" multiple required style="height: 100px;">
                                @foreach(['oxford','derby','loafer','one-of-one','belt','wallet', 'accessories'] as $cat)
                                    <option value="{{ $cat }}">{{ ucfirst($cat) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="form-section">Section</label>
                            <select id="form-section" name="section" required>
                                @foreach(['men','women','newly-made','accessories','one-of-one'] as $sec)
                                    <option value="{{ $sec }}">{{ ucwords(str_replace('-',' ',$sec)) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="form-image">Product Image <small id="imageHelp">(required for new)</small></label>
                            <input type="file" id="form-image" name="image" accept="image/*">
                        </div>
                        <div class="field-group">
                            <label for="form-colour">Colour</label>
                            <input type="text" id="form-colour" name="colour" required>
                        </div>
                        <div class="field-group">
                            <label for="form-badge">Badge</label>
                            <input type="text" id="form-badge" name="badge" placeholder="e.g. Fresh Drop">
                        </div>
                        <div class="field-group">
                            <label for="form-hidden">Hidden</label>
                            <select id="form-hidden" name="hidden">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
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

        function openAddModal() {
            modalTitle.textContent = 'Add Product';
            form.action = "{{ route('admin.products.store') }}";
            formMethod.value = "POST";
            form.reset();
            
            // clear multi-select
            Array.from(document.getElementById('form-category').options).forEach(opt => opt.selected = false);

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
            document.getElementById('form-section').value = product.section;
            document.getElementById('form-colour').value = product.colour;
            document.getElementById('form-badge').value = product.badge || '';
            document.getElementById('form-hidden').value = product.hidden ? '1' : '0';
            document.getElementById('form-description').value = product.description;

            // set multi-select
            const cats = Array.isArray(product.category) ? product.category : [product.category];
            Array.from(document.getElementById('form-category').options).forEach(opt => {
                opt.selected = cats.includes(opt.value);
            });

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

        function closeModal() {
            modal.classList.remove('is-visible');
            setTimeout(() => {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }, 300);
        }

        // Close when clicking outside modal content
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
</body>
</html>
