<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="1">Apa1</label>
        <input type="text" name="1" id="1">
        <br>
        <label for="2">Apa2</label>
        <input type="text" name="2" id="2">
        <br>
        <label for="3">Apa3</label>
        <input type="text" name="3" id="3">
        <br>
        <input type="submit" name = "knapp">
    </form>
    <?php

    if(isset($_POST['knapp'])){
    $apa1 = $_POST['1'];
    $apa2 = $_POST['2'];
    $apa3 = $_POST['3'];
    
        $coolapa = array($apa1, $apa2, $apa3);
        print_r($coolapa);

        $coolapa[2] = "struts";
        print_r($coolapa);

        array_push($coolapa, "alpacka");
        print_r($coolapa);

        unset($coolapa[0]);
        print_r($coolapa);

        echo $coolapa[1];

    }
    
            
    
    
    
    
    
?>
</body>
</html>