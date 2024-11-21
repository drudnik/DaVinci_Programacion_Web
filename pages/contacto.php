<?php
// Initialize variables with form data or empty strings
$nombre = $_POST['nombre'] ?? '';
$telefono = $_POST['numeros'] ?? '';
$email = $_POST['mail'] ?? '';
$mensaje = $_POST['texto'] ?? '';
$pais = $_POST['pais'] ?? '';
$fecha = $_POST['fecha'] ?? '';
$pregunta_1 = isset($_POST['pregunta_1']);
$pregunta_2 = isset($_POST['pregunta_2']);
$pregunta_3 = isset($_POST['pregunta_3']);
$pregunta_urgente = $_POST['contacto_pregunta_urgente'] ?? '';

$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate name
    if (empty(trim($nombre))) {
        $errores[] = 'Por favor, ingrese su nombre.';
    }

    // Validate phone number
    if (empty(trim($telefono))) {
        $errores[] = 'Por favor, ingrese su número de teléfono.';
    } else {
        $phonePattern = '/^\+?\d{1,3}\s?\d{3}\s?\d{2}\s?\d{2}\s?\d{2}$/';
        if (!preg_match($phonePattern, $telefono)) {
            $errores[] = 'Por favor, ingrese un número de teléfono válido en el formato: +XX XXX XX XX XX.';
        }
    }

    // Validate email
    if (empty(trim($email))) {
        $errores[] = 'Por favor, ingrese su correo electrónico.';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'Por favor, ingrese un correo electrónico válido.';
    }

    // Validate message
    if (empty(trim($mensaje))) {
        $errores[] = 'Por favor, ingrese un mensaje.';
    }

    // Validate "¿Cuál es tu pregunta?"
    if (!$pregunta_1 && !$pregunta_2 && !$pregunta_3) {
        $errores[] = 'Por favor, seleccione al menos una opción en "¿Cuál es tu pregunta?".';
    }

    // Validate "¿Tiene una pregunta urgente?"
    if (empty($pregunta_urgente)) {
        $errores[] = 'Por favor, indique si tiene una pregunta urgente.';
    }

    // Validate country
    if (empty($pais)) {
        $errores[] = 'Por favor, seleccione su país.';
    }

    // Validate date
    if (empty($fecha)) {
        $errores[] = 'Por favor, seleccione una fecha de entrega.';
    }

    // If no errors, process the form
    if (empty($errores)) {
        // Here you can process the data, e.g., save to database or send email

        // Redirect to thank you page
        header('Location: gracias.php');
        exit();
    }
}

// Determine whether to play the animation
$playAnimation = empty($errores) && $_SERVER['REQUEST_METHOD'] !== 'POST';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and CSS links -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pedrilos - Contacto</title>
    <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/font.css"/>
    <link rel="stylesheet" href="../css/image.css"/>
    <link rel="stylesheet" href="../css/form.css"/>
    <link rel="stylesheet" href="../css/main_menu.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<!-- MAIN MENU -->
<?php include '../src/menu_secondary.php'; ?>

<main>

    <div class="container-photo-no-main background-image-contacto paralax">
        <div class="text-overlay text-center">
            <h1 class="<?php echo $playAnimation ? 'anima' : ''; ?>">
                Contacto
                <span> &#160;</span>
            </h1>
        </div>
    </div>
    <div class="contener-pajina">
        <div class="contener-contacto-collums" id="foto" <?php if (!$playAnimation) echo 'style="animation: none;"'; ?>>
            <div class="h2-no-animacion">
                ¡Hola de nuevo!
            </div>
            <div class="font-contacto">
                ¿Listo para ponerte en contacto con nosotros? ¡Estamos aquí para ayudarte!
            </div>
            <div class="font-contacto">
                <div class="font-contacto-title">
                    Dirección:
                </div>
                <div>
                    Calle Principal, número 123
                    Ciudad, País
                </div>
            </div>
            <div class="font-contacto">
                <div class="font-contacto-title">
                    Teléfono:
                </div>
                <div>
                    (+XX) XXX-XXX-XXXX
                </div>
            </div>
            <div class="font-contacto">
                <div class="font-contacto-title">
                    Correo Electrónico:
                </div>
                <div>
                    info@nombredeempresa.com
                </div>
            </div>
            <div class="font-contacto">
                ¡No dudes en llamarnos, enviarnos un correo electrónico o visitarnos en persona! Estamos ansiosos por
                escucharte y atender todas tus preguntas, sugerencias o comentarios. ¡Gracias por elegirnos!
            </div>
            <div class="font-contacto">
                ¿Quieres compartir tus opiniones, hacer preguntas o simplemente saludar? ¡Completa el formulario de
                contacto y nos pondremos en contacto contigo en breve! ¡Tu opinión es importante para nosotros!
            </div>
        </div>
        <div class="contener-contacto-collums" id="text" <?php if (!$playAnimation) echo 'style="animation: none;"'; ?>>
            <!-- Display errors -->
            <?php if (!empty($errores)): ?>
                <div class="error-messages">
                    <ul>
                        <?php foreach($errores as $error): ?>
                            <li> <?php echo $error ?> </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="contacto.php" method="post">
                <div class="form_padding">
                    <label for="nombre"> Nombre:<span class="required">*</span></label>
                    <input id="nombre" type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
                </div>
                <div class="form_padding">
                    <label for="num">Número de teléfono:<span class="required">*</span></label>
                    <input id="num" type="text" name="numeros" placeholder="+XX XXX XX XXX" value="<?php echo htmlspecialchars($telefono); ?>">
                </div>
                <div class="form_padding">
                    <label for="mail">E-mail<span class="required">*</span></label>
                    <input id="mail" type="email" name="mail" value="<?php echo htmlspecialchars($email); ?>">
                </div>
                <div class="form_padding">
                    <label for="texto">Mensaje<span class="required">*</span></label>
                    <textarea id="texto" name="texto" rows="7"><?php echo htmlspecialchars($mensaje); ?></textarea>
                </div>

                <fieldset>
                    <legend>¿Cuál es tu pregunta?<span class="required">*</span></legend>
                    <div>
                        <input id="pregunta_1" name="pregunta_1" value="Contacto pregunta 1" type="checkbox" <?php if($pregunta_1) echo 'checked'; ?>>
                        <label for="pregunta_1">
                            Pregunta 1
                        </label>
                    </div>
                    <div>
                        <input id="pregunta_2" name="pregunta_2" value="Contacto pregunta 2" type="checkbox" <?php if($pregunta_2) echo 'checked'; ?>>
                        <label for="pregunta_2">
                            Pregunta 2
                        </label>
                    </div>
                    <div>
                        <input id="pregunta_3" name="pregunta_3" value="Contacto pregunta 3" type="checkbox" <?php if($pregunta_3) echo 'checked'; ?>>
                        <label for="pregunta_3">
                            Pregunta 3
                        </label>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>¿Tiene una pregunta urgente?<span class="required">*</span></legend>
                    <div>
                        <input id="si" type="radio" name="contacto_pregunta_urgente" value="si" <?php if($pregunta_urgente == 'si') echo 'checked'; ?>>
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input id="no" type="radio" name="contacto_pregunta_urgente" value="no" <?php if($pregunta_urgente == 'no') echo 'checked'; ?>>
                        <label for="no">No</label>
                    </div>
                </fieldset>

                <fieldset>
                    <legend for="pais">
                        Elige tu país<span class="required">*</span>
                    </legend>
                    <div>
                        <select id="pais" name="pais">
                            <option value="">Seleccione un país</option>
                            <option value="Argentina" <?php if($pais == 'Argentina') echo 'selected'; ?>>Argentina</option>
                            <option value="Rusia" <?php if($pais == 'Rusia') echo 'selected'; ?>>Rusia</option>
                            <option value="España" <?php if($pais == 'España') echo 'selected'; ?>>España</option>
                            <option value="Bababaland" <?php if($pais == 'Bababaland') echo 'selected'; ?>>Bababaland</option>
                        </select>
                    </div>
                </fieldset>

                <div class="form_padding">
                    <div>
                        <label for="fecha">Fecha de entrega<span class="required">*</span></label>
                        <input id="fecha" type="date" name="fecha" value="<?php echo htmlspecialchars($fecha); ?>">
                    </div>
                    <div class="buttom-submit">
                        <input type="submit" value="SUBMIT"/>
                    </div>
                </div>

                <!-- Explanation about required fields -->
                <p><span class="required">*</span> Campos obligatorios.</p>
            </form>
        </div>

    </div>
    <!-- MODAL WINDOW -->
    <div class="modal fade show" id="modal_contacto" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" style="width: 600px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        ¿Confirmas tus datos?
                    </h1>
                </div>
                <div class="modal-body">
                    <div class="container-fluid ">
                        <div class="row modal-content-new">
                            <div class="col-md-6 ms-auto">
                                <a href="gracias.php" style="text-decoration: none">
                                    <div class="center">
                                        <button type="button" class="btn btn-outline-success"
                                                data-bs-dismiss="modal">
                                            Sí
                                        </button>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 ms-auto">
                                <a href="#" style="text-decoration: none">
                                    <div class="center">
                                        <button type="button" class="btn btn-outline-success">
                                            No
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

<!-- FOOTER -->
<?php include '../src/footer.php'; ?>

</body>

</html>