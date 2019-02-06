<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    table {
          border-collapse: collapse;
            
    }

    table, td, th {
          border: 1px solid black;
    }
    </style>
</head>
<body>
    

<?php


/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = array("pizza", "cheese", "hotpot", "tacos");

/*
Print every array element in a new line.
*/

echo " My favorite food are " . $food[0] . ", ". $food[1] . ", " . $food[2] . " and " . $food[3] . ".";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
        <li>{$food[0]}</li>
        <li>{$food[1]}</li>
        <li>{$food[2]}</li>
        <li>{$food[3]}</li>
        </ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    "pizza" => "main course",
    "cheese" => "dessert",
    "hotpot" => "main course",
    "tacos" => "main course"
];


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach($food_assoc as $k => $v){
   echo $k ."|" . $v ."<br>"; 
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/


$food = [
    "pizza" => [
        "type" => "main course",
        "origin" => "Italy"
    ],
    "cheese" => [
        "type" => "desert",
        "origin" => "Greece"
    ],
    "hotpot" => [
        "type"=> "main course",
        "origin" => "China"
    ],
    "tacos" => [
        "type" => "main course",
        "origin" => "Mexico"
    ]
];


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

foreach($food as $k => $v){
    echo $k;
   foreach($food[$k] as $t => $m){
       echo  "|". $m;
   }
    echo "<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

$food = [
    "pizza" => [
        "type" => "main course",
        "origin" => "Italy"
    ],
    "cheese" => [
        "type" => "desert",
        "origin" => "Greece"
    ],
    "hotpot" => [
        "type"=> "main course",
        "origin" => "China"
    ],
    "tacos" => [
        "type" => "main course",
        "origin" => "Mexico"
    ]
];

echo "<table>";
echo "<tr>";
echo "<th>food</th>";
echo "<th>type</th>";
echo "<th>origin</th>";
echo "</tr>";

foreach ($food as $k => $v) {
    echo "<tr>";
    echo "<td>{$k}</td><td>{$v["type"]}</td><td>{$v["origin"]}</td>";
    echo "</tr>";
}

echo "</table>";





?>


</body>
</html>