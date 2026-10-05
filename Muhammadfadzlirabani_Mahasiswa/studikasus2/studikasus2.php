<?php
$nama = "";
$email = "";
$jenis_kelamin = "";
$alamat = "";
$telepon = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pengguna</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 450px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 80px;
            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .hasil {
            margin-top: 25px;
            padding: 15px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Form Data Pengguna</h2>

    <form method="POST" action="">
        
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Alamat</label>
        <textarea name="alamat" required></textarea>

        <label>Nomor Telepon</label>
        <input type="text" name="telepon" required>

        <button type="submit">Submit</button>

    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

        <div class="hasil">
            <h3>Data Pengguna</h3>

            <p><b>Nama:</b> <?php echo $nama; ?></p>
            <p><b>Email:</b> <?php echo $email; ?></p>
            <p><b>Jenis Kelamin:</b> <?php echo $jenis_kelamin; ?></p>
            <p><b>Alamat:</b> <?php echo $alamat; ?></p>
            <p><b>Nomor Telepon:</b> <?php echo $telepon; ?></p>
        </div>

    <?php } ?>

</div>

</body>
</html>