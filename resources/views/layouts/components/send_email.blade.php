<div class="service-page page">
    <div class="container">
        <div class="row align-items-center">
            <Div class="col-md-6 " style="margin-top: 50px;margin-bottom: 40px;">
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
                <form method="post" action="{{ url('sendemail/send') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Enter Your Name</label>
                        <input type="text" name="name" class=" form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Message</label>
                        <textarea style="min-height:200px" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" value="Send" class="btn btn-info" />
                </form>
            </div>
        </Div>
    </div>
</div>
