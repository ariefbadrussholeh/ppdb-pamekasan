<?php 

include "./backend/config.php";

$query = "SELECT * FROM calon_siswa";
$get = mysqli_query($conn, $query);
$calon_siswa = [];
while($row = mysqli_fetch_assoc($get)){
    $calon_siswa[] = $row;
}

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

    <title>List Pendaftar | PPDB Kabupaten Pamekasan</title>
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
      <div id="table">
        <h2>List Pendaftar</h2>
        <table>
          <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php foreach ($calon_siswa as $row) : ?>
              <tr>
                <td class="text-center"><?= $row['id'] ?></td>
                <td><img src="./storage/<?= $row['foto'] ?>" alt="" width="50px" height="75px"></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td class="text-center"><?= $row['jenis_kelamin'] ?></td>
                <td class="text-center"><?= $row['agama'] ?></td>
                <td><?= $row['sekolah_asal'] ?></td>
                <td>
                  <div class="block">
                    <a href="./edit.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-pen" style="margin-right: 16px;"></i></a>
                    <a class="btn-delete" href="./backend/proses-hapus.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                  </div>
                </td>
              </tr>  
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
    <script>
      $('.btn-delete').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            icon: "warning",
            title: "Anda yakin ingin hapus?",
            showDenyButton: true,
            confirmButtonText: "Iya",
            denyButtonText: `Tidak`,
          }).then((result) => {
            if (result.isConfirmed) {
              document.location.href = href;
            }
          });
      });
    </script>
  </body>
</html>
