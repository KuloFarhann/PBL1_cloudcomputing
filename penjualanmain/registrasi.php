<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="style.css" />
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            color: #333;
        }
        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
            overflow: hidden;
        }
        .form-table th {
            background-color: #cd5c5c;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .form-table td {
            padding: 10px;
            text-align: left;
        }
        .form-table input[type="text"],
        .form-table input[type="password"],
        .form-table input[type="submit"] {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin: 5px 0;
        }
        .form-table input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-table input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
<?php
require('koneksi.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$level = stripslashes($_REQUEST['level']);
	$level = mysqli_real_escape_string($conn,$level);
	$nama = stripslashes($_REQUEST['nama']);
	$nama = mysqli_real_escape_string($conn,$nama);
        $query = "INSERT into `user` (nama, username, password, level) 
		VALUES ('$nama', '$username', '$password', '$level')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>Registrasi Berhasil.</h3>
<br/>Klik disini untuk <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form-container">
        <h2>Registrasi</h2>
        <form name="registration" action="" method="post">
            <table class="form-table" align="center">
                <tr>
                    <th colspan="2">Registrasi</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="nama" placeholder="Nama" required /></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Username" required /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Password" required /></td>
                </tr>
                <tr>
                    <td bgcolor="#ffc0cb"><strong>Level</strong></td>
                    <td bgcolor="#ffc0cb">
                        <select name="level">
                            <option value="admin">Admin</option>
                            <option value="pegawai">Pegawai</option>
                            <option value="pelanggan">Pelanggan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Register" /></td>
                </tr>
            </table>
        </form>
    </div>
<?php } ?>
</body>
</html>
