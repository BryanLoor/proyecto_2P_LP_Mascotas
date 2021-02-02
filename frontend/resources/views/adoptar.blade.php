@extends('plantilla')
@section('contenido')
    <div class="container d-flex justify-content-center text-center w-50 ">
        <form  class="primary form-control" action="{{ url('adoptar/buscar') }}" method="post" >
        @csrf
            <label for="" class="form-label text-white ">Elija la especie</label>
                <select class="form-select "  name="especie">  
                    <option class="form-select">Escoja una opcion</option> 
                    <option value="gato">Gato</option> 
                    <option value="perro">Perro</option> 
                </select > 
                <label for="" class="form-label text-white">Elija el sexo: </label>
                
                <select class=" text-center form-select " name="sexo" >  
                    <option class="form-select">Escoja una opcion</option> 
                    <option value="macho">Macho</option> 
                    <option value="hembra">Hembra</option> 
                </select>
                <p><input type="submit" class="btn btn-success"></p>
        </form>
    
    </div>
      <div class=" container-fluid ">
      <div class="row d-flex justify-content-center">
        @foreach($mascotas as $mascota)
        
        <div class="card col-lg-3 col-sm-4 p-2 m-2 " style="width: 18rem;">
            <h5 class="card-title">{{$mascota->nombre}}</h5>
            <div class="bg-image ">
                <img src="https://placekitten.com/g/250/230" class="card-img-top img-fluid" alt="imagen de mascota">
            </div>
            
            <div class="card-body">
            <p class="card-text">Edad : {{$mascota->edad}} años</p>
            <p class="card-text">Sexo : {{$mascota->sexo}}</p>
            <p class="card-text">{{$mascota->descripcion}}</p>
            <a href="#!" class="btn btn-primary">Adoptar</a>
            </div>
        </div>
        @endforeach
      
      
      </div>
      
      </div>
      





<div id="adoptar" align="center">

    <form  class="" action="{{ url('adoptar') }}" method="post"  >
            <p>Elija la especie  </p>
            <select class=" text-center form-select w-50"  name="especiee">  
                <option>Choose an option</option> 
                <option value="gato">Gato</option> 
                <option value="perro">Perro</option> 
            </select > 
            <p>Elija el sexo: </p>
            <select class=" text-center form-select w-50" name="sexoo" >  
                <option>Choose an option</option> 
                <option value="macho">Macho</option> 
                <option value="hembra">Hembra</option> 
            </select>
            <p><input type="submit" class="btn btn-primary"></p>
        </form>

</div>


@endsection