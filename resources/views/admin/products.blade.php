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
                <button class="admin-btn" type="button" onclick="document.getElementById('add-form').scrollIntoView({behavior:'smooth'})">+ Add Product</button>
            </div>

            @if (session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            {{-- Products Table --}}
            <div class="table-wrap">
                <table class="admin-table products-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Section</th>
                            <th>Colour</th>
                            <th>Badge</th>
                            <th>Hidden</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr id="row-{{ $product->id }}">
                            {{-- View row --}}
                            <td class="view-mode">{{ $product->name }}</td>
                            <td class="view-mode">{{ $product->price }}</td>
                            <td class="view-mode">{{ $product->category }}</td>
                            <td class="view-mode">{{ $product->section }}</td>
                            <td class="view-mode">{{ $product->colour }}</td>
                            <td class="view-mode">{{ $product->badge ?? '—' }}</td>
                            <td class="view-mode">{{ $product->hidden ? 'Yes' : 'No' }}</td>
                            <td class="view-mode actions-cell">
                                <button class="tbl-btn edit-btn" type="button" onclick="openEdit('{{ $product->id }}')">Edit</button>
                                <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}" style="display:inline" onsubmit="return confirm('Delete {{ addslashes($product->name) }}?')">
                                    @csrf @method('DELETE')
                                    <button class="tbl-btn delete-btn" type="submit">Delete</button>
                                </form>
                            </td>

                            {{-- Edit row (hidden by default) --}}
                            <td class="edit-mode" colspan="8" style="display:none; padding: 1rem;">
                                <form method="POST" action="{{ route('admin.products.update', $product->id) }}" class="inline-edit-form" enctype="multipart/form-data">
                                    @csrf @method('PATCH')
                                    <div class="edit-grid">
                                        <div class="field-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{ $product->name }}" required>
                                        </div>
                                        <div class="field-group">
                                            <label>Price</label>
                                            <input type="text" name="price" value="{{ $product->price }}" required>
                                        </div>
                                        <div class="field-group">
                                            <label>Category</label>
                                            <select name="category" required>
                                                @foreach(['oxford','derby','loafer','one-of-one','belt','wallet'] as $cat)
                                                    <option value="{{ $cat }}" {{ $product->category === $cat ? 'selected' : '' }}>{{ ucfirst($cat) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="field-group">
                                            <label>Section</label>
                                            <select name="section" required>
                                                @foreach(['men','women','newly-made','accessories','one-of-one'] as $sec)
                                                    <option value="{{ $sec }}" {{ $product->section === $sec ? 'selected' : '' }}>{{ ucwords(str_replace('-',' ',$sec)) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="field-group">
                                            <label>Image upload (leave empty to keep current)</label>
                                            <input type="file" name="image" accept="image/*">
                                            <small style="display:block;margin-top:0.25rem;color:#666">Current: {{ basename($product->image) }}</small>
                                        </div>
                                        <div class="field-group">
                                            <label>Colour</label>
                                            <input type="text" name="colour" value="{{ $product->colour }}" required>
                                        </div>
                                        <div class="field-group">
                                            <label>Badge</label>
                                            <input type="text" name="badge" value="{{ $product->badge }}">
                                        </div>
                                        <div class="field-group">
                                            <label>Hidden</label>
                                            <select name="hidden">
                                                <option value="0" {{ !$product->hidden ? 'selected' : '' }}>No</option>
                                                <option value="1" {{ $product->hidden ? 'selected' : '' }}>Yes</option>
                                            </select>
                                        </div>
                                        <div class="field-group full-width">
                                            <label>Description</label>
                                            <textarea name="description" rows="2" required>{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="edit-actions">
                                        <button class="admin-btn" type="submit">Save</button>
                                        <button class="tbl-btn" type="button" onclick="closeEdit('{{ $product->id }}')">Cancel</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Add Product Form --}}
            <div class="admin-section" id="add-form">
                <h2 class="admin-section-title">Add Product</h2>
                <form method="POST" action="{{ route('admin.products.store') }}" class="add-form" enctype="multipart/form-data">
                    @csrf
                    <div class="edit-grid">
                        <div class="field-group">
                            <label for="add-name">Name</label>
                            <input type="text" id="add-name" name="name" value="{{ old('name') }}" required>
                            @error('name') <span class="field-error">{{ $message }}</span> @enderror
                        </div>
                        <div class="field-group">
                            <label for="add-price">Price</label>
                            <input type="text" id="add-price" name="price" value="{{ old('price') }}" placeholder="N1,000,000" required>
                            @error('price') <span class="field-error">{{ $message }}</span> @enderror
                        </div>
                        <div class="field-group">
                            <label for="add-category">Category</label>
                            <select id="add-category" name="category" required>
                                @foreach(['oxford','derby','loafer','one-of-one','belt','wallet'] as $cat)
                                    <option value="{{ $cat }}" {{ old('category') === $cat ? 'selected' : '' }}>{{ ucfirst($cat) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="add-section">Section</label>
                            <select id="add-section" name="section" required>
                                @foreach(['men','women','newly-made','accessories','one-of-one'] as $sec)
                                    <option value="{{ $sec }}" {{ old('section') === $sec ? 'selected' : '' }}>{{ ucwords(str_replace('-',' ',$sec)) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="add-image">Product Image</label>
                            <input type="file" id="add-image" name="image" accept="image/*" required>
                            @error('image') <span class="field-error">{{ $message }}</span> @enderror
                        </div>
                        <div class="field-group">
                            <label for="add-colour">Colour</label>
                            <input type="text" id="add-colour" name="colour" value="{{ old('colour') }}" required>
                        </div>
                        <div class="field-group">
                            <label for="add-badge">Badge</label>
                            <input type="text" id="add-badge" name="badge" value="{{ old('badge') }}" placeholder="e.g. Fresh Drop">
                        </div>
                        <div class="field-group">
                            <label for="add-hidden">Hidden</label>
                            <select id="add-hidden" name="hidden">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="field-group full-width">
                            <label for="add-description">Description</label>
                            <textarea id="add-description" name="description" rows="2" required>{{ old('description') }}</textarea>
                            @error('description') <span class="field-error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="edit-actions" style="margin-top:1rem">
                        <button class="admin-btn" type="submit">Add Product</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        function openEdit(id) {
            const row = document.getElementById('row-' + id);
            row.querySelectorAll('.view-mode').forEach(el => el.style.display = 'none');
            row.querySelector('.edit-mode').style.display = '';
        }
        function closeEdit(id) {
            const row = document.getElementById('row-' + id);
            row.querySelectorAll('.view-mode').forEach(el => el.style.display = '');
            row.querySelector('.edit-mode').style.display = 'none';
        }
    </script>
</body>
</html>
