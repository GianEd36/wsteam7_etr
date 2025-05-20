<h1>{{ $product->name }}</h1>
<p>Category: {{ $product->category->name }}</p>
<p>Description: {{ $product->description }}</p>
<p>Price: ${{ $product->price }}</p>

<form method="POST" action="{{ route('cart.add', $product->id) }}">
    @csrf
    <button type="submit">Add to Cart</button>
</form>
