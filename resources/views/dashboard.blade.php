<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
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
                <div>
                    <div>
                        <h1>Welcome to Admin Dashboard</h1>
                        <hr />
                        <img src="images/OIP.jpg" style="width: 200px;" />
                        <hr />
                        <div class="container">
                            <div class="row">
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">Pages</h4>
                                    <p>{{$totalPages}}</p>
                                </div>
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">Products</h4>
                                    <p>{{$totalProducts}}</p>
                                </div>
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">Navigation Bar Options</h4>
                                    <p>{{$totalNavs}}</p>
                                </div>
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">Side Navigation Bar Option</h4>
                                    <p>{{$totalSideNavs}}</p>
                                </div>
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">Services</h4>
                                    <p>{{$totalServices}}</p>
                                </div>
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">News</h4>
                                    <p>{{$totalNews}}</p>
                                </div>
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">Admins</h4>
                                    <p>{{$totalAdmins}}</p>
                                </div>
                                <div class="col-3 dash_counter">
                                    <h4 class="card-title">Admin Side Navigation Bar Option</h4>
                                    <p>{{$totalAdminSideNavs}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>