<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="..vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="../css/sb-admin.css" rel="stylesheet">
<link href="../css/index.css?version=51" rel="stylesheet"  id="mainCss" type="text/css">

<div class="container">
    <h1>INSERT FAMILY</h1>
    <form action="sqlQuery.php" method="post">
        <div class="form-group">
            <label for="family_idInsert.php">family_id :</label>
            <input type="text" class="form-control" id="family_idInsert" name="family_id" required>
        </div>
        <div class="form-group">
            <label for="xfamily_nameInsert">family_name:</label>
            <input type="text" class="form-control" id="family_nameInsert" name="family_name" required>
        </div>
        <button type="submit" class="btn btn-primary" name="insert_family" id="submitInsertfamily">Insert</button>
    </form>
</div>

<!-- Bootstrap core JavaScript-->
<!-- <link href="css/uploadfile.css" rel="stylesheet"> -->
<script src="../vendor/jquery/jquery.min.js"></script>
<!-- <script src="js/jquery.uploadfile.min.js"></script> -->
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>