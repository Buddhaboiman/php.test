<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="POST">
    <label for="Hej">NAME</label>
    <input type="text" name="Hej" id="Hej">
    <input type="submit" value="sumbit" name="sumbit">
</form>
    <?php 
    $strName = $_POST['Hej']; 
    echo "<h1>Filip</h1>";
    echo "<p>Hej världen</p>";
    
    include "footer.php";
    
    echo "Denna text är generad med utskriftkommandot i php";

if($_POST['Hej'] == ""){ 
    echo "<br>world world epic";
}
else{
    
    echo "Namn: " . $strName;
    echo '<br>';
    echo "baklänges: " . strrev($strName);
    echo "<br>";
    echo "Gemener: " . strtolower($strName);
    echo "<br>";
    echo "Versaler: " . strtoupper($strName);
    echo "<br>";
    echo "längd: " . strlen($strName);
}
    $farmAnimals = array("apa","gorilla","orangutang");
    print_r ($farmAnimals);
    
    ?>
</body>
</html>