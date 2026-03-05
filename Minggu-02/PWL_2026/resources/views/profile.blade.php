<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Profile</title>
</head>
<body>
    <h1>Profile</h1>

    <p>Alamat URL profil saya adalah: {{ route('profile') }}</p>

    <a href="{{ route('profile') }}">Refresh Halaman Profil</a>

</body>
</html>