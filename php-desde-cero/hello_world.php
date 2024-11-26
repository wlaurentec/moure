<?php

echo "Hello Beast PHP World! \n";

$my_string = "Esto es una cadena";
// $my_string = "";

echo $my_string . "\n";

echo gettype($my_string) . "\n";

$my_string = 6;

echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = "Esto es una cadena";

$my_integer = 7;
$my_integer = $my_integer + 4;

echo $my_integer . "\n";

$my_float = 7.5;
$my_float = $my_float + 4.0;

echo $my_float . "\n";

echo gettype($my_float) . "\n";

echo "************************BOOLEAN********************************** \n";
$my_boolean = true;

echo $my_boolean . "\n";

$my_boolean = false;

echo gettype($my_boolean) . "\n";

echo "El valor del entero es " . $my_integer . "\n" . "El valor del float es " . $my_float . "\n";

echo "************************CONSTANTES********************************** \n";

const MY_CONSTANT = "Esto es una constante";

echo MY_CONSTANT . "\n";

echo "************************ARRAYS********************************** \n";

$my_array = array(1, 2, 3, 4, 5);

echo $my_array[3] . "\n";

$my_array2 = [$my_string, $my_integer, $my_float];

echo gettype($my_array2) . "\n";

array_push($my_array2, $my_boolean);

print_r($my_array2);


echo "************************DICIONARIOS********************************** \n";

$my_dict = array(
    "string" => $my_string,
    "integer" => $my_integer,
    "float" => $my_float,
    "boolean" => $my_boolean
);

print_r($my_dict);

echo gettype($my_dict) . "\n";

echo $my_dict["integer"] . "\n";

echo "************************SET********************************** \n";

print_r($my_array2);

array_push($my_array2, "Brais");

array_push($my_array2, "Brais");

print_r($my_array2);

print_r(array_unique($my_array2));

echo "************************FLUJOS********************************** \n";

echo "************************FOR********************************** \n";
for ($i = 0; $i < count($my_array2); $i++) {
    echo $my_array2[$i] . "\n";
}

for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";
}


echo "************************FOREACH********************************** \n";
foreach ($my_array2 as $value) {
    echo $value . "\n";
}

echo "************************WHILE********************************** \n";

$index = 0;

/* while ($index < count($my_array2)) {
    echo $my_array2[$index] . "\n";
    $index++;
} */

while ($index < sizeof($my_array2) - 1) {
    echo $my_array2[$index] . "\n";
    $index++;
}

echo "************************IF********************************** \n";

if ($my_int == 11 ) {
    echo "El valor es 11";
} elseif ($my_int == 12) {
    echo "El valor es 12";
} else {
    echo "El valor no es 11 ni 12 \n";
}

echo "************************SWITCH********************************** \n";

$my_int = 12;

switch ($my_int) {
    case 11:
        echo "El valor es 11";
        break;
    case 12:
        echo "El valor es 12";
        break;
    default:
        echo "El valor no es 11 ni 12";
        break;
}

echo "************************FUNCIONES********************************** \n";

function my_function() {
    echo "Esto es una función";
}

my_function();

function my_function2($param1, $param2) {
    echo "Esto es una función con parámetros: " . $param1 . " y " . $param2;
}

my_function2("param1", "param2");


echo "************************CLASES********************************** \n";

class MyClass {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$my_class = new MyClass("Brais", 30);
print_r($my_class);
echo $my_class->name . "\n";

$my_class->name = "Brais 2";
echo $my_class->name . "\n";

?>