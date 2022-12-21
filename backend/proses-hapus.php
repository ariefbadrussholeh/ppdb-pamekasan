<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
  include "./config.php";

  $id = $_GET['id'];
  
  $delete_query = "DELETE FROM calon_siswa WHERE id='$id'";
  $delete = mysqli_query($conn, $delete_query);

  if ($delete){
    echo '<script type="text/javascript">
      $(document).ready(function(){
        Swal.fire({
          icon: "success",
          title: "Berhasil",
          text: "Data calon siswa berhasil dihapus",
        }).then((result) => {
          if (result.isConfirmed) {
              document.location.href="../list-pendaftar.php";
          }
        });
      }) 
      </script>';
  }
?>