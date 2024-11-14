<!DOCTYPE html>
<html lang="en">

<head>
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
    
        <!-- ГЛАВНОЕ МЕНЮ -->
        <?php include '../src/menu_secondary.php'; ?>
    
<main>

<!-- Скрипт валидации -->
<script>
    function validateForm() {
        let nombre = document.getElementById("nombre").value;
        let telefono = document.getElementById("num").value;
        let email = document.getElementById("mail").value;
        let mensaje = document.getElementById("texto").value;
        let pais = document.getElementById("pais").value;
        let fecha = document.getElementById("fecha").value;
        let pregunta_1 = document.getElementById("pregunta_1");
        let pregunta_2 = document.getElementById("pregunta_2");
        let pregunta_3 = document.getElementById("pregunta_3");
        let si = document.getElementById("si");
        let no = document.getElementById("no");

        // Verificar si los campos están vacíos
        if (nombre.trim() === "" || telefono.trim() === "" || email.trim() === "" || mensaje.trim() === "") {
            alert("Por favor, complete todos los campos.");
            return false;
        }

        // Validación del número de teléfono
        let phonePattern = /^\+?\d{1,3}\s?\d{3}\s?\d{2}\s?\d{2}\s?\d{2}$/;
        if (!phonePattern.test(telefono)) {
            alert("Por favor, ingrese un número de teléfono válido en el formato: +XX XXX XX XX XX");
            return false;
        }

        // Validación del correo electrónico
        let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert("Por favor, ingrese un correo electrónico válido.");
            return false;
        }

        // Validación de "¿Cuál es tu pregunta?"
        if (!pregunta_1.checked && !pregunta_2.checked && !pregunta_3.checked) {
            alert("Por favor seleccione al menos una opción.");
            return false;
        }

        // Validación de "¿Tiene una pregunta urgente?"
        if (!si.checked && !no.checked) {
            alert("Por favor seleccione al menos una opción.");
            return false;
        }

        // Verificar que se haya seleccionado un país
        if (pais === "") {
            alert("Por favor, seleccione un país.");
            return false;
        }

        // Verificar que se haya seleccionado una fecha
        if (fecha === "") {
            alert("Por favor, seleccione una fecha de entrega.");
            return false;
        }

        return true; // Si todas las verificaciones son correctas
    }
</script>

    <div class="container-photo-no-main background-image-contacto paralax">
        <div class="text-overlay text-center">
            <h1 class="anima">
                Contacto
                <span> &#160;</span>
            </h1>
        </div>
    </div>
    <div class="contener-pajina">
        <div class="contener-contacto-collums" id="foto">
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
                ¡No dudes en llamarnos, enviarnos un correo electrónico o visitarnos en persona! Estamos
                ansiosos
                por
                escucharte y atender todas tus preguntas, sugerencias o comentarios. ¡Gracias por elegirnos!
            </div>
            <div class="font-contacto">
                ¿Quieres compartir tus opiniones, hacer preguntas o simplemente saludar? ¡Completa el formulario
                de
                contacto y nos pondremos en contacto contigo en breve! ¡Tu opinión es importante para nosotros!
            </div>
        </div>
        <div class="contener-contacto-collums" id="text">
            <form action="#modal_contacto" method="get" onsubmit="return validateForm()">
                <div class="form_padding">
                    <label for="nombre"> Nombre:<span class="required">*</span></label>
                    <input id="nombre" type="text" name="nombre">
                </div>
                <div class="form_padding">
                    <label for="num">Numeros telefono:<span class="required">*</span></label>
                    <input id="num" type="text" name="numeros" placeholder="+XX XXX XX XXX">
                </div>
                <div class="form_padding">
                    <label for="mail">E-mail<span class="required">*</span></label>
                    <input id="mail" type="mail" name="mail">
                </div>
                <div class="form_padding">
                    <label for="texto">Messaje<span class="required">*</span></label>
                    <textarea id="texto" name="texto" rows="7">
                                Contenido...
                        </textarea>
                </div>
                <fieldset>
                    <legend>¿Cuál es tu pregunta?<span class="required">*</span></legend>
                    <div>
                        <input id="pregunta_1" name="pregunta_1" value="Contacto pregunta 1" type="checkbox">
                        <label for="pregunta_1">
                            Pregunta 1
                        </label>
                    </div>
                    <div>
                        <input id="pregunta_2" name="pregunta_2" value="Contacto pregunta 2" type="checkbox">
                        <label for="pregunta_2">
                            Pregunta 2
                        </label>
                    </div>
                    <div>
                        <input id="pregunta_3" name="pregunta_3" value="Contacto pregunta 3" type="checkbox">
                        <label for="pregunta_3">
                            Pregunta 3
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>¿Tiene una pregunta urgente?<span class="required">*</span></legend>
                    <div>
                        <input id="si" type="radio" name="contacto_pregunta_urgente" value="si">
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input id="no" type="radio" name="contacto_pregunta_urgente" value="no">
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
                            <option value="Argentina">Argentina</option>
                            <option value="Rusia">Rusia</option>
                            <option value="España">España</option>
                            <option value="Bababaland">Bababaland</option>
                        </select>
                    </div>
                </fieldset>
                <div class="form_padding">
                    <div>
                        <label for="fecha">Fecha de entrega<span class="required">*</span></label>
                        <input id="fecha" type="date" name="fecha">
                    </div>
                    <div class="buttom-submit">
                        <input type="submit" value="SUBMIT"/>
                    </div>
                </div>
                <!-- Agregamos explicación sobre los campos obligatorios -->
                <p><span class="required">*</span> Campos obligatorios.</p>
            </form>
        </div>
        
    </div>
    <!-- МОДАЛЬНОЕ ОКНО -->
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
                                <a href="gracias.html" style="text-decoration: none">
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

  <!-- ФУТЕР -->
  <?php include '../src/footer.php'; ?>

</body>

</html>