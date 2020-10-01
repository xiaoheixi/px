<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />  
<div class="admin_sidebar">
    <img src="{{ asset('images/logo.jpg') }}" style="width: 250px;height: 80px;" />
    <ul>
        @foreach($adminSideNavContent as $adminSideNav)
        <li>
            <a href="{!!$adminSideNav->adminSideNavLink!!}">{!!$adminSideNav->adminSideNavName!!}</a>
        </li>
        @endforeach
    </ul>
</div>