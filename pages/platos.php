<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pedrilos - Menu</title>
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
        <div class="container-photo-main background-image-platos" style="z-index: 2;">
            <div class="text-overlay text-center">
                <h3>el carrito aún no funciona!</h3>
                <h4>Ya estamos trabajando en esto.</h4>
                <h4>De momento puedes mirar nuestras fotos.</h4>
                <div class="buttom-tienda">
                    <a href="./tienda.php" class="input-tienda">TIENDA</a>
                </div>
            </div>
        </div>
    </main>
   
  <!-- ФУТЕР -->
  <?php include '../src/footer.php'; ?>
  
</body>

</html>