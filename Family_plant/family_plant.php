<?php
    include "../connect.php";
    $sqlGet = "select * from family_plant";
    $resGet = mysqli_query($conn,$sqlGet);
?>

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="..vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="../css/sb-admin.css" rel="stylesheet">
<link href="../css/index.css?version=51" rel="stylesheet"  id="mainCss" type="text/css">

<div class="container">
    <div class="row">
        <button class="btn btn-primary m-3"><a href="insert_family.php">Insert</a></button>
    </div>
    <table class="table" id="tableMaps">
        <thead>
            <th>family_id</th>
            <th>family_name</th>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($resGet)){ ?>
            <tr>
                <td><?php echo $row["family_id"]; ?></td>
                <td><?php echo $row["family_name"]; ?></td>
                <td><button class="btn btn-warning"><a href="edit_family.php?family_id=<?php echo $row["family_id"]; ?>">edit</a></button></td>
                <td><button class="btn btn-danger"><a href="sqlQuery.php?family_id=<?php echo $row["family_id"]; ?>&del_family=true">delete</a></button></td>
            </tr>
            <?php } ?>
        </tbody>
        </tbody>
    </table>
</div>
<!-- Bootstrap core JavaScript-->
<!-- <link href="css/uploadfile.css" rel="stylesheet"> -->
<script src="../vendor/jquery/jquery.min.js"></script>
<!-- <script src="js/jquery.uploadfile.min.js"></script> -->
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="../vendor/chart.js/Chart.min.js"></script>
<script src="../vendor/datatables/jquery.dataTables.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>


<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>
<!--  Script this page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
