@if(count($errors) > 0)
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <form class="form-container" method="post" action="{{ url('sendemail/send') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Enter Your Name</label><br>
                <input type="text" name="name" class=" form-controlThankYou" />
            </div>
            <div class="form-group">
                <label for="email">Enter Your Email</label><br>
                <input type="text" name="email" class="form-controlThankYou" />
            </div>
            <div class="form-group">
                <label for="message">Enter Your Message</label><br>
                <textarea name="message" class="form-controlThankYouMessage" placeholder="Write something.."></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" value="Send" class="btn btn-info btn-block" />
        </form>
    </div>
</div>
