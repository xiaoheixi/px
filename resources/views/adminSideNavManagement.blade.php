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
                <h1>Welcome to Admin Side Navigation Bar Option Management</h1>
                <hr />
                <div align="right">
                    <a href="{{url('createAdminSideNav')}}" class="btn btn-info">Add New</a>
                </div>
                <hr />
                <table>
                    <tr>
                        <th>Admin Side Navigation Bar Option Name</th>
                        <th>Admin Side Navigation Bar Option Link</th>
                        <th>Modify</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($adminSideNavContent as $adminSideNav)
                    <tr>
                        <td>{{$adminSideNav->adminSideNavName}}</td>
                        <td>{{$adminSideNav->adminSideNavLink}}</td>
                        <td><a class="btn btn-primary" href="/adminSideNav/{{ $adminSideNav->adminSideNavName }}/edit">Modify</a></td>
                        <td>
                            <form action="/adminSideNav/{{ $adminSideNav->adminSideNavName }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
