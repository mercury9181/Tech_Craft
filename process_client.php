<?php


      $servername = "server2";
            $username = "techcraf_admin";
            $password = "mQ0kh06x8R";
            $dbname = "techcraf_tech_craft";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $client_name=$_POST['client_name'];


            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO clients(clients_name) VALUES('$client_name')";

            if (mysqli_query($conn, $sql)) {
                header("Location: admin_page.php?client=success");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();






 ?>
