<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;

    public $title, $description, $price, $image, $categories, $category_id, $products;

    public function mount()
    {
        $this->categories = Category::all();
        $this->products = Product::with('category')->get();
    }

    public function saveProduct()
    {
        $path = $this->image->store('products', 'public');

       Product::create([
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $path,
        ]);

        session()->flash('message', 'Product added successfully!');
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);
        if ($product) {
            $product->delete();
            session()->flash('message', 'Product deleted successfully!');
            $this->products = Product::with('category')->get(); // Refresh the product list
        }
    }

    public function render()
    {
        return view('livewire.add-product-component')->layout('components.layouts.admin');
    }
}