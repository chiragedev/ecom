<div>
    <div class="com_card mx-2">
        <h3 class="com_card_title mb-3">Add New Product</h3>
        <div class="card-body">
            <form wire:submit.prevent="saveProduct" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Product Title</label>
                    <input type="text" id="title" wire:model="title" class="form-control" placeholder="Enter product title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" wire:model="description" class="form-control" rows="4" placeholder="Enter product description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" id="price" wire:model="price" class="form-control" placeholder="Enter product price" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" wire:model="category_id" class="form-select" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" id="image" wire:model="image" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn-one mt-3">Add Product</button>
                </div>
            </form>

            @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <!-- List of Products -->
    <div class="com_card mx-2 mt-4">
        <h3 class="com_card_title mb-3">All Products</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <button wire:click="deleteProduct({{ $product->id }})" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>