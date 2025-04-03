<div>

    <h1>Browse Products</h1>

    @foreach ($products as $product)

        <div>

            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">

            <p>{{ $product->title }}</p>

            <p>{{ $product->description }}</p>

            <p>${{ $product->price }}</p>

            <button wire:click="addToCart({{ $product->id }})">Add To Cart</button>

                <a href="{{ route('product.show', $product->id) }}" >View Details</a>

        </div>

    @endforeach

</div> 