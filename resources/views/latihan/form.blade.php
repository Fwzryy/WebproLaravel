<!-- resources/views/latihan/form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form action="#" method="post">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
