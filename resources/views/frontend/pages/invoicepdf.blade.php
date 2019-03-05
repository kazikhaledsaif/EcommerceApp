 


 <h1>FurnitureVille Texas</h1>
 <pre>
    845 I-35E, DeSoto, 
    TX-75115, USA

+1 972-230-0511</pre>
 <div class="clearfix"></div>
 <div class="row">
    <div align="right">
            Order Time: {{ $order->created_at}}         
    </div>
    <div class="col-md-6">
        <h1> Order No. {{ 1000+$id }} </h1>
        <p>Invoice # FVT{{ substr(md5('muaj'.$id.'saif'), 0, 15) }}</p>
        <p> Tracker : {{ substr(md5('muaj'.$id.'saif'), 16, 31) }} </p>
 
    </div> 

 </div>
    
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=0;
                $total = 0;
                @endphp
    @foreach($product_list as $product)
        <tr>    
            @php
            $no = $no+1;
/*            $total = $total + $product->discount_price* $product->quantity; */
            if ($product->discount_price == 0 )
            $total = $total + $product->present_price* $product->quantity;
            else 
            $total = $total + $product->discount_price* $product->quantity;
            
            @endphp
            <td> {{ $no }}</td>
            <td> {{ $product->id }} </td>
            <td> <a target="_blank" href="{{route('shop.show',$product->slug)}}" style="text-decoration: none;">{{ $product->name }}</a></td>
            <td> {{ $product->quantity }} </td>
            @if ($product->discount_price == 0)
                <td> $ {{ $product->present_price }} </td>
                <td> $ {{ $product->present_price * $product->quantity }} </td>
            @else 
                <td> $ {{ $product->discount_price }} </td>
                <td> $ {{ $product->discount_price * $product->quantity }} </td>
            @endif
        </tr>
    @endforeach
        <tr style="background-color: #96C2CA;  color:black; font-size: 1.1em;">
            <td></td>
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
    Shipping Cost: {{ $order->billing_shipping_cost ? $order->billing_shipping_cost : '0'}}
    Total amount: {{ $order->billing_total}}
</pre>
    </div>
</div>




