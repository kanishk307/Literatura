<?php 
$con = mysqli_connect('localhost:3306','root',''); 

if(!$con)
{
    echo 'Not Connected To Server'; 
          }

if (!mysqli_select_db ($con,'email_addresses')) 
{ 
    echo 'Database Not Selected';
} 

$Name = $_GET['name'];
$Email = $_GET['email'];

$sql = "INSERT INTO info (Name,Email) values ('$Name','$Email')"; 
if (!mysqli_query($con,$sql))
{ 
    echo 'Not Inserted'; 
} 
else { echo 'Inserted Successfully'; } header("refresh:2; url=index.html"); 
?>
