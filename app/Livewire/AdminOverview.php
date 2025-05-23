<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class AdminOverview extends Component
{
    public $totalOrders;
    public $totalProducts;
    public $totalCategories;
    public $ordersByStatus;

    public function mount()
    {
        $this->loadOverviewData();
    }

    public function loadOverviewData()
    {
        $this->totalOrders = Order::count();
        $this->totalProducts = Product::count();
        $this->totalCategories = Category::count();
    }
    public function render()
    {
        return view('livewire.admin-overview')->layout('components.layouts.admin');
    }
}
