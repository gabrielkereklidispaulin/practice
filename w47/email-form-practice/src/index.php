<?php

function sanitize_input($input)
{
  $sanitized_input = htmlspecialchars($input);
  $sanitized_input = trim($sanitized_input);
  $sanitized_input = stripslashes($sanitized_input);

  return $sanitized_input;

}

function validate_email($input)
{
  if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
    return $input;

  }
  return "Invalid email";
}

function validate_name($input)
{
  if (strlen($input) > 40) {
    return "Invalid format: Name can be no longer than 40 characters";
  }

  return $input;
}

function validate_subject($input)
{
  if (strlen($input) > 40) {
    return "Invalid format: Name can be no longer than 40 characters";
  }

  return $input;
}

function validate_message($input)
{

  if (strlen($input) > 240) {
    return "Invalid format: Name can be no longer than 240 characters";
  }

  return $input;

}

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($POST["subject"])) {
  echo $_POST["email"];
  echo "<br>";
  echo $_POST["name"];
  echo "<br>";
  echo $_POST["subject"];
  echo "<br>";
  echo $_POST["message"];
  // }
// else {
//   echo "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="POST" id="contact-form">
    <h2>Contact us</h2>
    <p><label>Email Address:</label> <input type="email" name="email"></p>
    <p><label>First Name:</label> <input name="name" type="name"></p> <br>
    <p><label>Subject:</label> <input type="text" name="subject"></p> <br>
    <p><label>Message:</label> <textarea maxlength="240" name="message"></textarea></p>
    <br>
    <p><button type=submit>Send!</button></p>
  </form>
</body>

</html>