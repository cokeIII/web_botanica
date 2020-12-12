<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BOTANICA</title>


  <?php require_once "includeAllHead.php"; ?>
  <?php require_once "connect.php"; ?>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">BOTANICA</a>

  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
    <?php include "sideBar.php";?>
    <div id="content-wrapper">

      <div class="container-fluid">
        <div style="height:50px;"><div id="info"></div></div>
        <div id="display"></div>
      </div>
      <!-- /.container-fluid -->


    </div>
    <!-- /.content-wrapper -->
    
  </div>
  <!-- Sticky Footer -->
  <?php include "foot.php"; ?>
 
  <?php require_once "includeAllFoot.php"; ?>
    
  <script src="js/index.js"></script>

</body>
</html>
<!-- Modal editMaps-->
<div id="editMapsModal" class="modal fade mapsEdit-modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close "  data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Map</h4>
      </div>
      <div class="modal-body">
        <form action="javascript:void(0);">
          <div class="form-group">
            <label for="uuidEdit">UUID :</label>
            <input type="text" class="form-control" id="uuidEdit" readonly>
          </div>
          <div class="form-group">
            <label for="xEdit">x:</label>
            <input type="number" class="form-control" id="xEdit" required>
          </div>
          <div class="form-group">
            <label for="yEdit">y:</label>
            <input type="number" class="form-control" id="yEdit" required>
          </div>
          <div class="form-group">
            <label for="nameEdit">name:</label>
            <input type="text" class="form-control" id="nameEdit" required>
          </div>
          <div class="form-group">
            <label for="routeEdit">route:</label>
            <input type="number" class="form-control" id="routeEdit" required>
          </div>
          <button type="submit" class="btn btn-warning" id="submitEditMaps">Edit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default"  data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal insertMaps-->
<div id="insertMapsModal" class="modal fade mapsInsert-modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close "  data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insert Map</h4>
      </div>
      <div class="modal-body">
        <form action="javascript:void(0);">
          <div class="form-group">
            <label for="uuidInsert">UUID :</label>
            <input type="text" class="form-control" id="uuidInsert" required>
          </div>
          <div class="form-group">
            <label for="xInsert">x:</label>
            <input type="number" class="form-control" id="xInsert" required>
          </div>
          <div class="form-group">
            <label for="yInsert">y:</label>
            <input type="number" class="form-control" id="yInsert" required>
          </div>
          <div class="form-group">
            <label for="nameInsert">name:</label>
            <input type="text" class="form-control" id="nameInsert" required>
          </div>
          <div class="form-group">
            <label for="routeInsert">route:</label>
            <input type="number" class="form-control" id="routeInsert" required>
          </div>
          <button type="submit" class="btn btn-primary" id="submitInsertMaps">Insert</button>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default"  data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>