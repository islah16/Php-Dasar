<?php
    $mysqli = new mysqli('localhost', 'root', '', 'absen');
    $result = $mysqli->query("SELECT mahasiswa.Nim, mahasiswa.Nama, program_studi.Prodi
    FROM mahasiswa INNER JOIN program_studi ON mahasiswa.Id_Prodi = program_studi.Id_Prodi;");

   $mahasiswa = [];

    while ($row = $result->fetch_assoc()) {
        array_push($mahasiswa, $row);
    }

    $no = 1
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <h1 align="center"> Data Mahasiswa KA 2021 </h1>   
    <div class="container"> 
    <a href="Tambah_mahasiswa.php" class="btn btn-primary">Tambah</a> 
    <table class="table table-bordered table-hover">
        <tr>
            <th> No </th>
            <th> NIM </th>
            <th> Nama </th>
            <th> Program Studi </th>
            <th>Edit</th>
        </tr>
        <?php foreach ($mahasiswa as $row ) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['Nim']; ?></td>
                <td><?= $row['Nama']; ?></td>
                <td><?= $row['Prodi']; ?></td>
                <td>
                    <a href="edit_mahasiswa.php?nim=<?= $row['Nim']?>" class="btn btn-success">Edit</a>
                </td>    
        </tr>
        <?php } ?>
    </table>  
    </div> 
    
</body>
</html>