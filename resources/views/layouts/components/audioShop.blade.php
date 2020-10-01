<div class="service-page">
    <div class="container text-center">
        <hr />
        <div align="right">
            <a href="cart" class="btn btn-success">Go to Cart</a>
        </div>
        <hr />
        <div class="widget">
            <h3 align="left">Audio Products</h3>
            <br />
            <div class="row">
                @foreach($audios as $audio)
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="/{{ $audio->cover_img }}" alt="{{ $audio->cover_img }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$audio->name}}</h4>
                            <p class="card-text">{{$audio->description}}</p>
                            <div align="right">
                                <a href="{{ route('cart.add', $audio->id) }}" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
