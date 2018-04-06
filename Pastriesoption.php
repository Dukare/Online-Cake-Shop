<!DOCTYPE html>
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
    <h3>Pastries</h3>
    <p>Pastry is a dough of flour, water and shortening that may be savoury or sweetened. Sweetened pastries are often described as bakers' confectionery. The word "pastries" suggests many kinds of baked products made from ingredients such as flour, sugar, milk, butter, shortening, baking powder, and eggs. Small tarts and other sweet baked products are called pastries. The French word pâtisserie is also used in English (with or without the accent) for the same foods. Common pastry dishes include pies, tarts, quiches and pasties.<br>
Pastry can also refer to the pastry dough, from which such baked products are made. Pastry dough is rolled out thinly and used as a base for baked products.</p>
  </head>
  <body bgcolor="#F0F8FF">

        <?php

        $user_name = "root";
        $password = "";
        $database = "cakesdb";
        $host_name = "localhost";

        $con=mysqli_connect($host_name, $user_name, $password, $database);


        if(!$con) {
                   die("Connection failed: " . mysqli_connect_error());
                  }
                  $sql = "SELECT * FROM pastry";
      $result = $con->query($sql);
      if ($result->num_rows > 0) {

          echo '<table  align="center">';
          while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>';
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="300" width="300" />' ;
            echo '</td>';
                echo '<td>';
              echo '<center><h3><a href="OrderPage.html" >'. $row["name"].'</a></h3></center><br>';
              echo '<p>'. $row["inforation"].'</p>';
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
