<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="proses.php">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_siswa">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="text" name="kelas">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>  
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Simpan</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
</form>
</body>
</html>