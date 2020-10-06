<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<div class="admin_sidebar">
    <h1><a href="/">Marketing4growth</a></h1>
    <ul>
        @foreach($adminSideNavContent as $adminSideNav)
        <li>
            <a href="{!!$adminSideNav->adminSideNavLink!!}">{!!$adminSideNav->adminSideNavName!!}</a>
        </li>
        @endforeach
    </ul>
</div>
