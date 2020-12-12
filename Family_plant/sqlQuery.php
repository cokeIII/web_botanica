<?php
    include "../connect.php";

    if(isset($_POST["insert_family"])){
        $family_id = $_POST["family_id"];
        $family_name = $_POST["family_name"];
        $sql = "insert into family_plant (family_id,family_name) values('$family_id','$family_name')";
        $resInsert = mysqli_query($conn,$sql);
        if($resInsert){
            header("location: family_plant.php");
        } else {
            echo $sql;
        }
    } else if(isset($_POST["edit_family"])){
        $family_id = $_POST["family_id"];
        $family_name = $_POST["family_name"];
        $sqlEdit = "update family_plant set family_name = '".$family_name."' where family_id ='".$family_id."'";
        $resEdit = mysqli_query($conn,$sqlEdit);
        if($resEdit){
            header("location: family_plant.php");
        } else {
            echo $sql;
        }
    } else if(isset($_GET["del_family"])){
        $family_id = $_GET["family_id"];
        $sqlDeleteLog = "delete from family_plant where family_id ='".$family_id."'";
        $resDeleteLog = mysqli_query($conn,$sqlDeleteLog);
        if($resDeleteLog){
            header("location: family_plant.php");
        } else {
            echo $sql;
        }
    }
?>