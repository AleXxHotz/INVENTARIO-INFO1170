<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/Formularios.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pagina.css')}}">
    <link rel="stylesheet" href="{{asset('css/TABLA.css')}}">
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <header id="Encabezado"><h1>Registros de Productos</h1></header>
        <div class="PANEL__BUTTON">
            <div class="BUtton">
                <button id="BotonExistencia">Añadir Producto</button>
                <button id="BotonExistencia" id="DELETE">Eliminar Productos</button>
             </div>
            <div class="Search">
                <form action="Buscar">
                    <input id="Buscador" type="text" class="Selector" placeholder="Buscar Producto">
                    <input id="icon"type="submit" >
                </form>
            </div>
        </div>

        <div class="TABLA__DATOS">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>ID</th><!--Numero.Imagen-->
                            <th>Img</th>
                            <th>Producto</th>
                            <th>Código</th>
                            <th>Cantidad Total</th>
                            <th>Categoria</th>
                            <th>Fecha_de_registro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-shadow">
                            <td>1</td>
                            <td><img src="#" alt="Img"></td>
                            <td><span>Chocolate</span></td>
                            <td><span>10192092109012</span></td>
                            <td><span>9080</span>packtes</td>
                            <td><span>Dulces</span></td>
                            <td><span>8 de noviembre 2023</span></td>
                            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                                <div class="BOTONES_SELECCION">
                                    <button id="EditarDato" title="Editar Campo">      </button>
                                    <button id="EliminarDato" title="Eliminar Campo">    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        <tr class="tr-shadow">
                            <td>1</td>
                            <td><img src="#" alt="Img"></td>
                            <td><span>Chocolate</span></td>
                            <td><span>10192092109012</span></td>
                            <td><span>9080</span>packtes</td>
                            <td><span>Dulces</span></td>
                            <td><span>8 de noviembre 2023</span></td>
                            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                                <div class="BOTONES_SELECCION">
                                    <button id="EditarDato" title="Editar Campo">      </button>
                                    <button id="EliminarDato" title="Eliminar Campo">    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>

        <div id="add" class="modal">
            <div class="modal-content">
                <div id="Form">
                    <h2>Agregar Producto</h2>
                    <form action="/ruta_del_Php">
                        <input type="file" id="img" name="img" accept="image/*">
                        <input type="submit">
                    </form>
                    <input type="text" class="Selector" placeholder="Nombre del Producto"> <br>
                    <input type="text" class="Selector" placeholder="Código de Barra"> <br>
                    <input type="text" class="Selector" placeholder="Cantidad a Ingresar"> <br>
                    <input type="text" class="Selector" placeholder="Fecha_de_caducidad"> <br>

                    <div id="Bu">
                        <button id="CerrarModal" class="Selector" title="Cancelar Acción">Cancelar</button>
                        <button id="Agregar_BD" class="Selector" title="Agregar al sistema">Añadir</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modify" class="modal">
            <div class="modal-content">
                <div id="Form">
                    <h2>Editar Producto</h2>
                    <button>Cambiar Imagen</button>
                    <input type="text" class="Selector" placeholder="Nombre del producto"> <br>
                    <input type="text" class="Selector" placeholder="Actualizar codigo"> <br>
                    <input type="text" class="Selector" placeholder="Fecha de Caducación"> <br>
                    <div id="Bu">
                        <button id="CerrarModal" class="Selector" title="Cancelar Acción">Cancelar</button>
                        <button id="Actualizar_BD" class="Selector" title="Actualizar al sistema">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/menu_administrador.js"></script>
    <!-- <script src="../JavaScript/menu_empleado.js"></script> -->
    <script src="js/agregar.js"></script>
    <script src="js/editar.js"></script>
</body>
</html>
