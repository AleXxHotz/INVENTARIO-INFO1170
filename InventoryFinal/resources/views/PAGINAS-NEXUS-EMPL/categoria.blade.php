<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/Formularios.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pagina.css')}}">
    <link rel="stylesheet" href="{{asset('css/TABLA.css')}}">
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <header id="Encabezado"><h1>Panel de Categorias</h1></header>
        <div class="PANEL__BUTTON">
            <div class="BUtton">
                <button id="BotonExistencia">Crear Nueva Categoria</button>
             </div>
            <div class="Search">
                <form action="Buscar">
                    <input id="Buscador" type="text" class="Selector" placeholder="Buscardor">
                    <input id="icon"type="submit" >
                </form>
            </div>
        </div>

        <div class="TABLA__DATOS">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Categoria</th>

                            <th>Tipo</th>
                            <th>Producto Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-shadow">
                            <td>1.|Categoria</td>

                            <td><span>Alimento marinos</span></td>
                            <td><span>900</span>packtes </td>
                            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                                <div class="BOTONES_SELECCION">
                                    <button id="EditarDato" title="Edit">      </button>
                                    <button id="EliminarDato" title="Delete">    </button>
                                    <button id="More"        title="More">      </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        <tr class="tr-shadow">
                            <td>2.|Categoria</td>

                            <td><span>Alimento marinos</span></td>
                            <td><span>900</span>packtes </td>
                            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                                <div class="BOTONES_SELECCION">
                                    <button id="EditarDato" title="Editar campo">      </button>
                                    <button id="EliminarDato" title="Eliminar campo">    </button>
                                    <button id="More"        title="More">      </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>

        <div id="add" class="modal">
            <div class="modal-content">
                <div id="Form">
                    <h2>Agregar Categoria</h2>
                    <input type="text" class="Selector" placeholder="Nombre de Categoria"> <br>
                    <input type="text" class="Selector" placeholder="Tipo de Categoria"> <br>
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
                    <h2>Editar Categoria</h2>
                    <input type="text" class="Selector" placeholder="Nombre de Categoria"> <br>
                    <input type="text" class="Selector" placeholder="Tipo de categoria"> <br>
                    <div id="Bu">
                        <button id="CerrarModal" class="Selector" title="Cancelar Acción">Cancelar</button>
                        <button id="Actualizar_BD" class="Selector" title="Actualizar al sistema">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/menu_empleado.js"></script>
    <!-- <script src="../JavaScript/menu_empleado.js"></script> -->

    <script src="js/agregar.js"></script>
    <script src="js/editar.js"></script>
</body>
</html>
