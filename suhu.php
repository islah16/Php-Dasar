<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Satuan Suhu</title>
</head>
<body>
    <form method = "POST">
        <div> 
            <label for="subject">Konversi:</label>
            <select name="subject" id = "subject">
                <option value="Reamur"> Reamur </option>
                <option value="Fahrenheit"> Fahrenheit </option>
                <option value="Kelvin" > Kelvin </option>
            </select> 
        </div> 
        <div> 
            <label>Suhu: </label> 
            <input name="suhu" type "suhu">
        </div> <br>
        <div> 
            <button>Hitung</button>
        </div>
    </form>
    <?php

    if (isset($_POST['subject'])) {
       $subject = $_POST['subject'];

    if (isset($_POST['suhu'])) {
        $suhu = $_POST['suhu'];
        
        
        if ($subject == "Reamur") {
            $hasilR = $suhu * 4 / 5;
            echo "Hasil konversi suhu ke Reamur adalah $hasilR";
        }
        else if ($subject == "Fahrenheit") {
            $hasilF = ($suhu * 9 / 5) + 32;
            echo "Hasil konversi suhu ke Fahrenheit adalah $hasilF";
        } 
        elseif ($subject == "Kelvin") {
            $hasilK = $suhu + 273;
            echo "Hasil konversi suhu ke Kelvin adalah $hasilK";
        }
       
          
    }
    }
    ?>
</body>
</html>


