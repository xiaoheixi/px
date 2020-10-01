@component('mail::message')
# Invoice Paid

Thanks for the purchase!

Here is your receipt

<table class="table">
    <thead>
        <tr>
            <th>Product name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Product Link</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td scope="row">{{ $item->name }}</td>
            <td>{{ $item->pivot->quantity }}</td>
            <td>{{ $item->pivot->price}}</td>
            <td>{{ $item->productLink}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

Total : {{$order->grand_total}}<br>

Thanks,<br>
{{ config('app.name') }}
