<?php
// Arrays associativos para armazenar dados dos carros
$carro1 = array(
    "modelo" => "Polo",
    "marca" => "Volkswagen",
    "foto" => "https://upload.wikimedia.org/wikipedia/commons/f/f0/2011_Volkswagen_Polo_S_60_1.2_Front.jpg"
);

$carro2 = array(
    "modelo" => "Civic",
    "marca" => "Honda",
    "foto" => "https://s2-autoesporte.glbimg.com/Dp4LcpaI94nP_6U05jwTnQwKaQg=/0x0:990x593/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2024/9/e/KdzyFGTwe3xeoGLKPHhA/honda-civic-rs.jpg"
);

$carro3 = array(
    "modelo" => "Corolla",
    "marca" => "Toyota",
    "foto" => "https://cdn.motor1.com/images/mgl/O64MB/s1/4x3/toyota-corolla-gr-s-2022-em-destaque.webp"
);

$carro4 = array(
    "modelo" => "Fiesta",
    "marca" => "Ford",
    "foto" => "https://cdn.autopapo.com.br/box/uploads/2017/11/23111155/ford-new-fiesta-hatch-2018-02-732x488.jpg"
);

$carro5 = array(
    "modelo" => "Gol",
    "marca" => "Volkswagen",
    "foto" => "https://cdn.motor1.com/images/mgl/YAAopq/s3/volkswagen-gol-1.0-2023.jpg"
);

// Array contendo os arrays de dados dos carros
$matriz_carros = array($carro1, $carro2, $carro3, $carro4, $carro5);

// Loop para criar um card para cada carro
foreach ($matriz_carros as $carro) {
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    echo $carro["modelo"] . "<br>";
    echo $carro["marca"] . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $carro["foto"] . "' /><br>";
    echo "</div>";
}
?>
