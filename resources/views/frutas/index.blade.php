<h1>Listado de Frutas</h1>
<p><a href="{{ action('frutasController@naranjas') }}">Ir a Naranjas</a></p>
<p><a href="{{ action('frutasController@peras') }}">Ir a Peras</a></p>

<ul>
     @foreach($frutas as $fruta)
          <li>{{$fruta}}</li>
     @endforeach
</ul>

<h1>Formulario de Frutas en laravel</h1>
<form action="{{ url('/recibir') }}" method="POST">
     <label for="nombre">Nombre de la fruta</label>
     <input type="text" name="nombre"><br>

     <label for="description">Descipcion de la fruta</label>
     <textarea name="descripcion"></textarea>

     <input type="submit" value="Enviar">
</form>