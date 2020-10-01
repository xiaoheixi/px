<div class="shop_header">
    <div class='container margin-top-20'>
        <div class="">
            <ul class="shop_header_tab">
                @foreach($sideNavContent as $sideNav)
                <li>
                    <a href="{!!$sideNav->sideNavLink!!}">{!!$sideNav->sideNavName!!}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>