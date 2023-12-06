<?php
include 'dbconn.php';
if(isset($_POST['submit'])){

    $dono = mysqli_real_escape_string($conn, $_POST['dono']);
    $nomeDispositivo = mysqli_real_escape_string($conn, $_POST['nomeDispositivo']);
    $modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
    $serialKey = mysqli_real_escape_string($conn, $_POST['serialKey']);

      $insertquery =  "INSERT INTO dispositivos(dono, nomeDispositivo, modelo, serialKey)
                     VALUES ('$dono','$nomeDispositivo','$modelo','$serialKey')";
        $mysqliquery = mysqli_query($conn, $insertquery);
    if($insertquery){
        ?>
    <script>
        window.location.replace("index.php");
    </script>

<?php 

    }else{
        echo 'Not Inserted';
    }



}



?>