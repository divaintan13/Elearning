@php
$nama = "diva";
$role = "admin";
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($role == 'admin')
        <h3>HALLO {{ $nama }}, Anda login sebagai Administrator.</h3>
    @else 
        <h3>HALLO {{ $nama }}.</h3>
    @endif
</body>

</html>