<div>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="com_card mx-2">
        <h3 class="com_card_title mb-3">Add New Category</h3>

        <form wire:submit.prevent="saveCategory">
          <label for="" class="form_label">Category Name</label>
          <input type="text" class="form-input" wire:model="name"  />

          <button type="submit" class="btn-one mt-3">Add Category</button>
        </form>
    </div>

    <div class="com_card mx-2">
        <h3 class="com_card_title mb-3">All Categories</h3>

        <div class="table-responsive">
          <table class="data-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <button wire:click="deleteCategory({{ $category->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>

