<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
  include "./config.php";
  include "./functions.php";

  $id = getNewId();
  $name = $_POST['name'];
  $address = $_POST['address'];
  $sex = $_POST['sex'];
  $religion = $_POST['religion'];
  $previous_school = $_POST['previous-school'];

  $tmp_loc = $_FILES['photo']['tmp_name'];
  $path = $_FILES['photo']['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);

  $photo = "photo_".$id.".".$ext;

  $target_path = "../storage/";
  move_uploaded_file($tmp_loc, $target_path.$photo);

  $insert_query = "INSERT INTO calon_siswa (id, nama, alamat, jenis_kelamin, agama, sekolah_asal, foto) VALUES ('$id', '$name', '$address', '$sex', '$religion', '$previous_school', '$photo')";
  $insert = mysqli_query($conn, $insert_query);

  if ($insert){
    echo '<script type="text/javascript">
      $(document).ready(function(){
        Swal.fire({
          icon: "success",
          title: "Berhasil",
          text: "Selamat, registrasi berhasil!",
        }).then((result) => {
          if (result.isConfirmed) {
              document.location.href="../index.php";
          }
        });
      }) 
      </script>';
  }else{
    echo '<script type="text/javascript">
      $(document).ready(function(){
        Swal.fire({
          icon: "error",
          title: "Gagal",
          text: "Woops! Terjadi kesalahan.",
        }).then((result) => {
          if (result.isConfirmed) {
          }
        });
      }) 
      </script>';
  }
?>