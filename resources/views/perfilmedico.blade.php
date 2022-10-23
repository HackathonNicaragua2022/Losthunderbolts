<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" href="img/MO.png">

    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="css/perfilmedico.css">
    <link rel="stylesheet" href="css/perfilmedico2.css">

    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <link rel="stylesheet" href="fonts/remixicon.css">
</head>

<body>
    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg"></span>


    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container">

        <!-- ===== ===== Header/Navbar ===== ===== -->
        <header>
            <div class="brandLogo">
                <figure><img src="img/MO.png" alt="logo" width="140px" height="140px"></figure>
                <span>MedicOffice</span>
            </div>
        </header>


        <!-- ===== ===== User Main-Profile ===== ===== -->
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="img/cardoc1.jpg" alt="profile"></figure>
            </div>
        </section>


        <!-- ===== ===== Work & Skills Section ===== ===== -->
        <section class="work_skills card">

            <!-- ===== ===== Work Contaienr ===== ===== -->
            <div class="work">
                <h1 class="heading">work</h1>
                <div class="primary">
                    <h1>Spotify New York</h1>
                    <span>Primary</span>
                    <p>170 William Street <br> New York, NY 10038-212-315-51</p>
                </div>

                <div class="secondary">
                    <h1>Metropolitan <br> Museum</h1>
                    <span>Secondary</span>
                    <p>S34 E 65th Street <br> New York, NY 10651-78 156-187-60</p>
                </div>
            </div>

            <!-- ===== ===== Skills Contaienr ===== ===== -->
            <div class="skills">
                <h1 class="heading">Skills</h1>
                <ul>
                    <li style="--i:0">Cirugias</li>
                    <li style="--i:1">Atencion</li>
                    <li style="--i:2">Asistencia</li>
                    <li style="--i:3">Precios</li>
                </ul>
            </div>
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <h1 class="name">Mercedes Martinez</h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                </div>
                <p>Medico General</p>
            </div>

            <div class="rank">
                <h1 class="heading">Rankings</h1>
                <span>8,6</span>
                <div class="rating">
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate underrate"></i>
                </div>
            </div>

            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="#">Enviar Mensaje</a>
                    </li>

                    <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="/chatspaciente">Contactar</a>
                    </li>

                    <li class="sendMsg">
                        <a href="/chats">Reportar Usuario</a>
                    </li>
                </ul>
            </div>
        </section>


        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="timeline">
                        <i class="ri-eye-fill ri"></i>
                        <span>Linea de Tiempo</span>
                    </li>

                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>Acerca de</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Información de Contacto</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">Telefono:</h1>
                        <span class="info">+505 8577 5765</span>
                    </li>

                    <li class="address">
                        <h1 class="label">Dirección:</h1>
                        <span class="info">Calle Santa Ana 2c al norte <br> Matagalpa, MT </span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info">mercemarti@medicoffice.com</span>
                    </li>

                    <li class="site">
                        <h1 class="label">Sitio:</h1>
                        <span class="info">www.medicoffice.com</span>
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Información Básica</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Cumpleaños:</h1>
                        <span class="info">Dec 25, 2000</span>
                    </li>

                    <li class="sex">
                        <h1 class="label">Genero:</h1>
                        <span class="info">Hombre</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>

</body>

</html>
