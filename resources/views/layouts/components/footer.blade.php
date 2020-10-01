@foreach ($footerContent as $footer)
    <footer class="footer-bottom">
        <p class="text-center">&copy; {{$footer -> footerText}} | <a href="{{$footer -> footerLink}}"> {{$footer -> footerName}}</a> </p>
    </footer>
@endforeach

