<!DOCTYPE html>
<html>
  <head>
  <style>
  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      padding: 20px;
      text-align: center;
      border-bottom: 1px solid #ddd;
  }
  </style>
  <script>
  function validateForm() {
  var fields = ["Cname", "Cadress", "contactnoo","Cpayment", "Ddate", "B1", "B2"]

  var i, l = fields.length;
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if (document.forms["Order"][fieldname].value === "") {
      alert(fieldname + " can not be empty");
      return false;
    }
  }
  return true;
}
function Price() {


     var a = parseFloat(document.forms["Order"]["B1"].value);

       var b = parseFloat(document.forms["Order"]["B2"].value);
var tot= parseFloat((1500*a)*b) ;
  document.forms["Order"]["Output"].value=tot;}
  </script>
  </head>
  <body bgcolor="#F0F8FF">
    <?php
    session_start();
$anime = $_SESSION['firstMessage'];
    ?>
  <form name="Order" action="Confirm.html" onsubmit="return validateForm()"
 method="post" >
<table>
    <tr>
      <td>Name</td>
      <td><input type="text" name="Cname"  placeholder="name surname"></td>
    </tr>
    <tr>
          <td>Name(s) on cake</td>
          <td><input type="text" name="NameCake" value=""></td>
    </tr>
    <tr>
    <td>Address for Delivery</td>
    <td><textarea name="Cadress" rows="6" cols="80" placeholder="Adress for delivery"></textarea></td>
    </tr>
    <tr>
      <td>Contact number</td>
      <td><input type="text" name="contactnoo" value=""></td>
    </tr>
    <tr>
      <td>Mode of payment</td>
      <td><input list="ModeOfPayment" name="Cpayment" value="">
      <datalist id="ModeOfPayment">
        <option value="CASH ON DELIVERY"></option>
        <option value="NET BANKING"></option>
        <option value="PAYTM"></option>
          </datalist></td>
    </tr>
    <tr>
      <td>Date of delivery</td>
      <td><input type="date" name="Ddate" value=""></td>
    </tr>
    <tr>
      <td>weight(in kg)</td>
      <td><input list="weight" name="B1" >
        <datalist id="weight">
          <option value="0.25"></option>
          <option value="0.500"></option>
          <option value="1"></option>
          <option value="2"></option>
            </datalist>
 </td>
    </tr>
    <tr>
      <td>quantity</td>
      <td><input type="number" name="B2" onblur="Price()"></td>
    </tr>
    <tr>
    <td>  Price</td>
    <td><input type="text" name="Output" name="Price"></td>
    </tr>
    
  </table>
<center><input type="submit" value="Submit"></center>
</form>


  </body>
</html>
