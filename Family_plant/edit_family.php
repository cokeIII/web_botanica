<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="..vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="../css/sb-admin.css" rel="stylesheet">
<link href="../css/index.css?version=51" rel="stylesheet"  id="mainCss" type="text/css">
<?php 
    include "../connect.php";
    $id = $_GET["family_id"];
    $sqlGet = "select * from family_plant where family_id ='$id'";
    $resGet = mysqli_query($conn,$sqlGet);
    $row = mysqli_fetch_array($resGet);
?>
<div class="container">
    <h1>EDIT FAMILY</h1>
    <form action="sqlQuery.php" method="post">
        <div class="form-group">
            <label for="family_idEdit.php">family_id :</label>
            <input type="text" class="form-control" id="family_idEdit" name="family_id" value="<?php echo $row["family_id"]?>" required readonly>
        </div>
        <div class="form-group">
            <label for="xfamily_nameEdit">family_name:</label>
            <input type="text" class="form-control" id="family_nameEdit" name="family_name" value="<?php echo $row["family_name"]?>" required>
        </div>
        <button type="submit" class="btn btn-warning" name="edit_family" id="submitEditfamily">Edit</button>
    </form>
</div>

<!-- Bootstrap core JavaScript-->
<!-- <link href="css/uploadfile.css" rel="stylesheet"> -->
<script src="../vendor/jquery/jquery.min.js"></script>
<!-- <script src="js/jquery.uploadfile.min.js"></script> -->
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>