<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
  include "./config.php";
  include "./functions.php";

  $id = $_POST['id'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $sex = $_POST['sex'];
  $religion = $_POST['religion'];
  $previous_school = $_POST['previous-school'];

  $update_query = "UPDATE calon_siswa SET nama='$name', alamat='$address', jenis_kelamin='$sex', agama='$religion', sekolah_asal='$previous_school' WHERE id='$id'";
  $update = mysqli_query($conn, $update_query);

  if ($update){
    echo '<script type="text/javascript">
      $(document).ready(function(){
        Swal.fire({
          icon: "success",
          title: "Berhasil",
          text: "Update data berhasil!",
        }).then((result) => {
          if (result.isConfirmed) {
              document.location.href="../index.php";
          }
        });
      }) 
      </script>';
  }

?>