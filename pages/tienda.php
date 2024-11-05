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

    <!-- ГЛАВНОЕ МЕНЮ -->
    <?php include '../src/menu_secondary.php'; ?>
    
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
                    // Определяем количество продуктов на одной странице
                    $productsPerPage = 10;
                    // Считаем общее количество страниц
                    $totalProducts = count($products);
                    $totalPages = ceil($totalProducts / $productsPerPage);
                    // Получаем текущую страницу из параметра "page" в URL, если он не задан, устанавливаем 1
                    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    // Убедимся, что текущая страница находится в допустимых пределах
                    $currentPage = max(1, min($totalPages, $currentPage));
                    // Рассчитываем начальный индекс для продуктов на текущей странице
                    $startIndex = ($currentPage - 1) * $productsPerPage;
                    // Получаем нужный подмассив продуктов для текущей страницы
                    $productsToShow = array_slice($products, $startIndex, $productsPerPage);
                    // Выводим продукты для текущей страницы
                    for ($i = 0; $i < count($productsToShow); $i++) {
                        echo getProductCard($productsToShow[$i]);
                    }
                    ?>
                </div>
                <div>
                    <?php
                        // Подключаем пагинацию
                        include '../src/pagination.php';
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
                                    <a href="./platos.php" style="text-decoration: none">
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
      
  <!-- ФУТЕР -->
  <?php include '../src/footer.php'; ?>
  
</body>

</html>