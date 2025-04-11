<div>

        <div class="container mt-5">
            <h1 class="text-center">Shopping Cart</h1>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
                @endif
                <div class="product_card">
                    <div class="table-reponsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $productId => $item)
                                <tr>
                                    <td>{{ $item['title'] }}</td>
                                    <td>${{ $item['price'] }}</td>
                                    <td>
                                        <input type="number" wire:model.lazy="cart.{{ $productId }}.quantity" 
                                               min="1" wire:change="updateQuantity({{ $productId }}, cart.{{ $productId }}.quantity)">
                                    </td>
                                    <td>${{ $item['price'] * $item['quantity'] }}</td>
                                    <td>
                                        <button wire:click="removeFromCart({{ $productId }})">Remove</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <td></td>
                                    <td></td>
                                    <td>${{ $total }}</td>
                                    <td><button class="btn btn-primary" wire:click="confirmOrder">Confirm Order</button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



