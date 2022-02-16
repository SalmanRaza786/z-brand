<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zee Brands</title>

</head>
<body>


<style type="text/css">
    body
    {
        font-family: Arial;
        font-size: 10pt;
    }
    table
    {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    table th
    {
        background-color: #F7F7F7;
        color: #333;
        font-weight: bold;
    }
    table th, table td
    {
        padding: 5px;
        border: 1px solid #ccc;
    }
</style>

<h1 class="company">New Order Notification</h1>
<h3 class="sender">Hi Ahmad</h3>
<p class="content">You have received  new order</p>

<table>

    <tr><th>Name</th>
        <th>{{$details['name']}}</th></tr>

    <tr><th>Phone</th>
        <th>{{$details['phone']}}</th></tr>

    <tr><th>Address</th>
        <th>{{$details['address']}}</th></tr>

    <tr><th>Product</th>
        <th>{{$details['product']}}</th></tr>

    <tr><th>Qty</th>
        <th>{{$details['qty']}}</th></tr>
    
    <tr>
        <th>
            <a href="{{url('orders')}}">View Order</a>
        </th>
    </tr>


</table>

</body>
</html>
