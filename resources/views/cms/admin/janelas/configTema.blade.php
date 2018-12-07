<form action="#" method="post">
    Estilo do Tema
    <input list="tipoTema" name="modelo">
    <datalist id="tipoTema">
      @foreach ($modelos as $modelo)
        <option value="{{ $modelo->modelo }}">
      @endforeach
    </datalist>
</form>
