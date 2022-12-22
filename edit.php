<?php 

include "./backend/config.php";

$id = $_GET['id'];

$query = "SELECT * FROM calon_siswa WHERE id='$id'";
$get = mysqli_query($conn, $query);
$rows = [];
while($row = mysqli_fetch_assoc($get)){
    $rows[] = $row;
}

$calon_siswa = $rows[0];
?>

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

    <title>Edit | PPDB Kabupaten Pamekasan</title>
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
    <main>
      <h2>Edit</h2>
      <div class="container">
        <div class="upload-photos" id="upload-photos">
          <img src="./public/img/User Logo.svg" alt="">
          <p id="title">Masukkan foto anda</p>
        </div>
        <form action="./backend/proses-edit.php" enctype="multipart/form-data" method="post" name="submit">
          <input type="file" name="photo" id="photo" accept="image/png, image/jpeg" class="hidden" required>
          <label for="name">Nama</label>
          <input value="<?= $calon_siswa['nama'] ?>" type="text" name="name" id="name" placeholder="Masukkan nama lengkap anda" autocomplete="off" autofocus required />
          <label for="address">Alamat</label>
          <input value="<?= $calon_siswa['alamat'] ?>" type="text" name="address" id="address" placeholder="Masukkan alamat anda" autocomplete="off" required autocapitalize="on" />
          <div class="radio-group">
            <p>Jenis Kelamin</p>
            <input <?php echo ($calon_siswa['jenis_kelamin']=='Laki-laki')?'checked':'' ?> type="radio" name="sex" id="laki-laki" value="Laki-laki" required/>
            <label for="laki-laki">Laki-laki</label>
            <input <?php echo ($calon_siswa['jenis_kelamin']=='Perempuan')?'checked':'' ?> type="radio" name="sex" id="perempuan" value="Perempuan" required />
            <label for="perempuan">Perempuan</label>
          </div>
          <label for="religion">Agama</label>
          <select name="religion" id="religion">
            <option <?php echo ($calon_siswa['agama']=='Islam')?'selected':'' ?> value="Islam">Islam</option>
            <option <?php echo ($calon_siswa['agama']=='Kristen')?'selected':'' ?> value="Kristen">Kristen</option>
            <option <?php echo ($calon_siswa['agama']=='Katolik')?'selected':'' ?> value="Katolik">Katolik</option>
            <option <?php echo ($calon_siswa['agama']=='Hindu')?'selected':'' ?> value="Hindu">Hindu</option>
            <option <?php echo ($calon_siswa['agama']=='Buddha')?'selected':'' ?> value="Buddha">Buddha</option>
            <option <?php echo ($calon_siswa['agama']=='Konghucu')?'selected':'' ?> value="Konghucu">Konghucu</option>
          </select>
          <label for="previous-school">Asal Sekolah</label>
          <input value="<?= $calon_siswa['sekolah_asal'] ?>" type="text" name="previous-school" placeholder="Masukkan asal sekolah anda" id="previous-school" autocomplete="off" required />
          <div class="flex-center">
            <button type="button" id="submit" onclick="submitForm()">Kirim</button>
            <button type="submit" name="submit" id="form-btn" hidden>Button</button>
          </div>
          <input value="<?= $calon_siswa['id'] ?>" type="text" name="id" class="hidden"/>
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
    <script src="./public/js/drop-photo.js"></script>
  </body>
</html>
