<!DOCTYPE html>
<html>
    <head>

    </head>
<body>



<form method="POST">
  Name : <input type="text" name="Name" placeholder="Enter Full Name" Required>
  <br/>
  Item Needed: 
  <input list="Items">

<datalist id="Items">
  <option value="Printer">
  <option value="Notebook">
  <option value="Desktop">
  <option value="Carton of Printer Paper">
  
</datalist>
<br/>
  Quantity : <input type="text" name="Quantity" placeholder="Enter Quantity" Required>
  <br/>
  Price : <input type="text" name="Price" placeholder="Enter Price" Required>
  <br/>
  Tax : <input type="text" name="Tax" placeholder="Enter Tax" Required>
  
  <br/>
  <input type="submit" name="submit" value="Submit">
</form>

You are purchasing <?php echo $_POST["Quantity"] ; ?> <?php echo $_POST["Items"] ; ?>(s) at the price of <?php echo $_POST["Price"]; ?> per piece. The total cost including tax is $<?php echo ($_POST["Quantity"]*$_POST["Price"]*(1+($_POST["Tax"]/100))); ?>.



</body>
</html>