<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Contact And Reservation Table</h1>

<table id="customers">
  <tr>
    <th>Name Surname </th>
    <th>Telephone Number</th>
    <th>E-mail <Address></Address></th>
    <th>Topic Title</th>
    <th>Your Message</th>
  </tr>


   
<?php

session_start();

if($_SESSION["USER"]=="")
{
  echo "<script>window.location.href='exit.php'</script>";
}
else
{
  echo "Kullanıcı Adınız :".$_SESSION['USER']."<br>";
  echo "<a href='exit.php'>ÇIKIŞ YAP</a><br><br>";

  include("connection.php");


  $sec="Select * From contact";
  $sonuc=$baglan->query($sec);
  
  if($sonuc->num_rows>0)
  {
        while($cek=$sonuc->fetch_assoc())
        {
             echo "
             <tr>
                  <td>".$cek['namesurname']."</td>
                  <td>".$cek['telephone']."</td>
                  <td>".$cek['email']."</td>
                  <td>".$cek['topic']."</td>
                  <td>".$cek['message']."</td>
             </tr>
             
             ";
        }
  }
  else{
        echo " Veritabanında hiçbir veri bulunamadı. ";
  }
  
}

?>


  
 
</table>

</body>
</html>




