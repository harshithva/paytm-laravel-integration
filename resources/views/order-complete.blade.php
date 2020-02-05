<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Thank you!! Your Package will be delivered soon</h1>
    <p>Order Id : {{$order->order_id}}</p>
    <p>Amount paid : {{$order->price}}</p>
    <p>Order status : {{$order->status}}</p>
    <p>Transaction ID : {{$order->transaction_id}}</p>
    </div>
</body>
</html>