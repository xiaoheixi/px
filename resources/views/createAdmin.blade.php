<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Administrator Management</title>
</head>

<body>
  <div class='container-fluid'>
    <div class="row">
      <div class="col-md-3 col-xs-12">
        @component('layouts.components.adminSideNavBar')
        @endcomponent
      </div>
      <div class="col-md-9 col-xs-12 ">
        <br />
        <h1>Fill in the form to add an Administrator below.</h1>
        <hr />
        <form action="/storeAdmin" method="post">
          @csrf
          <label for="name">Admin Name:</label><br>
          <input type="text" id="name" name="name" autocomplete="off" value="{{ old('name') }}"><br>
          @error('name') <p style="color: red">{{ $message }}</p> @enderror
          <label for="email">Admin Email:</label><br>
          <input type="text" id="email" name="email" autocomplete="off" value="{{ old('email') }}"><br>
          @error('email') <p style="color: red">{{ $message }}</p> @enderror
          <label for="password">Admin Password:</label><br>
          <input type="text" id="password" name="password" autocomplete="off" value="{{ old('password') }}"><br>
          @error('password') <p style="color: red">{{ $message }}</p> @enderror
          <br/>
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>