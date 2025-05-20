<h1>Shopping Cart</h1>

@if($cart)
    <ul>
        @foreach($cart as $id => $item)
            <li>
                {{ $item['name'] }} ({{ $item['quantity'] }}) - ${{ $item['price'] * $item['quantity'] }}
            </li>
        @endforeach
    </ul>
@else
    <p>Cart is empty.</p>
@endif
