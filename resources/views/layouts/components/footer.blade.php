<footer class="footer-bottom">
<div class="contact-detail">
    @foreach($contactDetail as $con)
        {{$con->contactName}} <br>
        Office: {{$con->contactOffice}} <br>
        Postal: {{$con->contactPostal}} <br>
        Address: {{$con->contactAddress}} <br>
        Email: {{$con->contactEmail}} <br>
    @endforeach
</div>


@foreach ($footerContent as $footer)

        <p class="text-center">&copy; {{$footer -> footerText}} | <a href="{{$footer -> footerLink}}" target="_blank"> {{$footer -> footerName}}</a> </p>
    </footer>
@endforeach

