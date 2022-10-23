<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="css/formularioregistro.css">
    <link rel="icon" href="img/MO.png">
</head>

<body>
    <main>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">

            <!--Register-->
            <form action="" class="formulario_register">
                <h1>Regístrarse</h1>
                <label for="Sexo">Elije Sexo</label>
                <select name="Sexo" id="Sexo">
                    <option value="doctor">Dr.</option>
                    <option value="doctora">Dra.</option>
                </select>
                <input type="text" placeholder="Codigo Medico">
                <input type="text" placeholder="Edad">
                <input type="text" placeholder="Especialidad">
                <input type="text" placeholder="SubEspecialidad">
                <input type="text" placeholder="Promedio de Graduación">
                <label for="Universidad">Elije Univesidad</label>
                <select name="Universidad" id="Universidad">
                    <option value="opcion">Seleccione una Opción</option>
                    <option value="UNAN Managua">UNAN MANAGUA</option>
                    <option value="UNAN Leon">UNAN LEON</option>
                    <option value="UNIDES">UNIDES</option>
                    <option value="UCAN">UCAN</option>
                    <option value="UCC">UCC</option>
                    <option value="UAM">UAM</option>
                </select>
                <input type="checkbox" name="Otro">Otro
                <input type="file" name="Añadir Imagen">
                <button>Regístrarse</button>
            </form>
        </div>
        </div>

    </main>

    <script src="script.js"></script>
</body>

</html>
