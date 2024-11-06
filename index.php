<?php

echo "DATA PRIBADI";

const NAMA = "Islah Nurhasanah";
const JK = "P";
$umur = "21"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    
    <table border = "1" cellspacing = "0" cellpadding="5px"> 
                <tr> 
					<th> Nama </th> 
					<td> : </td> 
					<td> <?php echo NAMA ?> </td>
				</tr> 
				<tr> 
					<th> Jenis Kelamin </th> 
					<td> : </td> 
					<td> <?php echo JK ?> </td>
				</tr> 
				<tr> 
					<th> Umur </th> 
					<td> : </td> 
					<td> <?php echo $umur ?> </td>
				</tr> 
                <tr> 
					<th> Berat Badan </th> 
					<td> : </td> 
					<td> 46 kg </td>
				</tr> 
                <tr> 
					<th> Tinggi Badan </th> 
					<td> : </td> 
					<td> 165 cm </td>
				</tr> 
</body>
</html> 