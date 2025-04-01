<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;

    public $title, $description, $price, $image, $categories, $category_id;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function saveProduct()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|max:1024', // Ensure the image is uploaded and valid
        ]);

        $path = $this->image->store('products', 'public');

        Product::create([
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $path,
        ]);

        session()->flash('message', 'Product added successfully!');
        $this->reset(['title', 'description', 'price', 'image', 'category_id']);
    }

    public function render()
    {
        return view('livewire.add-product-component')->layout('components.layouts.admin');
    }
}