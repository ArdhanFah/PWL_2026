<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Home</title>
</head>

<body>
    <h1>Home</h1>
    <a href="{{ route('penjualan') }}">Penjualan</a>
    <a href="{{ route('user', ['id' => 1, 'name' => 'John']) }}">User</a>
    <a href="{{ route('category.food_baverage') }}">Food & Baverage</a>
    <a href="{{ route('category.beauty_health') }}">Beauty & Health</a>
    <a href="{{ route('category.home_care') }}">Home Care</a>
    <a href="{{ route('category.baby_kid') }}">Baby & Kid</a>
</body>

</html>