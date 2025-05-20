<form method="GET" action="{{ route('products.search') }}">
    <input type="text" name="search" placeholder="Search...">
    <select name="category">
        <option value="">All Categories</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
    <button type="submit">Filter</button>
</form>


<h1>All Products</h1>

@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>
    <ul>
        @foreach($products->where('category_id', $category->id) as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">
                    {{ $product->name }} - ${{ $product->price }}
                </a>
            </li>
        @endforeach
    </ul>
@endforeach

{{ $products->links() }} <!-- Laravel pagination links -->
