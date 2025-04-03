<div>

    <h2>Shopping Cart</h2>

    @if (session()->has('message'))

        <p style="color: green;">{{ session('message') }}</p>

    @endif

    @if (session()->has('error'))

        <p style="color: red;">{{ session('error') }}</p>

    @endif

    @if (empty($cart))

        <p>Your cart is empty.</p>

    @else

        <table>

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

        </table>

        <h3>Total: ${{ $total }}</h3>

        <button wire:click="confirmOrder">Confirm Order</button>

    @endif

    
</div>