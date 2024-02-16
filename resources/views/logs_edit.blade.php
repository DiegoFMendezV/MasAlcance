@extends('base')

@section('content')

<h1 style="color:#1071d6; margin: 10px 0; text-align:center">Editar Petición</h1>
<form id="form-edit" action="{{ route('logs_update', ['id' => $log->id]) }}" method="POST">
    @method('PATCH')
    @csrf
            <div class="mb-3">
                <label for="Fecha" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="Fecha" value="{{ $log->Fecha }}">
            </div>
            <div class="mb-3">
                <label for="Metodo" class="form-label">Metodo</label>
                <input type="text" class="form-control" name="Metodo" value="{{ $log->Metodo }}">
            </div>
            <div class="mb-3">
                <label for="Retorno" class="form-label">Retorno</label>
                <input type="text" class="form-control" name="Retorno" value="{{ $log->Retorno }}">
            </div> 
    
    <div >
        <a href="{{ route('logs')}}"><button type="button" class="btn btn-primary">Atras</button></a>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </div>
</form>

@section('js')
    <script type="text/javascript">
        $('#form-edit').on('submit',function(e){
            e.preventDefault();
            Swal.fire({
                title: "Cambios guardados correctamente !",
                icon: "success"
            }).then((result) => {
                this.submit()
            });
        })
    </script>
@endsection

@endsection