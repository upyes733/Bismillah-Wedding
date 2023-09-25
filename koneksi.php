<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      border: none;
      outline: none;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom, #F4000C 50%, #ffff 50%);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .login-container {
      background-image: url('foto.png');
      background-position: top;
      background-position-y: 4.5rem;
      background-size: 7rem;
      background-repeat: no-repeat;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 75%;
    }

    .login-container h2 {
      margin-bottom: 10rem;
      color: #F4000C;
    }

    .form-group {
      position: relative;
      margin-bottom: 20px;
    }

    label {
      position: absolute;
      top: .5rem;
      left: 2%;
      transition: 0.3s ease;
      pointer-events: none;
      color: #888;
    }

    input {
      width: 80%;
      padding: .5rem 1rem;
      border-bottom: 1px solid #ccc;
      border-radius: 3px;
      outline: none;
    }

    input:focus+label,
    input:valid+label {
      top: -.5rem;
      font-size: .8rem;
      color: #333;
      background-color: #fff;
      padding: 0 5px;
    }
   input:invalid+label{
     top: -.5rem;
   }
    input:focus {
      border-color: #333;
    }

    input {
      accent-color: rgba(82, 12, 82, .8);
    }

    .btn {
      display: inline-block;
      padding: .7rem 1.2rem;
      background-color: #F4000C;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 3px;
      width: 100%;
      box-shadow: 1px 1px 2px #222;
    }

    .btn:hover {
      background-color: #888;
    }

    .bawah {
      margin-top: 1rem;
      text-align: center;
    }

    span {
      display: flex;
      justify-content: space-between;
    }

    img {
      width: 16px;
      right: 1.75rem;
      top: .5rem;
      position: absolute;
    }

    .custom-alert {
      display: none;
      position: fixed;
      top: 10%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    /* Gaya untuk tombol tutup */
    .custom-alert .close-button {
      position: absolute;
      top: 5px;
      right: 10px;
      cursor: pointer;
    }
  </style>
</head>

<body>
<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "belajar";
$connect = mysqli_connect($hostname, $user, $password, $database);

session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST")                                                {
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
    $mail = $_POST["email"];
    $id = $_POST["id"];

    // Siapkan kueri SQL untuk menyimpan data ke database
    $sql = "INSERT INTO login (email_Siswa, id_Siswa) VALUES ('$mail', '$id')";
// Eksekusi query SQL
    if (mysqli_query($connect, $sql)) {
        echo "<script>alert('Data berhasil disimpan');</script>";
    } else {
        echo "Pendaftaran gagal. Silakan coba lagi.";
    }

    $_SESSION['id'] = $id; // Simpan id dalam sesi
    header('Location: index.php');
    $connect->close();
                                                                                          }
?>

  <div class="login-container">
    <span class="row">
      <h2>Log In</h2>
      <h6>Create By Anas</h6>
    </span>
    <form method="POST">
      <div class="form-group">
        <input class="inputEmail" type="email" name="email" id="email" required autocomplete="on" pattern="/^[\w\.-]+@gmail\.com$/" />
        <label for="email">Email</label>
        <img src="envelope.png" alt="">
      </div>
      <div class="form-group">
        <input class="inputId" type="text" name="id" id="id" required autocomplete="on" />
        <label for="id">ID</label>
        <img src="user-lock.png" alt="">
      </div>

      <input type="submit" id="submitButton" class="btn" name="submit">Login</input>

    </form>

  </div>
  <div class="custom-alert" id="customAlert">
    <span class="close-button" id="closeButton">&times;</span>
    <p>Silakan isi input teks terlebih dahulu.</p>
  </div>
  <script>

    const inputEmail = document.querySelector('.inputEmail');
    const inputId = document.querySelector('.inputId');
    const submitButton = document.getElementById("submitButton");
    const customAlert = document.getElementById("customAlert");
    const closeButton = document.getElementById("closeButton");

    submitButton.addEventListener("click", function () {

      if (inputEmail.value.trim() !== "" && inputId.value.trim() !== "" ) {
      customAlert.style.display = "none";
      } else {
        customAlert.style.display = "block";
      }
      closeButton.addEventListener("click", function () {
        // Sembunyikan pesan kustom saat tombol tutup diklik
        customAlert.style.display = "none";
      });
    });
  </script>
</body>

</html>