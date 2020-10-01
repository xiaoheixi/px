<script>
    $('.carousel').carousel({
      interval: 1000
    })
</script>
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($carouselContent->take(3) as $carousel)
            <div class="text-center carousel-item @if($loop->first) active @endif">
                <img style="height: 500px;" class="d-block w-100 max-auto img-fluid" src="/{{$carousel->carouselImage}}" alt="{{$carousel->carouselName}}">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>