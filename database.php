
 <?php
include 'include/connection.php';
 session_start();
 require_once ("config.php");



 if(!isset($_SESSION['a_n'])){

   header("Location: admin.php");
 }

 else {

   $admin_name=$_SESSION['a_n'];
 }



  ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>database</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- Loader -->
<link rel="stylesheet" href="css/loader.css">
<script src="js/jquery-1.12.4.js"></script>
<link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
<script>
        $(document).ready(function() {
                $('#example1').DataTable({});
            });

        </script>
        <script>
                $(document).ready(function() {
                        $('#example2').DataTable({});
                    });

                </script>

        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
          <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
          <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.dataTables.min.js"></script>

<style media="screen">
table.a {
  width: 90%;
}

table.b {
  width: 90%;
}
</style>

 </head>





 <body  onload="myFunction()" style="margin:0;">

 <nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">Tech Craft</a>
     </div>

     <ul class="nav navbar-nav navbar-right">

          <li><a href="log_out.php"><span class="glyphicon glyphicon-log-in"></span><b> Log out</b></a></li>
        </ul>

   </div>
 </nav>

 <div class="container">





   <ul class="nav nav-pills">
       <li class="active"><a data-toggle="pill" href="#project">Project</a></li>
       <li><a data-toggle="pill" href="#clients">Clients</a></li>
     </ul>



     <div class="tab-content">
       <!-- start project tab -->
   		<div id="project" class="tab-pane fade in active">


        <div >

          <table id="example1" class="display a" cellspacing="0" >
              <thead>
                  <tr>

                      <th>project name</th>
                      <th>client name</th>
                      <th>service type</th>
                      <th>project details</th>
                      <th>action</th>


                  </tr>
              </thead>

              <tbody>
                  <?php
                      $sql = "select * from project";
                      $result = $connection->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              $id_project = $row['id'];
                              $project_name = $row['project_name'];
                              $client_name = $row['client_name'];
                              $service_type= $row['service_type'];
                              $project_details = $row['project_details'];
                              $action = "Action"




                      ?>
                  <tr>

                      <td>
                          <?php echo $project_name; ?>
                      </td>
                      <td>
                          <?php echo $client_name; ?>
                      </td>
                      <td>
                          <?php echo   $service_type; ?>
                      </td>
                      <td >
                          <?php echo $project_details; ?>
                      </td>


                      <td>

                          <a href="#deletep<?php echo $id_project;?>" data-toggle="modal">
                              <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                          </a>
                          <a href="#edit<?php echo $id_project;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                        </a>

                      </td>



                      <!--Edit Item Modal -->
                    <div id="edit<?php echo $id_project; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit project details</h4>
                                    </div>
                                    <div class="modal-body">
                       <input type="hidden" name="edit_project_id" value="<?php echo $id_project; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="project_name">project name:</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="project_name" name="project_name" value="<?php echo $project_name; ?>" placeholder="project_name" required autofocus> </div>
                                            <label class="control-label col-lg-2" for="client_name">client name</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo $client_name; ?>" placeholder="client_name" required> </div>

                                        </div>
                                        <div class="form-group">

                                          <label class="control-label col-sm-2" for="service_type">service type</label>
                                          <div class="col-sm-4">
                                              <input type="text" class="form-control" id="service_type" name="service_type" value="<?php echo $service_type; ?>" placeholder="service_type" required> </div>

                                            <label class="control-label col-sm-2" for="project_details">project details:</label>
                                            <div class="col-sm-4">
                                                <textarea cclass="form-control" id="project_details" name="project_details" placeholder="project_details" required style="width: 100%;">
                                                            <?php echo $project_details; ?>
                                                        </textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>







                      <!--Delete Modal -->
                      <div id="deletep<?php echo $id_project; ?>" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                              <form method="post">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Delete</h4>
                                      </div>
                                      <div class="modal-body">
                                          <input type="hidden" name="delete_id_p" value="<?php echo $id_project; ?>">
                                          <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                                  this ?</strong> </div>
                                          <div class="modal-footer">
                                              <button type="submit" name="delete_p" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </tr>
                  <?php
                          }


                          //Update Items
                        if(isset($_POST['update_item'])){
                $edit_project_id = $_POST['edit_project_id'];
                            $project_name = $_POST['project_name'];
                            $client_name = $_POST['client_name'];
                            $service_type = $_POST['service_type'];
                            $project_details = $_POST['project_details'];
                            $sql = "UPDATE project SET
                                project_name='$project_name',
                                client_name='$client_name',
                                service_type='$service_type',
                                project_details='$project_details'
                                WHERE id='$edit_project_id' ";
                            if ($connection->query($sql) === TRUE) {
                                echo '<script>window.location.href="database.php"</script>';
                            } else {
                                echo "Error updating record: " . $connection->error;
                            }
                        }






                          if(isset($_POST['delete_p'])){
                              // sql to delete a record
                              $delete_id_p = $_POST['delete_id_p'];
                              $sql = "DELETE FROM project WHERE id='$delete_id_p' ";
                              if ($connection->query($sql) === TRUE) {
                                  $sql = "DELETE FROM project WHERE id='$delete_id_p' ";
                                  if ($connection->query($sql) === TRUE) {
                                      $sql = "DELETE FROM project WHERE id='$delete_id_p' ";
                                      echo '<script>window.location.href="database.php"</script>';
                                  } else {
                                      echo "Error deleting record: " . $connection->error;
                                  }
                              } else {
                                  echo "Error deleting record: " . $connection->error;
                              }
                          }
                      }




        ?>
              </tbody>
          </table>


        </div>



   		</div>
  <!-- finish project tab -->

<!-- start client tab -->
   		<div id="clients" class="tab-pane fade">


        <div >

          <table id="example2" class="display b" cellspacing="0" >
              <thead>
                  <tr>

                      <th>client name</th>
                      <th>Action</th>

                  </tr>
              </thead>

              <tbody>
                  <?php
                      $sql = "select * from clients";
                      $result = $connection->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              $id_client = $row['id'];

                              $client_name = $row['clients_name'];


                      ?>
                  <tr>

                      <td>
                          <?php echo $client_name; ?>
                      </td>

                      <td>

                          <a href="#deletec<?php echo $id_client;?>" data-toggle="modal">
                              <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                          </a>
                          <a href="#edit<?php echo $id_client;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                        </a>
                      </td>


                      <!--Edit Item Modal -->
                    <div id="edit<?php echo $id_client; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit client name</h4>
                                    </div>
                                    <div class="modal-body">
                       <input type="hidden" name="edit_client_id" value="<?php echo $id_client; ?>">
                                        <div class="form-group">

                                            <label class="control-label col-lg-2" for="client_name">client name</label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo $client_name; ?>" placeholder="client_name" required> </div>

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update_client"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>





                      <!--Delete Modal -->
                      <div id="deletec<?php echo $id_client; ?>" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                              <form method="post">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Delete</h4>
                                      </div>
                                      <div class="modal-body">
                                          <input type="hidden" name="delete_id_c" value="<?php echo $id_client; ?>">
                                          <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                                  this ?</strong> </div>
                                          <div class="modal-footer">
                                              <button type="submit" name="delete_c" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </tr>
                  <?php
                          }




                          //Update Items
                        if(isset($_POST['update_client'])){
                      $edit_client_id = $_POST['edit_client_id'];

                            $client_name = $_POST['client_name'];

                            $sql = "UPDATE clients
                            SET    clients_name='$client_name'
                                WHERE id='$edit_client_id'";
                            if ($connection->query($sql) === TRUE) {
                                echo '<script>window.location.href="database.php"</script>';
                            } else {
                                echo "Error updating record: " . $connection->error;
                            }
                        }


                          if(isset($_POST['delete_c'])){
                              // sql to delete a record
                              $delete_id_c = $_POST['delete_id_c'];
                              $sql = "DELETE FROM clients WHERE id='$delete_id_c' ";
                              if ($connection->query($sql) === TRUE) {
                                  $sql = "DELETE FROM clients WHERE id='$delete_id_c' ";
                                  if ($connection->query($sql) === TRUE) {
                                      $sql = "DELETE FROM clients WHERE id='$delete_id_c' ";
                                      echo '<script>window.location.href="database.php"</script>';
                                  } else {
                                      echo "Error deleting record: " . $connection->error;
                                  }
                              } else {
                                  echo "Error deleting record: " . $connection->error;
                              }
                          }
                      }




        ?>
              </tbody>
          </table>


        </div>




   		</div>
<!-- finish client tab       -->




     </div>

 </div>

 </body>
 </html>
