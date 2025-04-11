<div class="row">
    @foreach ($products as $product)
    <div class="col-lg-4">
        <div class="product_card">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="product_img">
            <div class="pc_content">
                <h2>{{ $product->title }}</h2>
                <p class="pcc_in">In <a href="">{{ $product->category->name }}</a></p>
                <p class="pcc_desc">{{ $product->description }}</p>
                <p class="pcc_price">${{ $product->price }}</p>
                <div class="pcc_btns">
                    <button class="addtocart" wire:click="addToCart({{ $product->id }})">Add To Cart</button>
                    <a href="{{ route('product.show', $product->id) }}" class="viewbtn">View Details</a>
                </div>
                @if (session()->has('message') && session('product_id') == $product->id)
                <div class="alert alert-success mt-2">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>