<div class="service-page">
    <div class="container ">
        <div class="widget checkout">
            <h3 align="left">Final Checkout Page</h3>
            <hr />
            <form action="{{route('orders.store')}}" method="post">
                @csrf
                <label for=""><b>Full Name</b></label><br>
                <input type="text" id="" name="shipping_fullname" autocomplete="off" value="{{ old('shipping_fullname') }}"><br>
                <label for=""><B>Email:</B></label><br>
                <input type="text" id="" name="shipping_email" autocomplete="off" value="{{ old('shipping_email') }}"><br>
                <hr />
                <input type="submit" value="Purchase" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
