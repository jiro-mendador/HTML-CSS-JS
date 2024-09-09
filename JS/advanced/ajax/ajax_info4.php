<?php
// Check if the 'fname' and 'lname' POST parameters are set
if (isset($_POST['fname']) && isset($_POST['lname'])) {
  // Retrieve the values from the POST request
  $firstName = $_POST['fname'];
  $lastName = $_POST['lname'];

  // You can perform any processing you need with these values here.

  // For this example, we'll simply concatenate the names and send a response.
  $fullName = $firstName . ' ' . $lastName;

  // Set the Content-Type header to indicate that the response will be plain text
  header('Content-Type: text/plain');

  // Output the result as a response
  echo 'Hello, ' . $fullName;
} else if (isset($_GET['fname']) && isset($_GET['lname'])) {
  $firstName = $_GET['fname'];
  $lastName = $_GET['lname'];
  $fullName = $firstName . ' ' . $lastName;

  header('Content-Type: text/plain');
  echo 'Hello, ' . $fullName;
} else {
  // Handle the case where 'fname' and 'lname' parameters are not set
  header('HTTP/1.1 400 Bad Request');
  echo 'Missing or invalid data in the POST request.';
}
?>