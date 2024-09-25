<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div clas="container">
</div>

@if($categorias->isEmpty())
    <p>No hay categorias.</p>
@else
    <div class="row">
        @foreach($categorias as $categorias)
        <div class="col-md-3 mr-2 ml-2">
            <div class="card">
                <div class="card-body">
                {{$categorias->nombre}}
                    <li>{{$categorias->descripcion}}</li>
                    <p>{{$categorias->created_at}}</p>
                </div>
            </div>
        </div>      
        @endforeach

    
</div>
@endif
</div>
