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
<form class="formThankYou" method="post" action="{{ url('sendemail/send') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Enter Your Name</label>
        <input type="text" name="name" class=" form-controlThankYou" />
    </div>
    <div class="form-group">
        <label>Enter Your Email</label>
        <input type="text" name="email" class="form-controlThankYou" />
    </div>
    <div class="form-group">
        <label>Enter Your Message</label>
        <textarea name="message" class="form-controlThankYouMessage"></textarea>
    </div>
    <div class="form-groupFooter">
        <input type="submit" name="send" value="Send" class="btn btn-info" />
</form>
