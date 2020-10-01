<div class="service-page page">
    <div class="container">
        <div class="row">
            @foreach ($serviceContent as $service)

            <div class="col-md-4" style="margin-bottom: 20px;">
                <div class="card h-4">
                    <div class="card-body">
                        <h4 class="card-title">{{ $service->serviceName }}</h4>
                        <p>{{ $service->serviceDescription}}</p>
                        <a href="{{ $service->serviceLink }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
 