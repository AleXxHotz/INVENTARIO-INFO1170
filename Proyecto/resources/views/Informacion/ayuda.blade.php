@extends('menu')

@section('menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="y_estilo.css">
    <link rel="stylesheet" href="New_style.css">
</head>
<body>
        <!-- Cabecera -->
        <header class="Cont-A1">
            <h1>Ayuda</h1>
            <hr> 
        </header>
        <!-- Apartado donde estaran las preguntas -->
        <main class="Cont-A2"> 
            <section id ="Box1-a">
                <h3>Preguntas frecuentes</h3>
                <hr>
                <button onclick="Traer()" >Ver preguntas frecuentes</button>
                <ul id="contenido_list">      
                </ul>
            </section>
        </main>

        <!-- El pie de pagina -->
        <footer class="Cont-A3"> @2023-09-23 Sistema de Gestiones</footer>

    </div>
    <script>
        var contenidoA3 = document.querySelector('#contenido_list')
        function Traer(){
            fetch('{{asset('json/InfoAyuda.json')}}')
                .then( res => res.json())
                .then( datos =>{
                    Lista(datos)
                })
        }
        function Lista(datos){
            contenidoA3.innerHTML = ''
            for(let valor of datos){
                contenidoA3.innerHTML += `
                <li>
                    <details>
                        <summary>${valor.pregunta}</summary>
                        <p>${valor.respuesta}</p>
                    </details>
                </li> 
                `
            }
        }
    </script>
</body>
</html>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/ayuda.css')}}">
@endsection