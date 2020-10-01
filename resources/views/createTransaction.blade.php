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
        <h1>Fill in the form to add a transaction below.</h1>
        <hr />
        <form action="/storeTransaction" method="post">
          @csrf
          <label for="firstName">First Name:</label><br>
          <input type="text" id="firstName" name="firstName" autocomplete="off" value="{{ old('firstName') }}"><br>
          @error('firstName') <p style="color: red">{{ $message }}</p> @enderror
          <label for="lastName">Last Name:</label><br>
          <input type="text" id="lastName" name="lastName" autocomplete="off" value="{{ old('lastName') }}"><br>
          @error('lastName') <p style="color: red">{{ $message }}</p> @enderror
          <label for="email">Email:</label><br>
          <input type="text" id="email" name="email" autocomplete="off" value="{{ old('email') }}"><br>
          @error('email') <p style="color: red">{{ $message }}</p> @enderror
          <input type="radio" id="PayPal" name="paymentMethod" value="PayPal">
          <label for="PayPal">Paypal</label><br>
          <input type="radio" id="Square" name="paymentMethod" value="Square">
          <label for="Square">Square</label><br>
          <input type="radio" id="Stripe" name="paymentMethod" value="Stripe">
          <label for="Stripe">Stripe</label><br>
          @error('paymentMethod') <p style="color: red">{{ $message }}</p> @enderror
          <label for="productName">Product Name:</label><br>
          <input type="text" id="productName" name="productName" autocomplete="off" value="{{ old('productName') }}"><br>
          @error('productName') <p style="color: red">{{ $message }}</p> @enderror
          <label for="productPrice">Product Price:</label><br>
          <input type="text" id="productPrice" name="productPrice" autocomplete="off" value="{{ old('productPrice') }}"><br>
          @error('productPrice') <p style="color: red">{{ $message }}</p> @enderror
          <label for="totalPrice">Total Price:</label><br>
          <input type="text" id="totalPrice" name="totalPrice" autocomplete="off" value="{{ old('totalPrice') }}"><br>
          @error('totalPrice') <p style="color: red">{{ $message }}</p> @enderror
          <label for="quantity">Quantity:</label><br>
          <input type="text" id="quantity" name="quantity" autocomplete="off" value="{{ old('quantity') }}"><br>
          @error('quantity') <p style="color: red">{{ $message }}</p> @enderror
          <br/>
          <input class="btn btn-primary" type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>