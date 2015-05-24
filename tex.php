<!DOCTYPE html>
<?php
mysql_connect("localhost","root","") or die("Connection Denied");
mysql_select_db("project") or die("Connection Denied");
$search=mysql_real_escape_string($_POST['search']);
?>
<html lang="en">

    <head>
	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Registration Form Template</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
	

    <body>

                <div class="container">
                    <div class="row">
					<div class="form-top">
					<div class="page-header">
        <h1>The requested results!</h1>
        </p>
      </div>
<?php
$select="select * from form where uname='$search'";
$hide=mysql_query($select);
while($check=mysql_fetch_assoc($hide)){
					echo "<div class='col-md-4'><strong>Name : </strong>".$check['uname']."</div>";
					echo "<div class='col-md-4'><strong>Gender : </strong>".$check['gen']."</div>";
					echo "<div class='col-md-4'><strong>Profession : </strong>".$check['prof']."</div>";
					echo "</div>";
					}
?>
<div class="form-top">
<?php
$select="select * from form where uname='$search'";
$hide=mysql_query($select);
while($check=mysql_fetch_assoc($hide)){
					echo "<div class='col-md-4'><strong>Email : </strong>".$check['email']."</div>";
					echo "<div class='col-md-4'><strong>Mobile Number : </strong>".$check['number']."</div>";
					echo "<div class='col-md-4'><strong>City : </strong>".$check['city']."</div>";
					echo "</div>";
					}


?>
		</div>
		</div>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
</html>