<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Contact Management</title>
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
                <h1>Welcome to Contact Detail Management</h1>
                <hr />
                <div align="right">
                    <a href="{{url('createContact')}}" class="btn btn-info">Add Contact Detail</a>
                </div>
                <hr />
                <table style="width:100%">
                    <tr>
                        <th>Contact Name</th>
                        <th>Contact Office</th>
                        <th>Contact Postal</th>
                        <th>Contact Address</th>
                        <th>Contact Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($contactDetail as $contact)
                    <tr>
                        <td>{{$contact->contactName}}</td>
                        <td>{{$contact->contactOffice}}</td>
                        <td>{{$contact->contactPostal}}</td>
                        <td>{{$contact->contactAddress}}</td>
                        <td>{{$contact->contactEmail}}</td>
                        <td><a href="/contact/{{ $contact->contactName }}/edit" class="btn btn-primary">Modify</a></td>
                        <td>
                            <form action="/contact/{{ $contact->contactName }}" method="post">
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