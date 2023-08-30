<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
if(isset($_GET['delete'])){
    $id= $_GET['delete'];
  delete_data($conn, $id);
}
// delete data query
function delete_data($conn, $id){
   
    $query="DELETE FROM tblhimalayarec WHERE InNo='$id'" ;
    $exec= mysqli_query($conn,$query);
    if($exec){
      header('location:search.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
      echo $msg;
    }
}
?>