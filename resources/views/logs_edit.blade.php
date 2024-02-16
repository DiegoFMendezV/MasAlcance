<h1>Editar Petición</h1>
<form action="{{ route('logs_update', ['id' => $log->id]) }}" method="POST">
    @method('PATCH')
    @csrf

            <div>
                <label for="Fecha">Fecha</label>
                <input type="text" name="Fecha" value="{{ $log->Fecha }}">
            </div>
            <div>
                <label for="Metodo">Metodo</label>
                <input type="text" name="Metodo" value="{{ $log->Metodo }}">
            </div>
            <div>
                <label for="Retorno">Retorno</label>
                <input type="text" name="Retorno" value="{{ $log->Retorno }}">
            </div> 
    
    <div >
        <a href="{{ route('logs')}}"><button type="button">Atras</button></a>
        <button type="submit">Guardar Cambios</button>
    </div>
</form>