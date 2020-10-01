<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Order History</title>
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
                <h1>Welcome to Order History</h1>
                <hr />
                <div class="table-responsive">
                    <table style="width:100%">
                        <tr>
                            <th>Order Number</th>
                            <th>Status</th>
                            <th>Total Price</th>
                            <th>Quantity</th>
                            <th>Shipping Full Name</th>
                            <th>Shipping Email</th>
                            <th>Billing Full Name</th>
                            <th>Billing Email</th>
                        </tr>
                        @foreach($orderContent as $order)
                        <tr>
                            <td>{{$order->order_number}}</a></td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->grand_total}}</td>
                            <td>{{$order->item_count}}</td>
                            <td>{{$order->shipping_fullname}}</td>
                            <td>{{$order->shipping_email}}</td>
                            <td>{{$order->billing_fullname}}</td>
                            <td>{{$order->billing_email}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
