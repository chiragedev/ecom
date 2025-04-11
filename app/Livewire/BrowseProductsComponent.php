<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class BrowseProductsComponent extends Component
{
    public function addToCart($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            session()->flash('error', 'Product not found.');
            return;
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'title' => $product->title,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        session()->flash('message', "{$product->title} added to cart.");
        session()->flash('product_id', $productId); // Store the product ID
    }

    public function render()
    {
        return view('livewire.browse-products-component', ['products' => Product::all()]);
    }
}
