<div class="service-page">
    <div class="container text-center">
        <hr />
        <div align="right">
            <a href="cart" class="btn btn-success">Go to Cart</a>
        </div>
        <hr />
        <div class="widget">
            <h3 align="left">Book Products</h3>
            <br />
            <div class="row">
                @foreach($books as $book)
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="/{{ $book->cover_img }}" alt="{{ $book->cover_img }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$book->name}}</h4>
                            <p class="card-text">{{$book->description}}</p>
                            <div align="right">
                                <a href="{{ route('cart.add', $book->id) }}" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
