<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Favicon Code -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
    <div class="container-fluid bg-image">
        <!-- Nav bar -->
        <?php include "./common-header.php" ?>
        <!-- Main title -->
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-8">
                <div class="row" style="margin:60px 0px">
                    <div class="col-sm-12 col-md-6 text-light">
                        <h1 class="display-3 animate__animated animate__fadeInUp" style="line-height: 0.9;">Start</h1>
                        <h1 class="display-3 animate__animated animate__fadeInUp" style="line-height: 0.9;">trading</h1>
                        <h1 class="display-3 animate__animated animate__fadeInUp"
                            style="line-height: 0.9; margin-bottom:10px;">Binance</h1>
                        <p class="text-light" style="margin-bottom:30px"> Sistemas automatico<br> de Ganancias</p>
                        <a class="btn btn-info bg-main-color" style="padding:8px 30px; margin-bottom:70px"
                            target="_blank"
                            href="https://raqsy.com/s/<?php if(isset($user_royal_link)){echo $user_royal_link; } ?>">Registrate</a>

                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="d-flex justify-content-center" style="margin-bottom: 30px;">
                            <img src="./images/bitcoin.png" alt="image of bitcoin"
                                style="width:70px; margin-right:10px">
                            <img src="./images/etherium.png" alt="image of etherium"
                                style="width:70px; margin-right:10px">
                            <img src="./images/xrp.png" alt="image of xrp" style="width:70px;">
                        </div>
                        <p class="text-light text-center" style="font-size:20px;"> Desde la comodidad del hogar y sin
                            toma de decisiones
                            apresuradas, estarás participando en el comercio del trading con todas las cryto-monedas mas
                            importantes.
                            Podrás tener control de todas tus inversiones y monitorearlas las 24hs, los siete dias de la
                            semana. Comenzá ahora a disfrutar de la tecnologia y sin necesidad de conocimiento sobre el
                            mercado del trading.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- What is royalQ -->
    <div class="container-fluid bg-first-color">
        <div class="row justify-content-center" style="padding:40px 0px">
            <div class="col-sm-12 col-lg-8">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h4 class="bg-second-color">Que es Royal Q</h4>
                        <h1 class="text-light">Robot automatico</h1>
                        <h4 class="text-light" style="margin-bottom:30px">Un robot que trabaja con multiples estrategias
                            con la mas avanzada tecnologia.</h4>
                        <p class="text-light">Royal q ofrece un robot que toma desiciones por usted de acuerdo a un
                            estilo de inversion y preferencia de estrategia. Solo
                            con hacer un click, estará operando las 24 horas y tomando las mejores decisiones del
                            mercado ajustándose a los parámetros prefijados.
                        </p>
                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">Los usuario solo deben activar el robot.
                            </p>
                        </div>
                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">Elegir el tipo de inversion que desean utilizar
                            </p>
                        </div>
                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">El robot inteligente utiliza la mejor estrategia de acuerdo a la
                                situacion del mercado.
                            </p>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img class="img-fluid" style="margin-top:50px" src="./images/app-group.png"
                            alt="imagen de la app">
                    </div>
                </div>
                <div class="row" style="margin-top:40px">
                    <div class="col-sm-12 col-md-3"><a
                            href="https://raqsy.com/s/<?php if(isset($user_royal_link)){echo $user_royal_link; } ?>"
                            class="btn btn-info btn-block bg-main-color" target="_blank"
                            style="line-height: 1.5; margin-right:10px; margin-bottom:20px;">Registrate en RoyalQ</a>
                    </div>
                    <div class="col-sm-12 col-md-3"><a
                            href="https://accounts.binance.me/es/register?ref=<?php if(isset($user_binance_link)){echo $user_binance_link; } ?>"
                            class="btn btn-info btn-block bg-main-color" target="_blank"
                            style="line-height: 1.5;margin-right:10px; margin-bottom:20px">Registrate en Binance</a>
                    </div>
                    <div class="col-sm-12 col-md-3"><a data-toggle="modal" data-target="#contact-modal"
                            class="text-light btn btn-info btn-block bg-main-color" style="line-height: 1.5;">Contacta
                            un asesor</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Characteristics -->
    <div class="container-fluid bg-middle-color">
        <div class="row justify-content-center" style="padding-top:40px">
            <div class="col-sm-12 col-lg-8">
                <h4 class="bg-second-color text-center">Características</h4>
                <h1 class="text-light text-center">¿No sabes nada de trading pero quieres invertir?</h1>
                <h4 class="text-light text-center" style="margin-bottom:30px">Tres razones para elegir<br>Royal Q</h4>
                <div class="row" style="margin:70px 0px">
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="./images/time.png" alt="Imagen Icono de tiempo" class="img-fluid"
                                style="width:70px">
                        </div>
                        <div style="margin-bottom:50px;">
                            <h5 class="text-light text-center">Ahorra tiempo<br>y recursos</h5>
                            <p class="text-center text-light">La verdad es
                                que se sabe que las criptomonedas son extremadamente volátiles y la mayoría de las veces
                                los precios fluctúan drásticamente incluso en minutos. Por lo tanto, en muchos casos,
                                los comerciantes no pueden reaccionar con la suficiente rapidez a los cambios en el
                                precio de mercado para lograr su objetivo comercial.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="./images/inversion.png" alt="Imagen Icono de inversion" class="img-fluid"
                                style="width:70px">
                        </div>
                        <div style="margin-bottom:50px;">
                            <h5 class="text-light text-center">Inversión<br>sin emociones</h5>
                            <p class="text-center text-light">El robot RoyalQ está diseñado para eliminar el elemento
                                psicológico del comercio, que puede ser perjudicial para invertir o comerciar con
                                criptomonedas.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="./images/ganancia.png" alt="Imagen Icono de ganancia" class="img-fluid"
                                style="width:70px">
                        </div>
                        <div>
                            <h5 class="text-light text-center">Royal Q<br>no retiene tu inversion</h5>
                            <p class="text-center text-light">RoyalQ no retiene su capital, pero se financia mediante
                                una suscripción anual de $ 100. Sus fondos permanecen en su intercambio (Binance o Huobi)
                                que está conectado a través de API.
                                RoyalQ no tiene acceso a sus fondos, que permanecen seguros en el intercambio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How to start -->
    <div class="container-fluid bg-third-color" id="howToStart">
        <div class="row justify-content-center" style="padding-bottom:40px 0px">
            <div class="col-sm-12 col-lg-8">
                <h4 class="bg-second-color text-center">Guía rápida</h4>
                <h1 class="text-light text-center">¿Cómo empiezo?</h1>
                <h4 class="text-light text-center" style="margin-bottom:30px">Sólo son tres pasos.</h4>
                <p class="text-center text-light">Recuerda que tienes a disposición todos los tutoriales que
                    te guiaran paso a paso.<br>
                    También puedes enviarnos un mensaje y un asesor se pondrá
                    en contacto a la brevedad.
                </p>
                <div class="row" style="margin:70px 0px">
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="./images/royal.png" alt="Imagen Icono de Royal con reflexion" class="img-fluid"
                                style="width:70px">
                        </div>
                        <div style="margin-bottom:50px;">
                            <h5 class="text-light text-center">Creá una<br>cuenta en Royal Q</h5>
                            <p class="text-center text-light">Entrá en el link
                                y segui los pasos. No olvides guardar tus contraseñas.
                                La cuenta no tiene ningún costo.

                            </p>
                            <a class="btn btn-info bg-main-color btn-block"
                                href="https://raqsy.com/s/<?php if(isset($user_royal_link)){echo $user_royal_link; } ?>">PASO
                                1 - Registrate</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <!-- <h5 class="text-light text-center">PASO 1</h5> -->
                        <div class="d-flex justify-content-center">
                            <img src="./images/binance.png" alt="Imagen Icono de binance" class="img-fluid"
                                style="width:135px">
                        </div>
                        <div style="margin-bottom:50px;">
                            <h5 class="text-light text-center">Crea una<br>cuenta en Binance</h5>
                            <p class="text-center text-light">Entrá en el link
                                y obtené un 10 porciento de descuento
                                en tus operaciones. Sin costos adicionales.
                            </p>
                            <a class="btn btn-info bg-main-color btn-block" target="_blank"
                                href="https://accounts.binance.me/es/register?ref=<?php if(isset($user_binance_link)){echo $user_binance_link; } ?>">PASO
                                2 - Registrate</a>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="./images/vinculo.png" alt="Imagen Icono de vinculo" class="img-fluid"
                                style="width:70px">
                        </div>
                        <div>
                            <h5 class="text-light text-center">Vinculá<br>tus cuentas</h5>
                            <p class="text-center text-light">Vinculá tu cuenta de Binance con el robot Royal Q.
                                Entrá en el link y seguí los pasos del tutorial.

                            </p>
                            <a class="btn btn-info bg-main-color btn-block" href="">PASO 3 - Mirá el tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tutoriales -->
    <div class="container-fluid bg-third-color" id="tutoriales">
        <div class="row justify-content-center" style="padding-bottom:40px">
            <div class="col-sm-12 col-lg-8">
                <h4 class="bg-second-color text-center">Tutoriales</h4>
                <h1 class="text-light text-center">Nuestros Tutoriales</h1>
                <h4 class="text-light text-center" style="margin-bottom:30px">Todo sobre Royal Q, Binance y el Plan de
                    Compensación.</h4>
                <p class="text-center text-light">Recuerda que tienes a disposición todos los tutoriales que
                    te guiaran paso a paso.<br>
                    También puedes enviarnos un mensaje y un asesor se pondrá
                    en contacto a la brevedad.
                </p>
                <h5 class="bg-second-color">Documentos</h5>
                <div class="row" style="margin:30px 0px">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="accordion" id="accordionExample">
                            <div class="card bg-transparent"
                                style="margin-bottom:5px; border-radius:5px; border:1px solid rgb(52, 171, 202)">
                                <div class="card-header" id="headingOne" style="border-radius:5px;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block  text-left text-light collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex justify-content-between">
                                                <img src="./images/pdf.png" alt="Imagen de pdf"
                                                    style="width:50px; height:50px;">
                                                <p class="text-light" style="margin:0px 10px">Como registrarse en Royal
                                                    Q</p>
                                                <img src="./images/download.png" alt="imagen de descarga"
                                                    style="width:30px;height:30px;">
                                            </div>

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <h5 class="bg-second-color">Documento PDF</h5>
                                        <h2 class="text-light">Como registrarse en Royal Q</h2>
                                        <p class="text-light" style="font-style: italic;">Por Jero Crypto</p>
                                        <p class="text-light">es una plataforma de intercambio de criptomonedas
                                            que actualmente es la
                                            más grande del mundo
                                            en términos de volumen de comercio diario de criptomonedas.
                                            Es un medio por el cual se puede guardar.
                                        </p>
                                        <div class="d-flex">
                                            <img src="./images/tilde.png" alt="imagen de check"
                                                style="width:30px; height:30px; margin-right:5px;">
                                            <p class="text-light">Este Documento tiene derechos de autor.
                                            </p>
                                        </div>
                                        <a class="btn btn-info text-light bg-main-color btn-block">Descargar PDF</a>
                                        <button class="btn text-light" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                                            <i class="fas fa-window-close text-light"></i> Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="accordion" id="accordionExample">
                            <div class="card bg-transparent"
                                style="margin-bottom:5px; border-radius:5px; border:1px solid rgb(52, 171, 202)">
                                <div class="card-header" id="headingOne" style="border-radius:5px;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block  text-left text-light collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <div class="d-flex justify-content-between">
                                                <img src="./images/pdf.png" alt="Imagen de pdf" style="width:50px">
                                                <p class="text-light" style="margin:0px 10px">Como activar Royal Q</p>
                                                <img src="./images/download.png" alt="imagen de descarga"
                                                    style="width:30px;height:30px;">
                                            </div>

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <h5 class="bg-second-color">Documento PDF</h5>
                                        <h2 class="text-light">Como activar Royal Q</h2>
                                        <p class="text-light" style="font-style: italic;">Por Jero Crypto</p>
                                        <p class="text-light">es una plataforma de intercambio de criptomonedas
                                            que actualmente es la
                                            más grande del mundo
                                            en términos de volumen de comercio diario de criptomonedas.
                                            Es un medio por el cual se puede guardar.
                                        </p>
                                        <div class="d-flex">
                                            <img src="./images/tilde.png" alt="imagen de check"
                                                style="width:30px; height:30px; margin-right:5px;">
                                            <p class="text-light">Este Documento tiene derechos de autor.
                                            </p>
                                        </div>
                                        <a class="btn btn-info text-light bg-main-color btn-block">Descargar PDF</a>
                                        <button class="btn text-light" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                                            <i class="fas fa-window-close text-light"></i> Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="accordion" id="accordionExample">
                            <div class="card bg-transparent"
                                style="margin-bottom:5px; border-radius:5px; border:1px solid rgb(52, 171, 202)">
                                <div class="card-header" id="headingOne" style="border-radius:5px;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block  text-left text-light collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <div class="d-flex justify-content-between">
                                                <img src="./images/pdf.png" alt="Imagen de pdf" style="width:50px">
                                                <p class="text-light" style="margin:0px 10px">Como vincular la API Key
                                                </p>
                                                <img src="./images/download.png" alt="imagen de descarga"
                                                    style="width:30px;height:30px;">
                                            </div>

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <h5 class="bg-second-color">Documento PDF</h5>
                                        <h2 class="text-light">Como vincular la API Key</h2>
                                        <p class="text-light" style="font-style: italic;">Por Jero Crypto</p>
                                        <p class="text-light">es una plataforma de intercambio de criptomonedas
                                            que actualmente es la
                                            más grande del mundo
                                            en términos de volumen de comercio diario de criptomonedas.
                                            Es un medio por el cual se puede guardar.
                                        </p>
                                        <div class="d-flex">
                                            <img src="./images/tilde.png" alt="imagen de check"
                                                style="width:30px; height:30px; margin-right:5px;">
                                            <p class="text-light">Este Documento tiene derechos de autor.
                                            </p>
                                        </div>
                                        <a class="btn btn-info text-light bg-main-color btn-block">Descargar PDF</a>
                                        <button class="btn text-light" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                                            <i class="fas fa-window-close text-light"></i> Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="accordion" id="accordionExample">
                            <div class="card bg-transparent"
                                style="margin-bottom:5px; border-radius:5px; border:1px solid rgb(52, 171, 202)">
                                <div class="card-header" id="headingOne" style="border-radius:5px;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block  text-left text-light collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            <div class="d-flex justify-content-between">
                                                <img src="./images/pdf.png" alt="Imagen de pdf"
                                                    style="width:50px; height:50px;">
                                                <p class="text-light" style="margin:0px 10px">Como activar
                                                    Professional Edition
                                                </p>
                                                <img src="./images/download.png" alt="imagen de descarga"
                                                    style="width:30px;height:30px;">
                                            </div>

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <h5 class="bg-second-color">Documento PDF</h5>
                                        <h2 class="text-light">Como activar
                                            Professional Edition
                                        </h2>
                                        <p class="text-light" style="font-style: italic;">Por Jero Crypto</p>
                                        <p class="text-light">Este tutorial es para activar la opción de Professional
                                            Edition en RoyalQ.
                                            Las criptomonedas Generales salen en Quantitative desde un principio, pero
                                            para acceder a las criptomonedas Profesionales, tienes que activar el
                                            “Professional Edition”
                                        </p>
                                        <div class="d-flex">
                                            <img src="./images/tilde.png" alt="imagen de check"
                                                style="width:30px; height:30px; margin-right:5px;">
                                            <p class="text-light">Este Documento tiene derechos de autor.
                                            </p>
                                        </div>
                                        <a class="btn btn-info text-light bg-main-color btn-block">Descargar PDF</a>
                                        <button class="btn text-light" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                                            <i class="fas fa-window-close text-light"></i> Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="accordion" id="accordionExample">
                            <div class="card bg-transparent"
                                style="margin-bottom:5px; border-radius:5px; border:1px solid rgb(52, 171, 202)">
                                <div class="card-header" id="headingOne" style="border-radius:5px;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block  text-left text-light collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                                            aria-controls="collapseFive">
                                            <div class="d-flex justify-content-between">
                                                <img src="./images/pdf.png" alt="Imagen de pdf"
                                                    style="width:50px; height:50px;">
                                                <p class="text-light" style="margin:0px 10px">Pestaña Home de
                                                    Royal Q
                                                </p>
                                                <img src="./images/download.png" alt="imagen de descarga"
                                                    style="width:30px;height:30px;">
                                            </div>

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <h5 class="bg-second-color">Documento PDF</h5>
                                        <h2 class="text-light">Pestaña Home de Royal Q
                                        </h2>
                                        <p class="text-light" style="font-style: italic;">Por Jero Crypto</p>
                                        <p class="text-light">En este tutorial vamos a desglosar la pestaña HOME.
                                            Nos vamos a centrar en los ochos iconos
                                            principales que están situados en la parte
                                            central de la pantalla, más cuatro iconos más
                                            que están en el apartado de “More”
                                        </p>
                                        <div class="d-flex">
                                            <img src="./images/tilde.png" alt="imagen de check"
                                                style="width:30px; height:30px; margin-right:5px;">
                                            <p class="text-light">Este Documento tiene derechos de autor.
                                            </p>
                                        </div>
                                        <a class="btn btn-info text-light bg-main-color btn-block">Descargar PDF</a>
                                        <button class="btn text-light" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseExample" style="margin: 10px auto; width: 50%;
                                                                                    display: block;">
                                            <i class="fas fa-window-close text-light"></i> Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="bg-second-color">Videos</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <!-- 16:9 aspect ratio -->
                        <p class="caption font-body text-light">Como registrarse en Royal Q</p>
                        <div class="embed-responsive embed-responsive-16by9"
                            style="margin-bottom:20px; box-shadow: 10px 9px 20px #0000008c;">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/T0BzhC42ALY"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <!-- 16:9 aspect ratio -->
                        <p class="caption font-body text-light">Activar Professional Edition en Royal Q</p>
                        <div class="embed-responsive embed-responsive-16by9"
                            style="margin-bottom:20px; box-shadow: 10px 9px 20px #0000008c;">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/oiaXDtOlJI0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Invitacion a actuar -->
    <div class="container-fluid bg-last-color">
        <div class="row justify-content-center" style="padding:70px 0px;">
            <div class="col-sm-12 col-lg-8">
                <hr class="bg-light" style="margin-bottom:30px;">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="text-light">¿Que estás esperando para unirte?</h1>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://raqsy.com/s/<?php if(isset($user_royal_link)){echo $user_royal_link; } ?>"
                            target="_blank" class="btn btn-info bg-main-color">Unete</a>
                        <a class="text-light btn btn-info bg-main-color" data-toggle="modal"
                            data-target="#contact-modal">Contacta un asesor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Servicios y Contacto -->
    <div class="container-fluid bg-fourth-color">
        <div class="row justify-content-center" style="padding:70px 0px;">
            <div class="col-sm-12 col-lg-8">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4" style="margin-bottom:30px;">
                        <h5 class="bg-second-color">Servicios</h5>
                        <hr
                            style="background-color:rgb(52, 171, 202);width:150px;margin-right:auto; margin-left:0px;margin-bottom:35px;">

                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">Las mejores estrategias a través de Grupos de telegram VIP
                            </p>
                        </div>
                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">Asistencia técnica.
                            </p>
                        </div>
                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">Capacitación.
                            </p>
                        </div>
                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">Tutoriale en línea.
                            </p>
                        </div>
                        <div class="d-flex">
                            <img src="./images/tilde.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">Seguridad.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="margin-bottom:30px;">
                        <h5 class="bg-second-color">Contacto</h5>
                        <hr
                            style="background-color:rgb(52, 171, 202);width:150px;margin-right:auto; margin-left:0px;margin-bottom:35px;">

                        <div class="d-flex">
                            <img src="./images/icono-españa.png" alt="imagen de check"
                                style="width:30px; height:30px; margin-right:5px;">
                            <p class="text-light">España, ES.
                            </p>
                        </div>
                        <p class="text-light"><i class="fas fa-phone-square-alt text-light"
                                style="font-size: 30px;"></i>
                            Telefono: 658995720</p>
                        <p class="text-light" style="margin-top:30px;">Redes Sociales</p>
                        <div class="d-flex">
                            <a href="https://api.whatsapp.com/send?phone=<?php if(isset($user_phone)){echo $user_phone;} ?>"
                                target="_blank"><img src="./images/whatsapp.png" alt="Icono de whatsapp"
                                    style="width: 30px;margin-right:10px;"></a>
                            <a href="<?php if(isset($user_telegram_link)){echo $user_telegram_link;} ?>"
                                target="_blank"><img src="./images/telegram.png" alt="Icono de Telegram"
                                    style="width: 30px;margin-right:10px;"></a>
                            <a href="<?php if(isset($user_facebook_link)){echo $user_facebook_link;} ?>"
                                target="_blank"><img src="./images/facebook.png" alt="Icono de facebook"
                                    style="width: 30px;margin-right:10px;"></a>
                            <a href="<?php if(isset($user_instagram_link)){echo $user_instagram_link;} ?>"
                                target="_blank"><img src="./images/instagram.png" alt="Icono de Instagram"
                                    style="width: 30px;"></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <h5 class="bg-second-color">Envianos un mensaje</h5>
                        <hr
                            style="background-color:rgb(52, 171, 202);width:150px;margin-right:auto; margin-left:0px;margin-bottom:35px;">
                        <div class="text-light">
                            <form action="./index.php" method="post">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nombre :</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Juan Perez" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email :</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="ejemplo@mail.com.ar" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-form-label">Telefono :</label>
                                    <input type="text" name="phone" class="form-control" id="email"
                                        placeholder="Telefono" required>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="col-form-label">Mensaje :</label>
                                    <textarea class="form-control" name="message" id="message"
                                        placeholder="Ingrese aqui su consulta" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                    <!-- Add the action name - value pair -->
                                    <input type="hidden" name="action" value="contact">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Floating-menu  -->
    <?php include "./view-floating-menu.php" ?>
    <!--  Footer  -->
    <?php include "./common-footer.php" ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>