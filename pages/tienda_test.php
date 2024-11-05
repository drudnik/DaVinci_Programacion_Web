<?php
// Функция для подключения к базе данных
function conectarDB()
{
    $host = 'localhost:8889';
    $user = 'root';
    $port = '8889';
    $password = 'root';
    $dbname = 'sys';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return new mysqli($host, $user, $password, $dbname);
}

// Подключение к базе данных
$conn = conectarDB();

// Запрос к базе данных для получения данных о продуктах
$sql = "SELECT dish_name, image_url FROM menu";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
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
            <div class="catalog-line">
                <?php
                // Проверяем, есть ли результаты из базы данных
                if ($result->num_rows > 0) {
                    // Выводим данные для каждого продукта
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="catalog-element">
                            <a href="#staticBackdrop" class="link-underline link-underline-opacity-0">
                                <div class="text-tienda" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <img src="' . $row['image_url'] . '" alt="' . $row['dish_name'] . '" class="tienda-image">
                                    ' . $row['dish_name'] . '
                                </div>
                            </a>
                        </div>';
                    }
                } else {
                    echo '<p>No se encontraron productos.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        ¿Qué quieres hacer después?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
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

<!-- Подключаем необходимые скрипты, например, Bootstrap JS -->
</body>
</html>

<?php
// Закрытие подключения к базе данных
$conn->close();
?>
