@extends("layouts.layout")

@section("header")

    <h4 class="lead" style="padding-left:20px">
        Ver detalle
    </h4>

@endsection

@section('body')
    
    @foreach($product as $pr)
    <div style="text-align:center">
        <div class="card" style="width: 18rem;">
         <div class="card-body">
        <h5 class="card-title"> {{$pr->nameProduct}} </h5>
        <p class="card-text">Precio: ${{$pr->price}} </p>
        <br>
        <p class="card-text"><span style="font-weight:bold">Creado el: </span> {{$pr->created_at}} </p>
        <p class="card-text">
            <span style="font-weight:bold">Modificado: </span> 
            @if($pr->update_at)
            {{$pr->update_at}} 
            @else
            No hay cambios.
            @endif
        </p>
        <a href="#" class="btn btn-primary">Editar</a>
        </div>
    </div>

    </div>
    @endforeach

@endsection