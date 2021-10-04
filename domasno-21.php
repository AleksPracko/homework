<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
echo "Aleksandar <br>";
echo "Prachkovski <br>";
echo "Aleksandar" . " " . "Prachkovski <br>";
$fname= 'Aleksandar' ;
$lname= 'Prachkovskí' ;
$age= 28;
echo "Jas sum  $fname  $lname i imam  $age  godini";
echo "<br>"
?>
<?php
$var1 = "13";
$var2 = "8";
//var_dump( $var1 > $var2);
//echo "<br>"
//$x = 22;  
//$y = 18;
//var_dump ($x == 22 and $y == 18);
//var_dump ($x == 78 or $y == 18);
//var_dump ($x == 22 xor $y == 55);
//var_dump ($x == 22 && $y == 18);
//var_dump ($x == 78 || $y == 18);
//var_dump ($x !== 33);
//echo "<br>"
$speed1= "80 km/h";

//if($speed1 >= "80 km/h"){
    //echo "You are going too slow!";
//}
//else 
    //echo "You driving is spot-on buddy";

//switch ($speed1) {
    //case 60:
        //echo "Normal speed dude!";
        //break;
    //case 70:
        //echo "Normal speed dude!!";
        //break;
    //case 80:
        //echo "Normal speed dude!!";
       // break;
    //case 90:
        //echo "Normal speed dude!!";
       // break;
    //default:
          //echo "You are either driving too slow ir too quick and I DON'T LIKE IT!";
    //}

for( $i=1;$i<=10;$i++ ){
    echo '<p>' . $i . '</p>';
}
for( $x=10;$x>=0;--$x ){
    echo '<p>' . $x . '</p>';
}
$fruit = array("Banana", "Pineapple", "Cherry"); 
echo "I like " . $fruit[0] . ", " . $fruit[1] . " and " . $fruit[2] . ".<br>";

$cities = array("Delchevo"=>"15000", "Skopje"=>"8880", "Berovo"=>"14895");

foreach($cities as $x => $x_value) {
  echo "City=" . $x . ", Population=" . $x_value;
  echo "<br>";
}
?>
<label for="numbers">Choose a number:</label>
    <select name="numbers" id="numbers">
        <option disabled value="">Choose a number</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="33">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
    </select> 

</body>
</html>