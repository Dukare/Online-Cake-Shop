<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmation of order</title>
  </head>
  <body bgcolor="#F0F8FF">
    <h1>Order Placed Successfully...</h1>
    <?php
      $flavor =  $_POST['flavor'];
      $topping = $_POST['topping'];
      $NameCake = $_POST['NameCake'];
      $layer =  $_POST['layer'];
      $details = $_POST['details'];


            $user_name = "root";
            $password = "";
            $database = "cakesdb";
            $host_name = "localhost";

            $con=mysqli_connect($host_name, $user_name, $password, $database);

            if(!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                      }


                        $sql = "INSERT INTO order ()
                                  VALUES ('$flavor $topping $NameCake $layer $details'  )";

                                    $result = $con->query($sql);
          if (!$result) {

              echo "row is not added" ;

          }

            mysqli_close($con);

     ?>
  </body>
</html>
