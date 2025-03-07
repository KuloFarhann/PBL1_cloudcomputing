<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang di GEARSHOPXZY!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="submit"],
        .form-group input[type="reset"],
        .form-group a {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
            background-color: #f1f1f1;
            color: #333;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .form-group input[type="submit"],
        .form-group input[type="reset"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover,
        .form-group input[type="reset"]:hover,
        .form-group a:hover {
            background-color: #0056b3;
        }
        .alert {
            background-color: #ffcccc;
            color: #cc0000;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php 
        if(isset($_POST['pesan'])){
            if($_POST['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
            }
        }
        ?>
        <form action="cek_login.php" method="post" name="login">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required />
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="form-group">
                <input name="submit" type="submit" value="Login" /><input name="reset" type="reset" value="Reset" />
            </div>
        </form>
        <div class="form-group">
            <p>Belum Mempunyai Akun? <a href='registrasi.php'>Daftar Disini</a></p>
        </div>
    </div>
</body>
</html>
