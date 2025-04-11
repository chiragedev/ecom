<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\AddProductComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\OrderManagementComponent;
use App\Livewire\BrowseProductsComponent;
use App\Livewire\SingleProductComponent;
use App\Http\Controllers\CategoryController;
use App\Livewire\AdminOverview;
use App\Livewire\CartComponent;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    $products = Product::with('category')->get(); // Fetch products with their categories
    $categories = \App\Models\Category::all(); // Fetch all categories
    return view('home', compact('products', 'categories')); // Pass products and categories to the view
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','rolemanager:customer'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin');

Route::get('/product/{id}', SingleProductComponent::class)->name('product.show');

Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category.show');

Route::get('/category', function () {
    $products = Product::all(); // Fetch all products
    return view('category', compact('products')); // Pass products to the view
});

Route::get('/products', BrowseProductsComponent::class)->name('products.browse');

Route::middleware(['auth', 'verified', 'rolemanager:customer'])->group(function(){

    Route::get('/cart', CartComponent::class)->name('cart');



});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminOverview::class)->name('admin.dashboard');

    Route::get('/admin/categories', CategoryComponent::class)->name('admin.categories');

    Route::get('/admin/add-product', AddProductComponent::class)->name('admin.add-product');

    Route::get('/admin/orders', OrderManagementComponent::class)->name('admin.orders');

});

use App\Http\Controllers\StripeController;

Route::get('/payment/form', function () {
    return view('payment.form');
})->name('payment.form');

Route::post('/stripe/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');

use App\Http\Controllers\PaymentController;

Route::get('/payment/form', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');

require __DIR__.'/auth.php';
