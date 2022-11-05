<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h2>Payment code {{ $emailVer['code'] }} has been successfully verified.</h2>
    <h4>Thank you {{ $emailVer['name'] }} for making payment.</h4>
    <div class="detail p-3">
        <p>Here are the details of your order :</p>
        <p>Name : {{ $emailVer['name'] }}</p>
        <p>Phone Number : {{ $emailVer['no_hp'] }}</p>
        <p>Date : {{ $emailVer['date'] }}</p>
        <p>Time : {{ $emailVer['time'] }}</p>
        <p>Total People : {{ $emailVer['people'] }}</p>

        <p class="mt-2">Total Price : Rp. {{ $emailVer['price'] }}</p>
    </div>

    

</body>

</html>
