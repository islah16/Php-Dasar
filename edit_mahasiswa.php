<?php
    
    $Nim = $_GET['Nim'];
    $mysqli = new mysqli('localhost', 'root', '', 'absen');

  
    $mahasiswa = $mysqli->query("SELECT * FROM Mahasiswa WHERE Nim='$Nim'");
    $data = $mahasiswa->fetch_assoc();

    $program_Studi = $mysqli->query("Select * from Program_Studi");

    if (isset($_POST['Nim']) && isset($_POST['Nama'])) {
        $Nim = $_POST['Nim'];
        $Nama = $_POST['Nama'];
        $program_Studi = $_POST['Program_Studi'];
    
        $update = $mysqli->query("UPDATE Mahasiswa SET Nama='$Nama',  Id_Prodi=$program_Studi WHERE Nim='$Nim'");
                                
        if ($update) {
            header("Location: mahasiwa.php");
            exit();
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class ="container">
    <h1 align="center" >From Edit Mahasiswa</h1>
    <form method ="POST">
        <div class ="mb-3">
            <label for="Nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="Nim" name="Nim" value="<?= $data['Nim']?>">
        </div> 
        <div class ="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama" value="<?= $data['Nama']?>">
        </div>
        <div class ="mb-3">
            <label for="Prodi" class="form-label">Prodi</label>
            <select class="form-select" id="Program_Studi" name="Program_Studi">
            <option value="">Pilih Program Studi</option>
                <?php while ($row = $program_Studi->fetch_assoc()) { ?>
                    <option value="<?= $row['id']; ?>" <?= $row['id'] == $data['Id_Prodi'] ? 'selected' : '' ?>>
                        <?=$row['Prodi'] ?>
                </option>
                <?php } ?>
                </select>
        </div>
        <div class="mt-3">
                <button type="submit" class="btn btn-primary">Sumbit</button>
                <a href="Mahasiwa.php" class="btn btn-warning">Cancel</a>
         </div>
    </form>
    
</body>
</html>