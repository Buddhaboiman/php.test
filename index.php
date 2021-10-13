<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $x = "kst";

    function display() {
    global $x;
    echo $x;
    }

    display();


define("PI", 3.14);
    display();
define("HEADING", "<h1>My Web Site</h1>");

print(HEADING);

echo "Go Bisons";
echo(" Go Bisons"); 
print(" Go Bisons"); 

?>
</body>
</html>