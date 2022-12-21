<?php 

include "./config.php";

function query($query){
  global $conn;
  $get = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($get)){
      $rows[] = $row;
  }

  return $rows;
  }

  function getNewId() {
    $query = "SELECT max(id) as id from calon_siswa";
    $latestId = query($query)[0]['id'];
    $latestId = (int) substr($latestId, 2);
    $latestId++;

    $newId = "CS".str_pad($latestId, 4, "0", STR_PAD_LEFT);

    return $newId;
  }

?>