<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
  <title>Thank You for your feedback</title>
  <link rel="stylesheet" type="text/css" href="stylerules.css">
</head>

<body>
   <?php
      $firstName = $_POST['FirstName'];
      $Lastname = $_POST['LastName'];
      $cell = $_POST['Telephone'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $month = $_POST['month'];
      $age = $_POST['age']
      $ringsizechart = $_POST['ringsizechart']
      $ringsize = $_POST['ringsize'];
      $selectshape = $_POST['selectshape']
      $rateourservice = $_POST['rateourservice'];

  
   
   echo <h3> thankyou </h3> ;
   echo <strong>$name</strong>, you provided this information: <br><br>
   echo your phone number: <strong>$phoneno</strong> <br><br>
   echo your email: <strong>$email</strong> <br><br>
   echo date: <strong>$date</strong> <br><br>
   echo country: <strong>$country</strong> <br><br>
   echo requested type of service: <strong>$service</strong> <br><br>
   echo your subscription: <strong>$subscribe</strong> <br><br>
   
   <br><br> <a href='Birthstonerec.html'><strong>< #back</strong></a>
  ?>
</body>
</html>