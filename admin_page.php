
 <?php
 session_start();
 require_once ("config.php");
 $check=$_SESSION['a_n'];
 $check2="tech_craft_admin";
 if($check!=$check2){

   header("Location: admin.php");
 }

 else {
   $admin_name=$_SESSION['a_n'];
 }



 $query="select * from admin where admin_name='$admin_name'";
 $send=mysqli_query($connection,$query);
 $row=mysqli_fetch_array($send);



  ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Admin panel</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

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

<center> <a href="database.php" class="btn btn-danger btn-lg" role="button" target="_blank"style="color:black;">Database</a></center>
   <center> <h1  style="color:black;">Welcome <?php echo "$row[admin_name]"; ?></h1> </center>


   <?php
   if(isset($_GET['project'])){
   echo '<div class="alert alert-success alert-dismissible">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center><strong>successfully project details updated!</strong> Thank you</center>
   </div>';

   }
   ?>

   <?php
   if(isset($_GET['client'])){
   echo '<div class="alert alert-success alert-dismissible">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center><strong>successfully client details updated!</strong> Thank you</center>
   </div>';

   }
   ?>

   <ul class="nav nav-pills">
       <li class="active"><a data-toggle="pill" href="#project">Add new project</a></li>
       <li><a data-toggle="pill" href="#clients">Add new clients </a></li>

     </ul>



     <div class="tab-content">
       <!-- start project tab -->
   		<div id="project" class="tab-pane fade in active">

        <h3 style="color:white"> For adding new admin</h3>


        <form class="form-horizontal" action="process_project.php" method="post">


        <div class="form-group">
          <label class="control-label col-sm-2" style="color:black">Project name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="project_name" placeholder="Enter project name ">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-2" style="color:black">client name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="client_name" placeholder="enter client name">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" style="color:black">service type</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="service_type" placeholder="enter service type">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-2" style="color:black">project details</label>
          <div class="col-sm-10">
            <textarea name="project_details" id="" cols="30" rows="5" placeholder="project details" class="form-control"></textarea>
          </div>
        </div>



              <button style="width:100%;" type="submit" class="btn btn-primary butn_position">Submit</button>

        </form>



   		</div>
  <!-- finish project tab -->

<!-- start client tab -->
   		<div id="clients" class="tab-pane fade">

        <h3 style="color:white"> For adding new client</h3>


        <form class="form-horizontal" action="process_client.php" method="post">

        <div class="form-group">
          <label class="control-label col-sm-2" style="color:black">client name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="client_name" placeholder="enter client name">
          </div>
        </div>

              <button style="width:100%;" type="submit" class="btn btn-primary butn_position">Submit</button>

        </form>

   		</div>
<!-- finish client tab       -->




     </div>

 </div>

 </body>
 </html>
