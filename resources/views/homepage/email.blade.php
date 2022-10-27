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
    <h1 class="bg-secondary text-white">Code {{ $isi_email['code'] }}</h1>
    <h4>Thank you {{ $isi_email['name'] }} for ordering at Resto Mahal.</h4>
    <br>
    <div class="detail p-3">
        <p>Here are the details of your order :</p>
        <p>Name : {{ $isi_email['name'] }}</p>
        <p>Phone Number : {{ $isi_email['no_hp'] }}</p>
        <p>Date : {{ $isi_email['date'] }}</p>
        <p>Time : {{ $isi_email['time'] }}</p>
        <p>Total People : {{ $isi_email['people'] }}</p>

        <p class="mt-2">Total Price : Rp. {{ $isi_email['price'] }}</p>
    </div>
    <br>
    <p>Please pay a down payment of Rp. {{ $isi_email['price'] }} and upload proof of payment on our website by entering
        the code above. We will contact you later via whatsapp. Thank you for ordering. Warm greetings from us</p>
    <p>If you have any questions, please contact our customer service at +62 851-0512-0605</p>

</body>

</html>
