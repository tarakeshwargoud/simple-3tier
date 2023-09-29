<!DOCTYPE HTML>  

<html>

<h1>

WELCOME TO SRR

</h1>
<body>  

<?php

// define variables and set to empty values

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["name"]);

  $email = test_input($_POST["email"]);

  $website = test_input($_POST["website"]);

  $comment = test_input($_POST["comment"]);

  $gender = test_input($_POST["gender"]);

}

function test_input($data) {

  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;

}


?>


<h3>Employee Login Form </h3>


<form method="post" action="apptier.php">  


   Name:  <input type="text" name="name">
  <br><br>
  Father Name:  <input type="text" name="Father_name">
  <br><br>
   Gender: <input type="text" name="gender">
  <br><br>
   phone:  <input type="number" name="phone">
  <br><br>


 Email.Id:   <input type="text" name="Email_id">


  <br><br>


  Comment: <textarea name="comment" rows="5" cols="40"></textarea>


  <br><br>


  <input type="submit" name="submit" value="Submit">  


</form>


</body>


</html>