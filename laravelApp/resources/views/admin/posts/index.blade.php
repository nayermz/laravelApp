<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div clas="container">

<a class="btn btn-primary" href="#">Nueva publicación</a>

@if($posts->isEmpty())
    <p>No hay publicaciones en la Base de datos.</p>
@else
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-3 mr-2 ml-2">
            <div class="card">
                <div class="card-body">
                   <h3>{{$post -> nombre}}</h3> 
                    <p class="text-primary">{{$post->resumen}}</p>
                    <p class="lead">{{$post->contenido}}</p>
                    <p class="text-muted">Publicado en :{{$post->created_at}}</p>
                </div>
            </div>
        </div>      
        @endforeach
    </div>
@endif
</div>