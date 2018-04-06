
<html>
  <head>
    <style >  a.active {      background-color: #BB1924;  }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    p {
    font-family: "Helvetica", serif;
}
h3 {
font-family: "Helvetica", serif;
}
      </style>
    <h3>Cake</h3>
    <p>Cake is a form of sweet dessert that is typically baked. In its oldest forms, cakes were modifications of breads, but cakes now cover a wide range of preparations that can be simple or elaborate, and that share features with other desserts such as pastries, meringues, custards, and pies.Typical cake ingredients are flour, sugar, eggs, butter or oil or margarine, a liquid, and leavening agents, such as baking soda or baking powder. Common additional ingredients and flavourings include dried, candied, or fresh fruit, nuts, cocoa, and extracts such as vanilla, with numerous substitutions for the primary ingredients. Cakes can also be filled with fruit preserves,nuts or dessert sauces (like pastry cream), iced with buttercream or other icings, and decorated with marzipan, piped borders, or candied fruit.<br>
    </p>
    <p>Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes; some are bread-like, some are rich and elaborate, and many are centuries old. Cake making is no longer a complicated procedure; while at one time considerable labor went into cake making (particularly the whisking of egg foams), baking equipment and directions have been simplified so that even the most amateur cook may bake a cake.</p>

  </head>
  <body bgcolor="#F0F8FF">


    <?php
    session_start();



    $user_name = "root";
    $password = "";
    $database = "cakesdb";
    $host_name = "localhost";

    $con=mysqli_connect($host_name, $user_name, $password, $database);


    if(!$con) {
               die("Connection failed: " . mysqli_connect_error());
              }
              $sql = "SELECT * FROM cakes";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {

      echo '<table  align="center">';
      while($row = $result->fetch_assoc()) {


        echo '<tr>';
        echo '<td>';
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="300" width="300" />' ;
        echo '</td>';

            echo '<td>';
          echo '<center><h3><a href="OrderPage2.php" >'. $row["name"].'</a></h3></center><br>';
$_SESSION['firstMessage'] =  $row["name"];

     echo '<p>'. $row["information"].'</p>';
  echo '</td>';


          echo '</tr>';
      }
      echo '</table>';
  } else {
      echo "0 results";
  }


    mysqli_close($con);

    ?>


  </body>
</html>
