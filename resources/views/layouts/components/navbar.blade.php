<!-- <nav class="navbar fixed-top navbar-expand-lg"> -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/Marketing_4_Growth_Logo.png') }}" style="width: 200px;height: 60px;" />
        <!-- <img src="{{ asset('public/images/logo.png') }}" /> -->
    </a>
    <button style="background-color: #fff;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon glyphicon glyphicon-th-list"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @foreach($navContent as $nav) 
            @if($nav->navName=="Members Login")
            <li class="nav-item">
                <a class="nav-link" href="{!!$nav->navLink!!}" target="_blank">{!!$nav->navName!!}</a>
            </li>
            @elseif($nav->navName=="Customer Support")
            <li class="nav-item">
                <a class="nav-link" href="{!!$nav->navLink!!}" target="_blank">{!!$nav->navName!!}</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{!!$nav->navLink!!}">{!!$nav->navName!!}</a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</nav>