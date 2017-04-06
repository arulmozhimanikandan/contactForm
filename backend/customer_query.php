
<!DOCTYPE html>

<html lang="en" ng-app="contactForm">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="dist/module.css">

</head>

<body ng-controller="mainController">

    <div class="container form-wrapper">
    <h1>Customer Query</h1>
<p>Please find below table for customer informations and customer's message</p>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Posted On</th>
                </tr>
            </thead>
            <tbody>
               
              <?php
              require_once('content_db_login.php');
              $userQuries = mysql_query("select * from contactForm");
              while ($row = mysql_fetch_array($userQuries))   {
              echo " <tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['msg']."</td><td>".$row['time']."</td></tr>";
              }
              ?>
                
            </tbody>
        </table>
    </div>
    
  
    <script type="text/javascript" src="dist/contactModule.js"></script>
    
   </body>

</html>