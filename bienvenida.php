<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
 

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_delabcol</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/pagina.css">
</head>
<body>

    <header>

        <div class="menu container">

            <img class="logo-1" src="assets/images/logo-delabol.png" alt="">
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="assets/images/menu-svgrepo-com.svg" class="menu-icono" alt="">
            </label>
            <nav class="navbar">

                <div class="menu-1">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="catalogo.html">Catalogo</a></li>
                        <li><a href="php/cerrar_sesion.php">Cerrar Sesion</a>
                    </ul>
                </div>

                <img class="logo-2" src="assets/images/logo-delabol.png" alt="">

                <div class="menu-2">
                    <ul>
                        <li><a href="formulario.html">Comprar</a></li>
                    </ul>
                    <div class="socials">
                        <a href="https://www.facebook.com/profile.php?id=100063566972893">
                            <div class="social">
                                <img src="assets/images/facebook-176-svgrepo-com.svg" alt="">
                            </div>
                        </a>
                        <a href="https://x.com/delabcol">
                            <div class="social">
                                <img src="assets/images/twitter-154-svgrepo-com.svg" alt="">
                            </div>
                        </a>
                        <a href="https://www.instagram.com/delabcol/">
                            <div class="social">
                                <img src="assets/images/instagram-svgrepo-com.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="header-content container">

            <div class="swiper mySwiper-1">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Diseño producto</h1>
                                <p>
                                    Contamos con amplia experiencia en el diseño y desarrollo de productos industriales, especialmente manufacturas metalmecánicas e inyección de plásticos. 
                                    Contamos con aliados estratégicos para manufacurar productos en Colombia y China. 
                                    Tambien contamos con aliados en prototipado rápido con precisión de 0,05 mm de espesor de capa.
                                </p>
                                <div class="botones">
                                    <a href="formulario.html" class="btn-1">Comprar</a>
                                    <a href="catalogo.html" class="btn-1">Catalogo</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="assets/images/delabcol_swiss.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Diseño logo</h1>
                                <p>
                                    Desde 2009 nos involucramos en el diseño de logos teniendo la suerte de ser los diseñadores del logo de una de las marcas más recordadas de 2010 a 2012 en Boston, 
                                    como lo es Buy With Me equivalente actual a grupon en Colombia.
                                    Desde ese entonces hemos tenido la fortuna de atender clientes en Canada, Australia, Alemania, Suiza, Bélgica, Reino Unido y Estados Unidos
                                </p>
                                <div class="botones">
                                    <a href="formulario.html" class="btn-1">Comprar</a>
                                    <a href="catalogo.html" class="btn-1">Catalogo</a>
                                </div>
                            </div>
                            <div class="slider-img1">
                                <img src="assets/images/OBE-OSKI.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Diseño grafico</h1>
                                <p>
                                    El diseño de un buen logo solo es el principio en la construcción de una identidad de marca.
                                    Nos encanta materializar desarrollos gráficos que diferencie tu imagen de la competencia logrando recordación y fidelidad.
                                </p>
                                <div class="botones">
                                    <a href="formulario.html" class="btn-1">Comprar</a>
                                    <a href="catalogo.html" class="btn-1">Catalogo</a>
                                </div>
                            </div>
                            <div class="slider-img2">
                                <img src="assets/images/BWM real good file1.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-pagination"></div>
            </div>

        </div>


    </header>


    <main class="products">
        <div class="tabs container">

            <input type="radio" name="tabs" id="tab1" checked="checked" class="tabInput" value="1">
            <label for="tab1">Diseño producto</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper1">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/delabcol_soap2.jpg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Delabcol Soap</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/delabcol_project_home.jpg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Delabcol Earbuds</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/silk.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Delabcol Silk</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/delabcol_crate2.jpg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Delabcol Crate v1</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/delabcol_crate.jpg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Delabcol Crate V2</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <input type="radio" name="tabs" id="tab2" checked="checked" class="tabInput" value="2">
            <label for="tab2">Diseño logo</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper2">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/splitcity.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>SplitCity Logo</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/dancego.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Dance Go Logo</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/paidup.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Paid Up Logo</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/galaxy.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Galaxy Logo</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/huxi.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Huxi Logo</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <input type="radio" name="tabs" id="tab3" checked="checked" class="tabInput" value="3">
            <label for="tab3">Diseño grafico</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper3">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/bwm.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>BWM Design</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/automat.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Automat Design</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/paradigm sports.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>PARADIGMS DESIGN</h4>
                                    <p>Calidad Premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/wobsy.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Wobsy Design</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Nuevo</h4>
                                    <img src="assets/images/georgia lions lighthouse.png" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Georgia Design</h4>
                                    <p>Calidad premium</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </div>
    </main>

    <section class="info container">

        <div class="info-img">
            <img src="assets/images/delabcol_about_home.jpg" alt="">
        </div>

        <div class="info-txt">
            <h2>Trabajamos comprometidos</h2>
            <p>
                Nuestro compromiso es crear impacto positivo a través de diseño responsable, coherente con las necesidades del usuario y acorde a las metas económicas de nuestros clientes.

Nuestras habilidades integran Diseño Industrial, Ingeniería y Diseño Gráfico, de esta manera entregamos a nuestros clientes soluciones que cumplen con los objetivos trazados.
Nos apasiona desarrollar nuevas invenciones y ponerlas en el mercado completando el proceso innovador que toda organización debe aplicar para diferenciarse y ser líder.

Además de trabajar para clientes industriales, tambien contamos con experiencia en diseño aplicado al desarollo sostenible en comunidades emergentes.
            </p>
            <a href="#" class="btn-2">Mas informacion</a>
        </div>

    </section>

    <section class="horario">
        <div class="horario-info container">

            <h2>Horario</h2>
            <div class="horario-txt">
                <div class="txt">
                    <h4>Direccion</h4>
                    <p>
                        Transversal 7 #4A-83 - Soacha, Cundinamarca
                    </p>
                </div>
                <div class="txt">
                    <h4>Horario</h4>
                    <p>
                        Lunes a viernes: 9 am - 8 pm
                    </p>
                    <p>
                        Sabados y domingos: 11 am - 7 pm
                    </p>
                </div>
                <div class="txt">
                    <h4>Telefono</h4>
                    <p>
                        3114536080
                    </p>
                    <p>
                        3225637496
                    </p>
                </div>
                <div class="txt">
                    <h4>Redes Sociales</h4>
                    <div class="socials">
                        <a href="https://www.facebook.com/profile.php?id=100063566972893">
                            <div class="social">
                                <img src="assets/images/facebook-176-svgrepo-com.svg" alt="">
                            </div>
                        </a>
                        <a href="https://x.com/delabcol">
                            <div class="social">
                                <img src="assets/images/twitter-154-svgrepo-com.svg" alt="">
                            </div>
                        </a>
                        <a href="https://www.instagram.com/delabcol/">
                            <div class="social">
                                <img src="assets/images/instagram-svgrepo-com.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63633.654245661215!2d-74.25484313209694!3d4.575446272110858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f757d0cc35403%3A0x9ed118cab97d8e84!2sSoacha%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1715966651627!5m2!1ses!2sco"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <footer class="footer container">

        <img class="logo-3" src="assets/images/icono-delabcol.png" alt="">
        <div class="links">
            <h4>Informacion</h4>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="catalogo.html">Catalogo</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="links">
            <h4>Contactanos</h4>
            <ul>
                <li><a href="formulario.html">delabcol.info@gmail.com</a></li>
                <li><a href="#">+57 311 453 6080</a></li>
                <li><a href="https://www.google.com/maps/place/Conjunto+El+Ma%C3%B1ana/@4.5829019,-74.2311997,17z/data=!3m1!4b1!4m6!3m5!1s0x8e3f757a89929091:0x4bf7f2528dd8de11!8m2!3d4.5829019!4d-74.2286248!16s%2Fg%2F11c59_jfzh?entry=ttu&g_ep=EgoyMDI0MTExMS4wIKXMDSoASAFQAw%3D%3D">Soacha, Colombia</a></li>
                <li><a href="https://www.instagram.com/gabolivarg/">Director General, Gerardo Bolivar</a></li>
            </ul>
        </div>
        <div class="links">
            <h4>Adquiere algun producto</h4>
            <ul>
                <li><a href="formulario.html">Comprar</a></li>
            </ul>
        </div>
        <div class="links">
            <h4>Redes sociales</h4>
            <div class="socials">
                <a href="https://www.facebook.com/profile.php?id=100063566972893">
                    <div class="social">
                        <img src="assets/images/facebook-176-svgrepo-com.svg" alt="">
                    </div>
                </a>
                <a href="https://x.com/delabcol">
                    <div class="social">
                        <img src="assets/images/twitter-154-svgrepo-com.svg" alt="">
                    </div>
                </a>
                <a href="https://www.instagram.com/delabcol/">
                    <div class="social">
                        <img src="assets/images/instagram-svgrepo-com.svg" alt="">
                    </div>
                </a>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/pagina.js"></script>
</body>

</html>