<div>
    <h1>Продукты</h1>
    @forelse ($products as $product)
        <div>
            <div>{{ $product->title }}</div>
            <div><img src="{{ $product->image }}" alt="{{ $product->title }}"></div>
            <div>{{ $product->description }}</div>
        </div>
    @empty
        <p>No products</p>
    @endforelse
</div>
