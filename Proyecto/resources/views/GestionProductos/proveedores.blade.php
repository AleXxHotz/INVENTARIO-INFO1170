@extends('menu')

@section('menu')
    <header class="tittle">
        <h1>Proveedores</h1>
        <hr>
    </header>
    <div>
    </div> <br>
    <div class="add">
        <input type="submit" value="Cliente Nuevo">
    </div> <br> <br> <br>
    <nav class="busqueda">
        <input type="submit" name="" id="" value="Buscar por nombre">
        <input type="submit" name="" id="" value="Buscar por correo">
        <input type="submit" name="" id="" value="Buscar por telefono">
    </nav>
    <a href="{{route('empresas.create')}}" class="botton">Ingresar una empresa al sistema></a>
    <section class="proveedores">
        <header class="prov-dat">
        </header>
        <div class="prov2">
            <table class="table-prov2">
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </table>
        </div>
        <div class="prov">
            <table class="table-prov">
                @foreach($empresas as $empresa)
                <tr>
                    <th>{{$empresa->Nombre}}</th>    
                    <th>{{$empresa->Correo}}</th>
                    <th>{{$empresa->Telefono}}</th>
                    <th>{{$empresa->Direccion}}</th>
                </tr>
                @endforeach
                <!-- <tr>
                    <th>Joaquin</th>
                    <th>canteroxx92@gmail.com</th>
                    <th>Balmaceda194</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr> -->
                <!-- <tr>
                    <th>Joaquin</th>
                    <th>+56928188128</th>
                    <th>Pastor Oscar Alarcon 181</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr> -->
                <!-- <tr>
                    <th>Joaquin</th>
                    <th>+56928188128</th>
                    <th>Pastor Oscar Alarcon 181</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr> -->
            </table>
        </div>
    </section>
    <!-- <h1>{{$empresas}}</h1>  -->
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/proveedores.css')}}">
@endsection
