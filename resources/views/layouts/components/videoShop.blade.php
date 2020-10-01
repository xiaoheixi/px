<div class="service-page">
    <div class="container text-center">
        <hr />
        <div align="right">
            <a href="cart" class="btn btn-success">Go to Cart</a>
        </div>
        <hr />
        <div class="widget">
            <h3 align="left">Video Products</h3>
            <br />
            <div class="row">
                @foreach($videos as $video)
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="/{{ $video->cover_img }}" alt="{{ $video->cover_img }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$video->name}}</h4>
                            <p class="card-text">{{$video->description}}</p>
                            <div align="right">
                                <a href="{{ route('cart.add', $video->id) }}" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
