<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/registro.js"></script>
    <title>REGISTRO DE TU EMPRESA</title>
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
</head>
<body>
    <header id="cabecera">
        <ul>
            <li><a href="../INICIO-DE-SESION_REGISTRO/SE1.html" class="active">Menu</a></li>
            <li class="menu-item">
                <a href="#" class="active">Acerca de Nosotros</a>
                <div class="dropdown-content">
                    <!-- Contenido del menú desplegable -->
                    <p style="font-weight: 600; font-size: 25px;">¿Quienes Somos?</p>

                        <p>Somos un equipo de trabajo comprometido con la innovación y la eficiencia empresarial.
                        En INVENTARIO, Como grupo de estudiantes dedicados y apasionados que comparten una visión común:
                        simplificar y optimizar la gestión de Productos para empresas de todas las industrias y tamaños.</p>

                        <p>En INVENTARIO, nos enorgullece ser un equipo de trabajo que abraza la innovación y la eficiencia empresarial como nuestros principales pilares.
                        Somos más que un grupo de estudiantes; somos un conjunto de individuos apasionados y dedicados que han unido sus fuerzas con una visión compartida:
                        poner en práctica nuestros conocimientos y habilidades técnicas para construir una plataforma de gestión de productos que sea accesible, poderosa y versátil.
                        Nos comprometemos a brindar a las empresas la herramienta que necesitan para gestionar sus productos de manera más eficiente, ahorrar tiempo y recursos, y fomentar el crecimiento.</p>

                        <p>Estamos aquí para brindarle soporte continuo y actualizaciones periódicas para asegurarnos de que su experiencia
                        con nuestra plataforma siga siendo efectiva a lo largo del tiempo.</p>
                </div>
            </li>
            <li class="menu-item">
                <a href="#" class="active">Contactanos</a>
                <div class="dropdown-content">
                    <!-- Contenido del menú desplegable -->
                    <p style="font-weight: 600; font-size: 25px;">Nuestros Numeros de Contacto:</p>
                    <p>MESA CENTRAL: 999 9999 9999 <br>
                       TELÉFONO: 0002 0001 0003
                    </p>
                </div>
            </li>
        </ul>
    </header>
    <div class="seccion">
        <div class="container">
            <div class="content-center">
                <div class="aling-self-center">
                    <div class="text-center">
                        <div class="card-wrap">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <h4>REGISTRA TU EMPRESA</h4>
                                    <div class="form-group">
                                        <input type="NombreEmpresa" name="Tuempresa" class="form-style" placeholder="Nombre de la empresa" id="Tuempresa" autocomplete="off">

                                    </div>
                                    <div class="form-group">
                                        <input type="RutIdentificador" name="RutEmpresa" class="form-style" placeholder="Rut de la empresa" id="RutEmpresa" autocomplete="off">

                                    </div>
                                    <div class="form-group">
                                        <input type="namebodega" name="bodega" class="form-style" placeholder="Nombre de tu bodega" id="bodega" autocomplete="off">

                                    </div>
                                    <div class="form-group">
                                        <input type="CategoriaBodega" name="CategoriaBodega" class="form-style" placeholder="Categoria de tu bodega" id="categoria" autocomplete="on"">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="logpass" class="form-style" placeholder="contraseña de tu empresa" id="logpass" autocomplete="off">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="logpass" class="form-style" placeholder="repetir contraseña" id="logpass" autocomplete="off">

                                    </div>
                                    <div class="form-group">
                                        <input type="NombreJefe" name="Jefe" class="form-style" placeholder="Nombre del jefe" id="jefe" autocomplete="off">

                                    </div>
                                    <div class="form-group">
                                        <input type="EmpleadosBodega" name="Empleados" class="form-style" placeholder="Empleados en tu bodega" id="empleados" autocomplete="off">

                                    </div>
                                       <a href="login" class="btn mt-4">Registrar tu empresa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="images/icon2.png" alt="logo de inventario">
</body>
</html>