<?php 

$conn = mysqli_connect('baza_danych', 'root','haslo123');
if (!$conn) {
   exit('Nie uzyskano połączenia: '.mysqli_connect_error());
}
echo 'Uzyskano połączenie';
die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
</body>
</html>
