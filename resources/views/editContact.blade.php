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

        <h1>Fill in the form to edit a contact detail below.</h1>
        <hr />
        <form action="/contact/{{ $contactDetail->contactName }}" method="post">
          @csrf
          @method('PATCH')
          <label for="contactName">Contact Name:</label><br>
          <input type="text" id="contactName" name="contactName" autocomplete="off" value="{{ $contactDetail->contactName }}"><br>
          @error('contactName') <p style="color: red">{{ $message }}</p> @enderror
          <label for="contactOffice">Contact Office:</label><br>
          <input type="text" id="contactOffice" name="contactOffice" autocomplete="off" value="{{ $contactDetail->contactOffice }}"><br>
          @error('contactOffice') <p style="color: red">{{ $message }}</p> @enderror
          <label for="contactPostal">Contact Postal:</label><br>
          <input type="text" id="contactPostal" name="contactPostal" autocomplete="off" value="{{ $contactDetail->contactPostal }}"><br>
          @error('contactPostal') <p style="color: red">{{ $message }}</p> @enderror
          <label for="contactAddress">Contact Address:</label><br>
          <input type="text" id="contactAddress" name="contactAddress" autocomplete="off" value="{{ $contactDetail->contactAddress }}"><br>
          @error('contactAddress') <p style="color: red">{{ $message }}</p> @enderror
          <label for="contactEmail">Contact Email:</label><br>
          <input type="text" id="contactEmail" name="contactEmail" autocomplete="off" value="{{ $contactDetail->contactEmail }}"><br>
          @error('contactEmail') <p style="color: red">{{ $message }}</p> @enderror
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