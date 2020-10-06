<div class="service-page">
    <div class="container text-center">
        <hr />
        <div align="right">
            <a href="cart" class="btn btn-success">Go to Cart</a>
        </div>
        <hr />
        <div class="widget">
            <h3 align="left">Products</h3>
            <br />
            <div class="row">
                @foreach($allProducts as $product)
                <div class="col-4">
                    <div class="card">
                        <img height="250px" width="150px" class="card-img-top" src="/{{ $product->cover_img }}" alt="{{ $product->cover_img }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->name}}</h4>
                            <p class="card-text">{{$product->description}}</p>
                            <div align="right">
                                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> 