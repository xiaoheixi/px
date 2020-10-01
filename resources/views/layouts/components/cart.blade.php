<div class="service-page">
  <div class="container ">
    <div class="widget cart">
      <h3 align="left">Your Cart</h3>
      <hr />
      <table style="width:100%" border="1" bordercolor="#dfdfdf">
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>
        @foreach(\Cart::getContent() as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>
            ${{Cart::get($item->id)->getpriceSum()}}
          </td>
          <form action="{{route('cart.update', $item->id)}}">
            <td><input name="quantity" type="number" value="{{ $item->quantity }}"><input type="submit" value="update"></td>
          </form>
          <td><a href="{{ route('cart.destroy', $item->id)}}">Delete</a>
        </tr>
        @endforeach
      </table>
      <div align="right">
        <h3>Total Price : ${{\Cart::getTotal()}}</h3>
        <a name="" id="" class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to checkout</a>
      </div>
    </div>
  </div>
</div>