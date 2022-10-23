<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/MO.png">
    <title>MedicOffice</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/moindex.css" />
</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <img src="img/MO.png" alt="" class="logo">
        <a href="#home" class="logo">
            <i class="ii">MedicOffice</i>
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#services">Servicios</a>
            <a href="#about">Consultas</a>
            <a href="#doctors">Medicos</a>
            <a href="#book">Transacciones</a>
            <a href="#review">Contacto</a>
            <a href="#blogs">Blogs</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="image">
            <img src="img/home-img.svg" alt="" />
        </div>

        <div class="content">
            <h3>Tu elección en Salud</h3>
            <p>
                Nos capacitamos en llevarte a cabo las mejores practicas y llevarte a
                los mejores especialistas a un clic de distancia!
            </p>
            <a href="/loginpacientes" class="btn">
                Registrate <span class="fas fa-chevron-right"></span>
            </a>
        </div>
    </section>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>Doctores en el trabajo</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1040+</h3>
            <p>Pacientes satisfechos</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>500+</h3>
            <p>Instalación de la cama</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>Hospitales Disponibles</p>
        </div>
    </section>

    <!-- icons section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
        <h1 class="heading">Nuestros <span>Servicios</span></h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Valoración por expertos</h3>
                <p>
                    Chequeo general y valoración por parte del médico.
                </p>
                <a href="#" class="btn">
                    Ver <span class="fas fa-chevron-right"></span>
                </a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>Ambulancia 24/7</h3>
                <p>
                    Contamos con servicio de ambulancia las 24 horas del día, los 7 días de la semana. Pueden contactar
                    linea directa.
                </p>
                <a href="#" class="btn">
                    Ver más <span class="fas fa-chevron-right"></span>
                </a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>Doctores Especialistas</h3>
                <p>
                    Contamos con los mejores especialistas en su área para brindar atención de calidad.
                </p>
                <a href="#" class="btn">
                    Ver médicos <span class="fas fa-chevron-right"></span>
                </a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>Medicamentos</h3>
                <p>
                    Conección con farmacias locales.
                </p>
                <a href="#" class="btn">
                    Ver más <span class="fas fa-chevron-right"></span>
                </a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>Servicio de camilla</h3>
                <p>
                    Alianzas con centros médicos para brindar los servicios de medicina interna y cirujia.
                </p>
                <a href="#" class="btn">
                    Ver más <span class="fas fa-chevron-right"></span>
                </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>Cuidado total</h3>
                <p>
                    Profesionales al cuidado constante con monitoreo de acuerdo al padecimiento que presente.
                </p>
                <a href="#" class="btn">
                    Ver <span class="fas fa-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- services section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
        <h1 class="heading"><span>Sobre</span> Nosotros</h1>

        <div class="row">
            <div class="image">
                <img src="img/about-img.svg" alt="" />
            </div>

            <div class="content">
                <h3>Medic Office</h3>
                <p>
                    Partiendo desde diagósticos sencillos, pasando por seguimientos de
                    tratamientos y consulta con médicos en tiempo real, las apps de
                    salud son sistemas diseñados para resolver diferentes necesidades en
                    pacientes, y posibles pacientes, sin necesidad de moverse de su casa
                    y de forma casi inmediata.
                </p>
                <p>
                    Modificar la cita. Avisar de forma manual al paciente por SMS de
                    cualquier tipo de eventualidad. Hacer de la cita una cita recurrente
                    que se repita a lo largo del tiempo. Cortar y pegar la cita
                    cómodamente en cualquier otro horario. Imprimir Justificantes.
                    Asociar un tratamiento a la cita posteriormente cobrarlo y
                    facturarlo. Acceder directamente a la ficha del paciente.
                </p>
                <a href="/contacto" class="btn">
                    Contáctanos <span class="fas fa-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- doctors section starts  -->

    <section class="doctors" id="doctors">
        <h1 class="heading">Nuestros <span>Doctores</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="img/doc-1.jpg" alt="" />
                <h3>Zoila Jimenez</h3>
                <span>Cardiologa</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="img/medicos/cardoc1.jpg" alt="" />
                <h3>Mercedes Martinez</h3>
                <span>Medica General</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="img/medicos/cardoc6.jpg" alt="" />
                <h3>Manuel Ramos</h3>
                <span>Pediatra</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="img/medicos/cardoc16.jpg" alt="" />
                <h3>Ariel Alaniz</h3>
                <span>Odontologo</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="img/medicos/cardoc7.jpg" alt="" />
                <h3>Mariane Rottentowki</h3>
                <span>Medica General</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="img/doc-6.jpg" alt="" />
                <h3>Chris Zamora</h3>
                <span>Ginecologo</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
        <a href="/medicos" class="btn">
            Visitar Sección de Médicos <span class="fas fa-chevron-right"></span>
        </a>
    </section>

    <!-- doctors section ends -->

    <!-- booking section starts   -->

    <section class="book" id="book">
        <h1 class="heading"><span>Reserva</span> Ahora</h1>

        <div class="row">
            <div class="image">
                <img src="img/book-img.svg" alt="" />
            </div>

            <form action="">
                <h3>Reservar una cita</h3>
                <input type="text" placeholder="Nombre" class="box" />
                <input type="number" placeholder="Celular" class="box" />
                <input type="email" placeholder="Correo Electronico" class="box" />
                <input type="date" class="box" />
                <input type="submit" value="Reservar" class="btn" />
            </form>
        </div>
    </section>

    <!-- booking section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">
        <h1 class="heading">Opinión de <span>Clientes</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="img/pic-1.png" alt="" />
                <h3>Jordan Belford</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">
                    Me fue muy útil, tuve respuesta inmediata de los médicos
                    y cumplieron mis espectativas.
                </p>
            </div>

            <div class="box">
                <img src="img/pic-2.png" alt="" />
                <h3>Andrea Gomez</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">
                    La aplicación fue de uso sencillo, no se me complicó al
                    momento de utilizarla. Tuve acceso a un buen numero de medicos
                    y facilidad al momento de realizar mi pago. La recomiendo!!!
                </p>
            </div>

            <div class="box">
                <img src="img/pic-3.png" alt="" />
                <h3>Diego López</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">
                    Ofrece multiples servicios, la atención fue muy buena,
                    de los medicos pude obtener una buena valoración de ellos.
                    Tuve respuesta inmediata, precios accesibles y ajustados a mi presupuesto.
                </p>
            </div>
        </div>
        <a href="/contacto" class="btn">
            Haz tu opinión <span class="fas fa-chevron-right"></span>
        </a>
    </section>

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">
        <h1 class="heading">Nuestros <span>Blogs interactivos</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="img/blog-1.jpg" alt="" />
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Provident, eius.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/blog-2.jpg" alt="" />
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Provident, eius.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/blog-3.jpg" alt="" />
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Provident, eius.
                    </p>
                    <a href="#" class="btn">
                        learn more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Menu</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="/transacciones"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="/login"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>Servicios</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#">
                    <i class="fas fa-chevron-right"></i> ambulance service
                </a>
            </div>

            <div class="box">
                <h3>Contacto</h3>
                <a href="#"> <i class="fas fa-phone"></i> +505 8612 1086 </a>
                <a href="#"> <i class="fas fa-phone"></i> +505 8634 5552 </a>
                <a href="#"> <i class="fas fa-envelope"></i> fbperez31@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> karenblja22@gmail.com </a>
                <a href="#">
                    <i class="fas fa-map-marker-alt"></i> Matagalpa, Nicaragua
                </a>
            </div>

            <div class="box">
                <h3>Síguenos</h3>
                <a href="https://www.facebook.com/MedicOffice"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com/medicoffice22"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-tiktok"></i> Tik Tok </a>
                <a href="https://www.instagram.com/medicoffice_22/"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="https://www.linkedin.com/mwlite/in/medic-office-355637254"> <i class="fab fa-linkedin"></i>
                    linkedin </a>
            </div>
        </div>

        <div class="credit">
            Creado por <span>Team Thunderbolts</span> | Todos los derechos reservados 2022
        </div>
    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/moindex.js"></script>
</body>

</html>
