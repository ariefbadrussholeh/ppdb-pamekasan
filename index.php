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
    <title>PPDB Kabupaten Pamekasan</title>
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
    <div style="padding: 0 16px 16px 16px; height: 98%">
      <div class="hero flex-center">
        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
        <div>
          <h1>Selamat Datang</h1>
          <h3>di Portal Penerimaan Peserta Didik Baru (PPDB)</h3>
          <h4>Kabupaten Pamekasan Tahun 2022</h4>
          <p>Pendaftaran PPDB Kabupaten Pamekasan dapat dilakukan pada tanggal 22 - 30 Desember 2022</p>
          <form action="./daftar-baru.php" method="post" id="button">
            <button id="nice">
              <span class="label">Daftar</span>
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                </svg>
              </span>
            </button>
          </form>
        </div>
      </div>
    </div>
    <script src="./public/js/clock.js"></script>
  </body>
</html>
