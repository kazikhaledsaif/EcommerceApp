
<div class="clearfix"></div>
<div class="row">
    <div align="right">
        Order Time:  {{ date('F j, Y, g:i:s a', strtotime( $order->created_at)) }}
    </div>
    <div class="col-md-6">
        <h1> Order No. #{{ $order->id + 1000 }} </h1>
        <p>Invoice # FVT{{ substr(md5('muaj'.$order->id.'saif'), 0, 15) }}</p>
        <p>Tracker : {{ substr(md5('muaj'.$order->id.'saif'), 16, 31) }} </p>

    </div>

</div>

<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Product slug</th>
        <th>Qty</th>
        <th>Rate</th>
        <th>Subtotal</th>
    </tr>
    </thead>
    <tbody>
    @php
        $no=0;
        $total = 0;
    @endphp
    @foreach($products as $product)
        @php
            $total = $total + $product->rate * $product->amount;
        @endphp
        <tr>
            <td>{{ $product->productName }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->rate }} ৳</td>
            <td>{{ $product->rate * $product->amount }} ৳</td>

        </tr>
    @endforeach


    <tr style="background-color: #96C2CA;  color:black; font-size: 1.1em;">
        <td></td>
        <td></td>
        <td></td>
        <td>Sub-Total</td>
        <td> $ {{ $total }}</td>
    </tr>
    </tbody>
</table>

<div class="clearfix"></div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        Order Details:
        <pre>

    Name: {{ $order->billing_first_name}} {{ $order->billing_last_name}}
    Email: {{ $order->billing_email}}
    Phone: {{ $order->billing_phone_no}}

Shipping Details:
    Shipping Address: {{ $order->billing_address}}
    Town : {{ $order->billing_town}}
    City : {{ $order->billing_city}}
    Zip code : {{ $order->billing_zip_code}}
</pre>
    </div>
    <div class="col-md-6 col-sm-12">
        Billing Details:
        <pre>
    Payment Method: {{ $order->billing_payment_gateway}}
    Order Sub total: {{ $order->billing_subtotal}}
    Discount: {{ $order->billing_discount ? $order->billing_discount : '0'}}
    Shipping Cost: {{ $order->billing_shipping_cost ? $order->billing_shipping_cost : '0'}}
    Total amount: {{ $order->billing_total}}
        </pre>
    </div>
</div>

