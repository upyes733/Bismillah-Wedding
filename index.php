
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Ketua OSIS SMK TI Pembangunan Cimahi
        2023-2024</title>
    <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}

header {
  text-align: center;
  background-color: #545db0;
  color: #fff;
  padding: 1rem 7%;
}

h1 {
  font-size: 2rem;
}
header img {
  max-width: 100px;
  height: auto;
  filter: drop-shadow(3px 3px 2px #222);
}

main {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  padding: 1rem 7%;
  align-items: center;
}
.candidate {
  gap: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
  text-align: center;
  width: 85%;
}

img {
  max-width: 100%;
  height: auto;
  border-radius: 50%;
}
/* Tambahkan gaya untuk konten visi misi yang muncul */
.motto {
  /* Letakkan elemen di atas kandidat */
  background-color: rgba(255, 255, 255, 0.9);
  transform: scale(0);
  opacity: 0;
  box-shadow: 0 0 2px #222;
  transition: 0.5s ease;
  max-width: 400px;
}

.candidate:hover .motto {
  transform: scale(1);
  opacity: 1;
  height: auto;
  width: 86%;
  padding: 1.2rem;
}
/* Stil tombol untuk menunjukkan bahwa itu bisa di-klik */
button {
  background-color: #545db0;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
  transition: background-color 0.3s;
  margin-top: 1rem;
}

button:hover {

  background-color: #555;
}
/* Penyesuaian untuk perangkat mobile (lebar maksimal 768px) */
@media screen and (max-width: 768px) {
  header {
    padding: 10px 0;
  }

  header img {
    max-width: 80px;
  }

  .candidate {
    padding: 15px;
    text-align: center;
  }

  .motto {
    margin-top: 5px;
    font-size: 14px;
  }

  button {
    padding: 8px 16px;
    font-size: 14px;
  }
}
@media screen and (min-width: 768px) {
  main {
    display: flex;
    flex-direction: row;
  }
  .candidate{
    width: 50%;
  }
}
</style>
</head>

<body>
<?php
session_start(); // Mulai sesi

// Periksa apakah pengguna sudah login atau belum
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    echo "<script>alert('Selamat Datang $id ');</script>";

    // Anda dapat melakukan hal-hal lain di halaman ini
} else {
    // Jika pengguna belum login, redirect kembali ke halaman login
    header('Location: Koneksi.php');
    exit();
}
?>
    <header>
        <h1>Pemilihan Ketua OSIS
           
        </h1>
        <img src="ti.png" alt="Logo Sekolah">
        <h3>SMK TI Pembangunan Cimahi
            <br> 2023-2024
        </h3>
    </header>
    <main>
       <div class="candidate">
            <img src="kandidat3.jpg" alt="Kandidat 1">
            <h2>Kandidat 1</h2>
            <center>
            <div class="motto" id="motto3">Visi Misi Kandidat 1: Mendukung Ekstrakurikuler</div></center>
            <button class="kirim">Vote</button>
        </div>
        <div class="candidate">
            <img src="kandidat4.jpg" alt="Kandidat 2">
            <h2>Kandidat 2</h2>
            <center>
            <div class="motto" id="motto4">Visi Misi Kandidat 2: Membangun Kesejahteraan Siswa</div></center>
            <button class="kirim">Vote</button>
        </div>
        <div class="candidate">
            <img src="kandidat3.jpg" alt="Kandidat 3">
            <h2>Kandidat 3</h2>
            <center>
            <div class="motto" id="motto3">Visi Misi Kandidat 3: Mendukung Ekstrakurikuler</div></center>
            <button class="kirim">Vote</button>
        </div>
        <div class="candidate">
            <img src="kandidat4.jpg" alt="Kandidat 4">
            <h2>Kandidat 4</h2>
            <center>
            <div class="motto" id="motto4">Visi Misi Kandidat 4: Membangun Kesejahteraan Siswa</div></center>
            <button class="kirim">Vote</button>
        </div>
    </main>

    <script lang="javascript">

        const btn = document.querySelectorAll('.kirim');
        btn.forEach(e => {
            e.addEventListener('click', function () {

                alert("Terima kasih atas partisipasi Anda dalam pemilihan ketua OSIS.");

            });
        });

    </script>
</body>

</html>