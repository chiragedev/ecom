<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{
    public $name;

    public $categories;

    public function mount()

    {

        $this->categories = Category::all();

    }

    public function saveCategory()

    {

        $this->validate(['name' => 'required|string|max:255']);

        Category::create(['name' => $this->name]);

        $this->name = '';

        $this->categories = Category::all();

        session()->flash('message', 'Category added successfully!');

    }

    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);

        if ($category) {
            if ($category->products()->exists()) {
                session()->flash('error', 'Cannot delete category.');
                return;
            }

            $category->delete();
            session()->flash('message', 'Category deleted successfully!');
            $this->categories = Category::all(); // Refresh the category list
        } else {
            session()->flash('error', 'Category not found.');
        }
    }

    public function render()

    {

        return view('livewire.category-component', [

            'categories' => $this->categories,

        ])->layout('components.layouts.admin');

    }
    
}
