<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> 
    </head>
    @component('layouts.components.navbar')
    @endcomponent
    <body> 
        @if ($pageContent->URI == 'home')
            <style>
                .page-title-header{
                    background: transparent;
                    padding: 20px; 
                    font-size: 15px;
                }
                .page-title-header p{ 
                    font-size: 15px;
                    text-transform: capitalize;
                    letter-spacing: 1px;
                    font-family: sans-serif;
                    text-align: justify !important;
                    /* padding: 10px 80px 10px 20px; */
                }
                body{
                    overflow-x: hidden;
                }
            </style>
            @component('layouts.components.carousel')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'home')
            @component('layouts.components.radioShow')
            @endcomponent
        @endif 

        <div class="page-title-header">
            {!!$pageContent->pageContent!!}
        </div> 
        @if ($pageContent->URI == 'shop')
            @component('layouts.components.sidenavbar')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'videos')
            @component('layouts.components.sidenavbar')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'audio')
            @component('layouts.components.sidenavbar')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'books')
            @component('layouts.components.sidenavbar')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'cart')
            @component('layouts.components.cart')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'checkOut')
            @component('layouts.components.checkout')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'sendemail')
            @component('layouts.components.send_email')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'adminLogin')
            @component('layouts.components.adminLogin')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'service')
            @component('layouts.components.service')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'news')
            @component('layouts.components.news')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'shop')
            @component('layouts.components.shop')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'audio')
            @component('layouts.components.audioShop')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'books')
            @component('layouts.components.bookShop')
            @endcomponent
        @endif
        @if ($pageContent->URI == 'videos')
            @component('layouts.components.videoShop')
            @endcomponent
        @endif
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        @component('layouts.components.contact')
        @endcomponent 
    </body>
    @component('layouts.components.footer')
    @endcomponent
</html>
