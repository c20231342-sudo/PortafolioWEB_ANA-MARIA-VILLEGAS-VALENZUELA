<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog API - Razas de Perros</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background: linear-gradient(to bottom right, #ffd6ec, #dbe7ff);
            min-height:100vh;
            padding:40px;
        }

        .contenedor{
            max-width:1200px;
            margin:auto;
            background:white;
            border-radius:25px;
            padding:40px;
            box-shadow:0 10px 30px rgba(0,0,0,0.1);
        }

        h1{
            text-align:center;
            color:#ff4fa3;
            margin-bottom:20px;
            font-size:40px;
        }

        h2{
            color:#7b68ee;
            margin-top:40px;
            margin-bottom:20px;
            text-align:center;
        }

        .descripcion{
            text-align:center;
            color:#555;
            margin-bottom:30px;
            font-size:18px;
        }

        .lista-razas{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:15px;
            margin-top:20px;
        }

        .raza{
            background:#ffe9f5;
            padding:15px;
            border-radius:15px;
            transition:0.3s;
            border:2px solid #ffd0ea;
        }

        .raza:hover{
            transform:scale(1.03);
            background:#ffd9ee;
        }

        .raza strong{
            color:#ff4fa3;
        }

        .imagenes{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
            margin-top:25px;
        }

        .card{
            background:#f8f4ff;
            padding:15px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
        }

        .card img{
            width:100%;
            height:250px;
            object-fit:cover;
            border-radius:15px;
        }

        .footer{
            text-align:center;
            margin-top:40px;
            color:#777;
            font-size:14px;
        }

    </style>

</head>
<body>

<?php

// ================= API KEY =================
$apiKey = 'live_AxqIfweQ9z4iswUtE6b4Z6gYndiYIRWssls6pzOESE1CFZALGB791LdVV9RmIqJJ';



// ================= FUNCION RAZAS =================
function getBreeds($apiKey){

    $url = "https://api.thedogapi.com/v1/breeds";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'x-api-key: ' . $apiKey
    ));

    $response = curl_exec($ch);

    if($response === false){
        die("Error CURL: " . curl_error($ch));
    }

    curl_close($ch);

    $data = json_decode($response, true);

    if(!is_array($data)){
        die("Error en API o API KEY");
    }

    return $data;
}



// ================= FUNCION IMAGENES =================
function getBreedImages($apiKey, $breedId, $limit = 6){

    $url = "https://api.thedogapi.com/v1/images/search?breed_id={$breedId}&limit={$limit}";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'x-api-key: ' . $apiKey
    ));

    $response = curl_exec($ch);

    if($response === false){
        die("Error CURL: " . curl_error($ch));
    }

    curl_close($ch);

    $data = json_decode($response, true);

    if(!is_array($data)){
        die("Error obteniendo imágenes");
    }

    return $data;
}



// ================= OBTENER DATOS =================
$breeds = getBreeds($apiKey);

$huskyId = 8;

$images = getBreedImages($apiKey, $huskyId);

?>

<div class="contenedor">

    <h1>🐶 Dog API</h1>

    <p class="descripcion">
        Consulta de razas de perros utilizando una REST API con PHP y cURL
    </p>

    <h2>Lista de Razas</h2>

    <div class="lista-razas">

        <?php

        foreach($breeds as $breed){

            if(isset($breed['name']) && isset($breed['id'])){

                echo "
                <div class='raza'>
                    <strong>{$breed['name']}</strong><br>
                    ID: {$breed['id']}
                </div>
                ";
            }
        }

        ?>

    </div>

    <h2>Imágenes Husky</h2>

    <div class="imagenes">

        <?php

        foreach($images as $image){

            if(isset($image['url'])){

                echo "
                <div class='card'>
                    <img src='{$image['url']}' alt='Husky'>
                </div>
                ";
            }
        }

        ?>

    </div>

    <div class="footer">
        Práctica REST API - The Dog API
    </div>

</div>

</body>
</html>