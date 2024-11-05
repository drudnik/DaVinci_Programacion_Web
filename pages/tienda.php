<?php
require '../db/connectionDB.php';
$connect = connectionDB();

try {
    // Выполняем запрос
    $bdSelect = $connect->query('SELECT id, title, img_url FROM products');
    $products = $bdSelect->fetch_all(MYSQLI_ASSOC);
    
} catch (Exception $e) {
    echo 'Ошибка при выполнении запроса: ' . $e->getMessage();
}

function getProductCard($product){
    return
    "<div class='catalog-element'>
        <a href='#staticBackdrop' class='link-underline link-underline-opacity-0'>
            <div class='tienda-image-1 text-tienda' data-bs-toggle='modal'
                data-bs-target='#staticBackdrop' 
                style='background-image: url( \"{$product['img_url']} \");' >
                {$product['title']}
            </div>
        </a>
    </div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pedrilos - Tienda</title>
    <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/font.css" />
    <link rel="stylesheet" href="../css/image.css" />
    <link rel="stylesheet" href="../css/form.css" />
    <link rel="stylesheet" href="../css/main_menu.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

        <nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-black" aria-label="Eleventh navbar example">
            <div class="container-fluid menu-items ">
                <a class="navbar-brand" href="../index.html" style="margin-right: 0px;">
                    <img class="logo  menu-color-white" src="../image/favicon.ico" style="width: 30px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link menu-color-white" aria-current="page" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-color-white" aria-current="page" href="./tienda.html">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-color-white" aria-current="page" href="./nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-color-white" aria-current="page" href="./contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="container-photo-no-main background-image-tienda paralax">
            <div class="text-overlay text-center">
                <h1 class="anima">
                    tienda
                    <span> &#160;</span>
                </h1>
            </div>
        </div>
        <div class="align-central">
            <div class="catalog">
                <div class="catalog-line" >

                    <?php
                    
                        for ($i = 0; $i < count($products); $i++){
                            echo getProductCard($products[$i]);

                        }

                    ?>

                </div>
            </div>
        </div>
        <!-- МОДАЛЬНОЕ ОКНО -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                            ¿Qué quieres hacer después?
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body ">
                        <div class="container-fluid ">
                            <div class="row modal-content-new">
                                <div class="col-md-6 ms-auto">
                                    <div class="center">
                                        <img src="../image/icon-food.png" class="icon-size" alt="Меню">
                                    </div>
                                    <div class="center">
                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">
                                            Ver menú
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-6 ms-auto">
                                    <div class="center">
                                        <img src="../image/icon-delivery.png" class="icon-size" alt="Иконка доставки">
                                    </div>
                                    <a href="./platos.html" style="text-decoration: none">
                                        <div class="center">
                                            <button type="button" class="btn btn-outline-success">
                                                Añadir al carrito
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <footer>
        <div class="footer">
            <div class="font-contacto">
                debería haber estado footer aquí, pero no lo hice
            </div>
        </div>
    </footer>
</body>

</html>