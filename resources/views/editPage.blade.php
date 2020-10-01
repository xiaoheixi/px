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
        <h1>Fill in the form to edit a page below.</h1>
        <hr />
        <form action="/page/{{ $pageContent->URI }}" method="post">
          @csrf
          @method('PATCH')
          <label for="title">Title:</label><br>
          <input type="text" id="title" name="title" autocomplete="off" value="{{ $pageContent -> title }}"><br>
          @error('title') <p style="color: red">{{ $message }}</p> @enderror
          <label for="URI">URI:</label><br>
          <input type="text" id="URI" name="URI" autocomplete="off" value="{{ $pageContent -> URI }}"><br>
          @error('URI') <p style="color: red">{{ $message }}</p> @enderror
          <label for="pageContent">Page Content:</label><br>
          <textarea id="pageContent" name="pageContent" value="{{ $pageContent -> pageContent }}"></textarea>
          @error('pageContent') <p style="color: red">{{ $message }}</p> @enderror
          <Br />
          <input type="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/z3c5oj4u7s8ido8ma9c2wokkvw238dkqly5dlkpcy9m7gndn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#pageContent'
    })
  </script>
</body>

</html>