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
                <label><b>Select Payment Type:</b></label>
                <br />
                <input type="radio" id="PayPal" name="payment_method" value="PayPal"> 
                <label for="PayPal">PayPal</label><br>
                <input type="radio" id="Square" name="payment_method" value="Square">
                <label for="Square">Square</label><br>
                <input type="radio" id="Stripe" name="payment_method" value="Stripe">
                <label for="Stripe">Stripe</label><br>
                <input type="submit" value="Purchase" class="btn btn-success">
            </form>
        </div>
    </div>
</div>