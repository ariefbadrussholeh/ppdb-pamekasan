<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./public/img/favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./public/img/favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./public/img/favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="./public/img/favicon_io/site.webmanifest" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/button.css" />
    <script src="https://kit.fontawesome.com/67af74f10d.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <title>Daftar | PPDB Kabupaten Pamekasan</title>
  </head>
  <body>
    <header>
      <div>
        <img src="./public/img/logo_kemendikbud.svg" alt="" width="50px" />
        <img src="./public/img/logo_pamekasan.svg" alt="" width="50px" />
        <h1>PPDB Kabupaten Pamekasan 2022</h1>
      </div>
      <ul>
        <li>
          <a href="./index.php"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li>
          <a href="./daftar-baru.php"><i class="fa-solid fa-user-plus"></i> Daftar Baru</a>
        </li>
        <li>
          <a href="./list-pendaftar.php"><i class="fa-solid fa-users"></i> List Pendaftar</a>
        </li>
      </ul>
    </header>
    <main class="flex-center-start">
      <div>
        <h2>Daftar</h2>
        <form action="./backend/proses-pendaftaran.php" method="post" name="submit">
          <label for="name">Nama</label>
          <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap anda" autocomplete="off" autofocus required />
          <label for="address">Alamat</label>
          <input type="text" name="address" id="address" placeholder="Masukkan alamat anda" autocomplete="off" required autocapitalize="on" />
          <div class="radio-group">
            <p>Jenis Kelamin</p>
            <input type="radio" name="sex" id="laki-laki" value="Laki-laki" required checked/>
            <label for="laki-laki">Laki-laki</label>
            <input type="radio" name="sex" id="perempuan" value="Perempuan" required />
            <label for="perempuan">Perempuan</label>
          </div>
          <label for="religion">Agama</label>
          <select name="religion" id="religion">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
          <label for="previous-school">Asal Sekolah</label>
          <input type="text" name="previous-school" placeholder="Masukkan asal sekolah anda" id="previous-school" autocomplete="off" required />
          <div class="flex-center">
            <button type="button" id="submit" onclick="submitForm()">Kirim</button>
            <button type="submit" name="submit" id="form-btn" hidden>Button</button>
          </div>
        </form>
      </div>
    </main>
    <script>
      function submitForm() {
        const form = document.getElementById("form-btn");
        $(document).ready(function () {
          Swal.fire({
            icon: "question",
            title: "Anda yakin ingin submit?",
            showDenyButton: true,
            confirmButtonText: "Iya",
            denyButtonText: `Tidak`,
          }).then((result) => {
            if (result.isConfirmed) {
              form.click();
            }
          });
        });
      }
    </script>
  </body>
</html>
