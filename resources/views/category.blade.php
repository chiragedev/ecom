<x-layouts.app>
  <div class="container mt-5">
    <div class="products-grid">
      @foreach ($products as $product)
        <div class="product_card">
          <img
            src="{{ asset('storage/' . $product->image) }}"
            alt="{{ $product->title }}"
            class="product_img"
          />
          <div class="pc_content">
            <h2>{{ $product->title }}</h2>
            <p class="pcc_in">{{ $product->description }}</p>
            <p class="pcc_price">${{ $product->price }}</p>
            <div class="pcc_btns">
              <a href="{{ route('product.show', $product->id) }}" class="viewbtn">View Details</a>
              <button wire:click="addToCart({{ $product->id })" class="addtocart">Add To Cart</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</x-layouts.app>