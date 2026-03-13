<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data User</title>
</head>

<body>
    <h1>Form Tambah Data User</h1>
    <form action="/user/tambah_simpan" method="post">

        {{ csrf_field() }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Usernane">

        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">

        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan  ID Level">

        <button type="submit">Simpan</button>
    </form>
</body>

</html>