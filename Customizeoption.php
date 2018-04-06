<!DOCTYPE html>
<html>
  <head>
<center> <h3>Make Some Delicious Cakes of Your Dream</h3><center>
  <style>
  table {
      border-collapse: collapse;
      width: 100%;
      border: 23
  }

 td {
      padding: 20px ;
      text-align: center;
      border-bottom: 1px solid #ddd;
  }
  </style>
  <script>
  function validateForm() {
      var a = document.forms["Customise"]["flavor"].value;
        var b = document.forms["Customise"]["topping"].value;
          var c = document.forms["Customise"]["layer"].value;

      if (a == "") {
          alert("Name must be filled out");
          return false;
      }
      if (b == "") {
          alert("Name must be filled out");
          return false;
      }
      if (c == "") {
          alert("Name must be filled out");
          return false;
      }
  }
  </script>
  </head>
  <body bgcolor="#F0F8FF">
    <form name="Customise" action=""
    onsubmit="return validateForm()" method="post">


    <table>
      <tr>
        <td>*flavour</td>
        <td><input list="items" name="flavor" >
              <datalist id="items" >
                <option value="chocolate"></option>
                <option value="vanilla"></option>
                <option value="pineapple"></option>
                  </datalist>
               </td>
      </tr>

      <tr>
        <td>*Stuffing</td>
        <td><input list="Stuffingitem" name="topping" value="">
              <datalist id="Stuffingitem">
                <option value="chocolate flowers with cherries"></option>
                <option value="vanilla flowers with cherries"></option>
                <option value=" butterscotch stones"></option>
                  </datalist>
               </td>
      </tr>
      <tr>
            <td>Name(s) on cake</td>
            <td><input type="text" name="NameCake" value=""></td>
      </tr>
      <td>*Number Of Bread Layers</td>
      <td><input type="number" name="layer" value=""></td>
      <tr>
           <td>More Details</td>
           <td><input type="text" name="details" value=""></td>
      </tr>
    </table>
    <center><input type="submit" value="Submit"></center>
      * feilds are mandatory
    </form>
    <?php
    // define variables and set to empty values
    $flavor = $topping = $NameCake = $layer = $details = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $flavor = test_input($_POST["flavor"]);
      $topping = test_input($_POST["topping"]);
      $NameCake = test_input($_POST["NameCake"]);
      $layer = test_input($_POST["layer"]);
      $details = test_input($_POST["details"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

  </body>
</html>
