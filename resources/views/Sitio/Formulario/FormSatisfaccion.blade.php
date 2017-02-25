{!! Form::open(['url' => 'foo/bar'])!!}

{!! Form::label('Fecha', 'Fecha de aplicación encuesta');!!}
{!! Form::date('name', \Carbon\Carbon::now());!!}

<br>
{!! Form::label('Nombre', 'Nombre del cliente');!!}
{!! Form::text('username');!!}

<br>
{!! Form::label('Edad', 'Edad');!!}
{!! Form::number('name', 'value');!!}

<br>
{!! Form::label('Genero', 'Genero');!!}
<br>
{!! Form::label('F', 'Femenino');!!}
{!! Form::radio('Genero', 'F');!!}
{!! Form::label('M', 'Masculino');!!}
{!! Form::radio('Genero', 'M');!!}

<br>
{!! Form::label('TipoComida', 'Tipo de comida');!!}
{!! Form::select('TipoComida',[
    'Sopas' => ['S1' => 'Zanahoria','S2' =>'Ahuyama', 'S3' =>'Espinaca'],
    'Carnes' => ['C1' => 'Cerdo','C2' =>'Pollo', 'C3' =>'Pescado', 'C4' =>'Cordero'],
]);!!}
<br>
{!! Form::label('NivelSatisfaccion', 'Nivel de Satisfaccion');!!}
{!!  Form::selectRange('number', 1, 5);!!}
<br>
{!! Form::submit('Enviar');!!}

{!! Form::close() !!}
