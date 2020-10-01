

<div class="news-page page">
    <div class="container">
        <div class="row">
            @foreach ($newsContent as $news)

            <div class="col-md-4" style="margin-bottom: 20px;">
                <div class="card h-4">
                    <div class="card-body">
                        <h4 class="card-title">{{ $news->newsName }}</h4>
                        <p style="padding: 3px;margin: 0;">{{ $news->newsDescription}}</p>
                        <a href="{{ $news->newsLink }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div> 