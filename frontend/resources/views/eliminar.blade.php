@extends('plantilla')

@section('contenido')


<form action="{{ url('homeAdopciones') }}" method="POST">
    
    <table >
    <thead>
    <tr>
        <th></th>
        <th>NOMBRE DE LA MASCOTA</th>
    </tr>
    </thead>

    <tbody>
    @foreach($adopciones as $adopcion)      
                <tr>
                <td><input type='radio'></td>
                <td>{{$adopcion->nombre}}</td>
                <td>{{$adopcion->id}}</td>
                </tr>
    @endforeach

    </tbody>
        
    <?php 
    /*
            $sql = "SELECT * FROM adopcions";
            $resultado = mysqli_query($db,$sql);

            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                        <td><input type='radio' name='nombre' value=$row[nombre]></td>
                        <td>$row[nombre]</td>
                    </tr>";
            }


            for($i=0;$i<count($arrayDatos);$i++){
                $nombre=$arrayDatos[$i]['nombre'];
                $id=$arrayDatos[$i]['id'];
                
                echo "<tr>
                <td><input type='radio' name='id' value=$id></td>
                <td>$nombre</td>
                <td>$id</td>
                
                </tr>";
            }
          */  
        ?>

    </table>

    <p><input type="submit"></p>

</form>

@endsection