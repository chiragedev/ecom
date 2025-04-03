<div class="container mx-auto py-8">

    

    <div class="flex flex-col md:flex-row items-center">

        <!-- Product Image -->

        <div class="w-full md:w-1/2">

            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="w-full h-auto">

        </div>

        <!-- Product Details -->

        <div class="w-full md:w-1/2 mt-8 md:mt-0 md:ml-8">

            <h1 class="text-2xl font-bold">{{ $product->title }}</h1>

            <p class="text-gray-600 mt-4">{{ $product->description }}</p>

            <p class="text-xl font-semibold text-green-500 mt-4">Price: ${{ $product->price }}</p>

            <!-- Add to Cart Button -->

            <button wire:click="addToCart({{ $product->id }})">Add to Cart</button>

        </div>

    </div>

    @if (session()->has('message'))

        <div class="alert alert-success">{{ session('message') }}</div>

    @endif

</div>