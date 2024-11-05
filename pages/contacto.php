<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pedrilos - Contacto</title>
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
                <form action="#modal_contacto" method="get">
                    <div class="form_padding">
                        <label for="nombre"> Nombre:</label>
                        <input id="nombre" type="text" name="nombre">
                    </div>
                    <div class="form_padding">
                        <label for="num">Numeros telefono:</label>
                        <input id="num" type="text" name="numeros" placeholder="+XX XXX XX XXX">
                    </div>
                    <div class="form_padding">
                        <label for="mail">E-mail</label>
                        <input id="mail" type="mail" name="mail">
                    </div>
                    <div class="form_padding">
                        <label for="texto">Messaje</label>
                        <textarea if="texto" name="texto" rows="7">
                                Contenido...
                        </textarea>
                    </div>
                    <fieldset>
                        <legend>¿Cuál es tu pregunta?</legend>
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
                            <input id="pregunta_3" name="pregunta_3" value="Contacto pregunta 2" type="checkbox">
                            <label for="pregunta_3">
                                Pregunta 3
                            </label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>¿Tiene una pregunta urgente?</legend>
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
                            Elige tu país
                        </legend>
                        <div>
                            <select id="pais" name="pais">
                                <option value="Argentina">Argentina</option>
                                <option value="Rusia">Rusia</option>
                                <option value="Espania">Espania</option>
                                <option value="Bababaland">Bababaland</option>
                            </select>
                        </div>
                    </fieldset>
                    <div class="form_padding">
                        <div>
                            <label for="fecha">Fecha de entrega</label>
                            <input for="fecha" type="date" name="fecha"></label>
                        </div>
                        <div class="buttom-submit">
                            <input type="submit" value="SUBMIT" />
                        </div>
                    </div>
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
  
  <!-- ФУТЕР -->
  <?php include '../src/footer.php'; ?>
  
</body>

</html>