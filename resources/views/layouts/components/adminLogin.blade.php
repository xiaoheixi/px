<div class="service-page">
  <div class="container ">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
          <br/><br/>

        <div class="widget cart" style="padding: 20px;background: #dcdcdc;">
          <center>
          <img src="{{ asset('images/Marketing_4_Growth_Logo.png') }}" style="width: 250px;height: 80px;" />
          </center>
          <hr/>
          <h3 align="left">Login</h3> 
          <hr />

          <form action="/authenticate" method="post">
            @csrf
            <label for="email"><b>Email:</b></label><br>
            <input class="form-control" type="text" id="email" name="email"><br>
            @error('email') <p style="color: red">{{ $message }}</p> @enderror
            <label for="password"><b>Password:</b></label><br>
            <input class="form-control"  type="password" id="password" name="password"><br><br>
            @error('password') <p style="color: red">{{ $message }}</p> @enderror
            <input type="submit" value="Login Now" class="btn btn-success">
          </form>
        </div>
        <br/><br/>
      </div>
    </div>
  </div>
</div>