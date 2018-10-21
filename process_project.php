<?php
// require_once 'config.php';
//
// $project_name=$_POST['project_name'];
// $client_name=$_POST['client_name'];
// $service_type=$_POST['service_type'];
// $project_details=$_POST['project_details'];
//
//
// echo $project_name;
// echo $client_name;
// echo $service_type;
// echo $project_details;
//
//
//
// $query_admin="INSERT INTO project VALUES('','$project_name','$client_name','$service_type','$project_details')";
//
//
// $send_admin=mysqli_query($connection,$query_admin);
//
// if ($send_admin) {
//  header("Location: admin_page.php?project=success");
//
// }
// else {
//   echo "not inserted employee<br>";
// }
//
// // finish employee
//






      $servername = "server2";
            $username = "techcraf_admin";
            $password = "mQ0kh06x8R";
            $dbname = "techcraf_tech_craft";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $project_name=$_POST['project_name'];
            $client_name=$_POST['client_name'];
            $service_type=$_POST['service_type'];
            $project_details=$_POST['project_details'];


            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO project(project_name,client_name,service_type,project_details) VALUES('$project_name','$client_name','$service_type','$project_details')";

            if (mysqli_query($conn, $sql)) {
                header("Location: admin_page.php?project=success");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();















 ?>
