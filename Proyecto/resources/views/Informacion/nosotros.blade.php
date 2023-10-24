@extends('menu')

@section('menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubre más sobre nosotros</title>
</head>
<body>

    <div class="CuerpoPagina">
        <header class="C-MAS1">
            <h1>Más Sobre Nosotros</h1>
        </header>
        <main class="C-MAS2">
            <section Class = 'Contenedor' id="C1">
                <div class ="Cont">
                    <h2>Nuestra app</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facilis ipsa cumque dolor modi aliquid
                        voluptas, magnam obcaecati deserunt aperiam nihil commodi nisi temporibus, laborum sapiente unde molestias?
                        Nihil magni amet maiores quidem quae ad sequi odio ipsam repellat, voluptates, et quos laboriosam nisi.
                        Cumque perspiciatis magnam et, ea odio quasi rerum asperiores, obcaecati ab impedit sit assumenda voluptatibus
                        sapiente tempora quo nihil dolor voluptatum consectetur mollitia? Ullam minima voluptas consequatur nobis! Mollitia
                        corporis esse eaque id soluta veniam aperiam praesentium, voluptates voluptatum! Numquam iste, harum unde consequatur,
                        non exercitationem, omnis cum deleniti rem ad qui ex! Quae, aperiam magnam?</p></div>
                <div class = 'imagen'>
                    <img id = 'Logo' src="images/icon2.png" alt="Logo de nuestra aplicación web" width="300px">
                </div>
            </section>

            <section Class = 'Contenedor' id="C2">
                <div class ="Cont">
                    <h2>Historia</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facilis ipsa cumque dolor modi aliquid
                        voluptas, magnam obcaecati deserunt aperiam nihil commodi nisi temporibus, laborum sapiente unde molestias?
                        Nihil magni amet maiores quidem quae ad sequi odio ipsam repellat, voluptates, et quos laboriosam nisi.
                        Cumque perspiciatis magnam et, ea odio quasi rerum asperiores, obcaecati ab impedit sit assumenda voluptatibus
                        sapiente tempora quo nihil dolor voluptatum consectetur mollitia? Ullam minima voluptas consequatur nobis! Mollitia
                        corporis esse eaque id soluta veniam aperiam praesentium, voluptates voluptatum! Numquam iste, harum unde consequatur,
                        non exercitationem, omnis cum deleniti rem ad qui ex! Quae, aperiam magnam?</p></div>
                <div class = 'imagen'>
                    <img src="https://us.123rf.com/450wm/robuart/robuart2012/robuart201201289/161103170-trabajadores-hombres-y-mujeres-investigando-y-desarrollando-informes-gr%C3%A1ficos-icono-de-negocios.jpg?ver=6" alt="Algun colach de trabajos" width="200px">
                </div>
            </section>
            <section Class = 'Contenedor' id="C3">
                <div class ="Cont">
                    <h2>Contribuidores</h2>
                    <div id="encargados">
                    </div>
                    <button id="Bonton_c">Siguiente</button>
                </div>
            </section>
            </main>
            <footer class="C-MAS3">@2023-09-23-Sistema de Gestiones de empresa</footer>

            <script>
                var contenidoNC = document.querySelector('#encargados')
                var num_vol = -1;
                var boton_c = document.querySelector('#Bonton_c');

                function persona(){
                    num_vol += 1
                    if(num_vol === 5){
                        num_vol = 0;
                    }
                    fetch('json/Contribuidores.json')
                        .then( res => res.json())
                        .then( datos => {
                            Datos_C(datos)
                        })
                }

                function Datos_C(data){
                    contenidoNC.innerHTML = `
                        <img src="${data[num_vol].Photo}" alt="Img de un Contribuidor" id='imgAutores'>
                        <p id='Nombre'>${data[num_vol].Cargo}${data[num_vol].Nombre}</p>
                        <p>${data[num_vol].Tipo_Contribucion}</p>
                        `
                }
                boton_c.addEventListener("click", persona);
            </script>
    </div>
</body>
</html>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/nosotros.css')}}">
    <link rel="stylesheet" href="{{asset('css/y_estilo.css')}}">
@endsection
