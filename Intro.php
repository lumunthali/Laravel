<?php
$marks = 98;
$student = array("Mateyu", "Phillip", "Moses", "John", "Jane");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>
    
<h1> About user </h1>
<p>
<?php
if($marks>80) {
    echo "Distinction <br>";
}
else if($mark>=70) {echo "This is credit";
}
    else
    {echo "failed";
    }

    foreach($student as $index => $name){
    echo "student $index: $name<br>";
}
echo "<table boarder='1'>";
echo "<tr> <th>Index</th><th>Name</th></tr>";

foreach($student as $key => $val){
    echo "<tr><td>" . ($key+1) . "</td> <td>" . $val . "</td></tr>";

}
echo "</table>";
?>



</p>
    
</body>
</html>
