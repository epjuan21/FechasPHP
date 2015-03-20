<?php
// Uso de la Funcion Date
date_default_timezone_set('America/Bogota');
?>

<html>
<head>
	<meta charset="utf-8"> 
	<title>Funcion Date</title>


<style type="text/css">

body {
	font-family: verdana, arial, sans-serif;
	font-size: 12px;
}

.container {
	width: 80%;
	margin: 0 auto;
}

h3 {
	text-align: center;
}

.Explicacion {
	margin: 10px auto;
	padding: 10px;
	width: 800px;
	background-color: #34495e;
	color: #FFF;
	border-radius: 3px;
}

.Explicacion code {
	font-size: 13px;
	display: block;
	padding-bottom: 5px;
	font-weight: 700;
}

table.tableStyle{
	text-align: center;
	margin: 0 auto;
	font-size: 11px;
	color: #333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}

table.tableStyle th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}

table.tableStyle td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;

}

</style> 

</head>
<body>

<div class="Explicacion">
	<h1>Date</h1>
	<code>string date ( string $format [, int $timestamp = time() ] )</code>
Devuelve una cadena formateada según el formato dado usando el parámetro de tipo integer 
timestamp dado o el momento actual si no se da una marca de tiempo. 
En otras palabras, timestamp es opcional y por defecto es el valor de time(). 
</div>

<div class="Explicacion">
	<h1>timestamp</h1>
El parámetro opcional timestamp es una marca de tiempo Unix de tipo integer que por 
defecto es la hora local si no se proporciona ningún valor a timestamp. 
En otras palabras, es por defecto el valor de la función time(). 
</div>

<div class="container">

	<h3>Dia</h3>

	<table class="tableStyle">
		<thead>
			<tr>
				<th>Caracter de <strong>format</strong></th>
				<th>Descripción</th>
				<th>Codigo Ejemplo</th>
				<th>Resultado</th>
				<th>Ejemplo de valores devueltos</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td>d</td>
				<td>Día del mes, 2 dígitos con ceros iniciales</td>
				<td><?php echo "date ('d', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('d',strtotime("2014-12-08"));?></td>
				<td>01 a 31</td>
			</tr>

			<tr>
				<td>D</td>
				<td>Una representación textual de un día, tres letras</td>
				<td><?php echo "date ('D', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('D',strtotime("2014-12-08"));?></td>
				<td>Mon hasta Sun</td>
			</tr>

			<tr>
				<td>j</td>
				<td>Día del mes sin ceros iniciales</td>
				<td><?php echo "date ('j', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('j',strtotime("2014-12-08"));?></td>
				<td>1 a 31</td>
			</tr>

			<tr>
				<td>l ('L' minúscula)</td>
				<td>Una representación textual completa del día de la semana</td>
				<td><?php echo "date ('l', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('l',strtotime("2014-12-08"));?></td>
				<td>Sunday hasta Saturday</td>
			</tr>

			<tr>
				<td>N</td>
				<td>Representación numérica ISO-8601 del día de la semana (añadido en PHP 5.1.0)</td>
				<td><?php echo "date ('N', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('N',strtotime("2014-12-08"));?></td>
				<td>1 (para lunes) hasta 7 (para domingo)</td>
			</tr>

			<tr>
				<td>S</td>
				<td>Sufijo ordinal inglés para el día del mes, 2 caracteres</td>
				<td><?php echo "date ('S', strtotime('2014-12-08')<br>"; echo "date ('jS', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('S',strtotime("2014-12-08")); echo "<br>"?></td>
				<td>st, nd, rd o th. Funciona bien con j</td>
			</tr>

			<tr>
				<td>w</td>
				<td>Representación numérica del día de la semana</td>
				<td><?php echo "date ('w', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('w',strtotime("2014-12-08"));?></td>
				<td>0 (para domingo) hasta 6 (para sábado)</td>
			</tr>

			<tr>
				<td>z</td>
				<td>El día del año (comenzando por 0)</td>
				<td><?php echo "date ('z', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('z',strtotime("2014-12-08"));?></td>
				<td>0 hasta 365</td>
			</tr>

		</tbody>

	</table>

	<h3>Semana</h3>

	<table class="tableStyle">
		<thead>
			<tr>
				<th>Caracter de <strong>format</strong></th>
				<th>Descripción</th>
				<th>Codigo Ejemplo</th>
				<th>Resultado</th>
				<th>Ejemplo de valores devueltos</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td>W</td>
				<td>Número de la semana del año ISO-8601, las semanas comienzan en lunes (añadido en PHP 4.1.0)</td>
				<td><?php echo "date ('W', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('W',strtotime("2014-12-08"));?></td>
				<td>Ejemplo: 50 (la 50ª semana del año)</td>
			</tr>

		</tbody>

	</table>

	<h3>Mes</h3>

	<table class="tableStyle">
		<thead>
			<tr>
				<th>Caracter de <strong>format</strong></th>
				<th>Descripción</th>
				<th>Codigo Ejemplo</th>
				<th>Resultado</th>
				<th>Ejemplo de valores devueltos</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td>F</td>
				<td>Una representación textual completa de un mes, como January o March</td>
				<td><?php echo "date ('F', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('F',strtotime("2014-12-08"));?></td>
				<td>January hasta December</td>
			</tr>

			<tr>
				<td>m</td>
				<td>Representación numérica de una mes, con ceros iniciales</td>
				<td><?php echo "date ('m', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('m',strtotime("2014-12-08"));?></td>
				<td>01 hasta 12</td>
			</tr>

			<tr>
				<td>M</td>
				<td>Una representación textual corta de un mes, tres letras</td>
				<td><?php echo "date ('M', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('M',strtotime("2014-12-08"));?></td>
				<td>01 hasta 12</td>
			</tr>

			<tr>
				<td>n</td>
				<td>Representación numérica de un mes, sin ceros iniciales</td>
				<td><?php echo "date ('n', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('n',strtotime("2014-12-08"));?></td>
				<td>1 hasta 12</td>
			</tr>

			<tr>
				<td>t</td>
				<td>Número de días del mes dado</td>
				<td><?php echo "date ('t', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('t',strtotime("2014-12-08"));?></td>
				<td>28 hasta 31</td>
			</tr>

		</tbody>

	</table>

	<h3>Año</h3>

	<table class="tableStyle">
		<thead>
			<tr>
				<th>Caracter de <strong>format</strong></th>
				<th>Descripción</th>
				<th>Codigo Ejemplo</th>
				<th>Resultado</th>
				<th>Ejemplo de valores devueltos</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td>L</td>
				<td>Si es un año bisiesto</td>
				<td><?php echo "date ('L', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('L',strtotime("2014-12-08"));?></td>
				<td>1 si es bisiesto, 0 si no.</td>
			</tr>

			<tr>
				<td>o</td>
				<td>Número de año ISO-8601. Esto tiene el mismo valor que Y, excepto que si el número de la semana ISO (W) pertenece al año anterior o siguiente, se usa ese año en su lugar. (añadido en PHP 5.1.0)</td>
				<td><?php echo "date ('o', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('o',strtotime("2014-12-08"));?></td>
				<td>Ejemplos: 1999 o 2003</td>
			</tr>

			<tr>
				<td>Y</td>
				<td>Una representación numérica completa de un año, 4 dígitos</td>
				<td><?php echo "date ('Y', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('Y',strtotime("2014-12-08"));?></td>
				<td>Ejemplos: 1999 o 2003</td>
			</tr>

			<tr>
				<td>y</td>
				<td>Una representación de dos dígitos de un año</td>
				<td><?php echo "date ('y', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('y',strtotime("2014-12-08"));?></td>
				<td>Ejemplos: 99 o 03</td>
			</tr>

		</tbody>

	</table>

	<h3>Hora</h3>

	<table class="tableStyle">
		<thead>
			<tr>
				<th>Caracter de <strong>format</strong></th>
				<th>Descripción</th>
				<th>Codigo Ejemplo</th>
				<th>Resultado</th>
				<th>Ejemplo de valores devueltos</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td>a</td>
				<td>Ante meridiem y Post meridiem en minúsculas</td>
				<td><?php echo "date ('a', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('a',strtotime("2014-12-08 17:30:01"));?></td>
				<td>am o pm</td>
			</tr>

			<tr>
				<td>A</td>
				<td>Ante meridiem y Post meridiem en mayúsculas</td>
				<td><?php echo "date ('A', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('A',strtotime("2014-12-08 17:30:01"));?></td>
				<td>AM o PM</td>
			</tr>

			<tr>
				<td>B</td>
				<td>Hora Internet</td>
				<td><?php echo "date ('B', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('B',strtotime("2014-12-08 17:30:01"));?></td>
				<td>000 hasta 999</td>
			</tr>

			<tr>
				<td>g</td>
				<td>Formato de 12 horas de una hora sin ceros iniciales</td>
				<td><?php echo "date ('g', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('g',strtotime("2014-12-08 17:30:01"));?></td>
				<td>1 hasta 12</td>
			</tr>

			<tr>
				<td>G</td>
				<td>Formato de 24 horas de una hora sin ceros iniciales</td>
				<td><?php echo "date ('G', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('G',strtotime("2014-12-08 17:30:01"));?></td>
				<td>0 hasta 23</td>
			</tr>

			<tr>
				<td>h</td>
				<td>Formato de 12 horas de una hora con ceros iniciales</td>
				<td><?php echo "date ('h', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('h',strtotime("2014-12-08 17:30:01"));?></td>
				<td>01 hasta 12</td>
			</tr>

			<tr>
				<td>H</td>
				<td>Formato de 24 horas de una hora con ceros iniciales</td>
				<td><?php echo "date ('H', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('H',strtotime("2014-12-08 17:30:01"));?></td>
				<td>00 hasta 23</td>
			</tr>

			<tr>
				<td>i</td>
				<td>Minutos, con ceros iniciales</td>
				<td><?php echo "date ('i', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('i',strtotime("2014-12-08 17:30:01"));?></td>
				<td>00 hasta 59</td>
			</tr>

			<tr>
				<td>s</td>
				<td>Segundos, con ceros iniciales</td>
				<td><?php echo "date ('s', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('s',strtotime("2014-12-08 17:30:01"));?></td>
				<td>00 hasta 59</td>
			</tr>

			<tr>
				<td>u</td>
				<td>Microsegundos (añadido en PHP 5.2.2). Observe que date() siempre generará 000000 ya que toma un parámetro de tipo integer, mientras que DateTime::format() admite microsegundos. </td>
				<td><?php echo "date ('u', strtotime('2014-12-08 17:30:01')";?></td>
				<td><?php echo date ('u',strtotime("2014-12-08 17:30:01"));?></td>
				<td>Ejemplo: 654321</td>
			</tr>

		</tbody>

	</table>

	<h3>Zona Horaria</h3>

	<table class="tableStyle">
		<thead>
			<tr>
				<th>Caracter de <strong>format</strong></th>
				<th>Descripción</th>
				<th>Codigo Ejemplo</th>
				<th>Resultado</th>
				<th>Ejemplo de valores devueltos</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td>e</td>
				<td>Identificador de zona horaria (añadido en PHP 5.1.0)</td>
				<td><?php echo "date ('e', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('e',strtotime("2014-12-08"));?></td>
				<td>Ejemplos: UTC, GMT, Atlantic/Azores</td>
			</tr>

			<tr>
				<td>I (i mayúscula)</td>
				<td>Si la fecha está en horario de verano o no</td>
				<td><?php echo "date ('I', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('I',strtotime("2014-12-08"));?></td>
				<td>1 si está en horario de verano, 0 si no</td>
			</tr>

			<tr>
				<td>O</td>
				<td>Diferencia de la hora de Greenwich (GMT) en horas</td>
				<td><?php echo "date ('O H:i:s',time())";?></td>
				<td><?php echo date ('O H:i:s',time());?></td>
				<td>Ejemplo: +0200</td>
			</tr>

			<tr>
				<td>P</td>
				<td>Diferencia con la hora de Greenwich (GMT) con dos puntos entre horas y minutos (añadido en PHP 5.1.3)</td>
				<td><?php echo "date ('P H:i:s',time())";?></td>
				<td><?php echo date ('P H:i:s',time());?></td>
				<td>Ejemplo: +02:00</td>
			</tr>

			<tr>
				<td>T</td>
				<td>Abreviatura de la zona horaria</td>
				<td><?php echo "date ('T')";?></td>
				<td><?php echo date ('T');?></td>
				<td>Ejemplos: EST, MDT ...</td>
			</tr>

			<tr>
				<td>Z</td>
				<td>Índice de la zona horaria en segundos. El índice para zonas horarias al oeste de UTC siempre es negativo, y para aquellas al este de UTC es siempre positivo.</td>
				<td><?php echo "date ('Z')";?></td>
				<td><?php echo date ('Z');?></td>
				<td>-43200 hasta 50400</td>
			</tr>

		</tbody>

	</table>

	<h3>Fecha / Hora Completa</h3>

	<table class="tableStyle">
		<thead>
			<tr>
				<th>Caracter de <strong>format</strong></th>
				<th>Descripción</th>
				<th>Codigo Ejemplo</th>
				<th>Resultado</th>
				<th>Ejemplo de valores devueltos</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td>c</td>
				<td>Fecha ISO 8601 (añadido en PHP 5)</td>
				<td><?php echo "date ('c', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('c',strtotime("2014-12-08"));?></td>
				<td>2004-02-12T15:19:21+00:00</td>
			</tr>

			<tr>
				<td>r</td>
				<td>Fecha con formato » RFC 2822</td>
				<td><?php echo "date ('r', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('r',strtotime("2014-12-08"));?></td>
				<td>Ejemplo: Thu, 21 Dec 2000 16:01:07 +0200</td>
			</tr>

			<tr>
				<td>U</td>
				<td>Segundos desde la Época Unix (1 de Enero del 1970 00:00:00 GMT)</td>
				<td><?php echo "date ('U', strtotime('2014-12-08')";?></td>
				<td><?php echo date ('U',strtotime("2014-12-08"));?></td>
				<td>Vea también time()</td>
			</tr>

		</tbody>

	</table>

	<h3>Operaciones con Fechas</h3>

	<?php
	$datetime1 = new DateTime('2014-01-01');
	$datetime2 = new DateTime('1800-01-01');
	$interval = $datetime1->diff($datetime2);
	$ret = (integer) $interval->format('%a%');
	//echo $interval->format('%a%');
	echo $ret;
	if($ret > 0)
	{
		echo "Mayor a 0";
	} else {
		echo "Menor a 0";
	}
	?>

	<h3>Operaciones con Fechas 2</h3>

	<?php
	function diff_dte($date1, $date2){
	       if (!is_integer($date1)) $date1 = strtotime($date1);
	       if (!is_integer($date2)) $date2 = strtotime($date2);  
	       return floor($date1 - $date2) / 60 / 60 / 24;
	}  
	 
	 
	//ejemplo de uso
	 
	$f1='1900-01-01';  //formato YYYY-mm-dd
	$f2='1901-01-30';
	 
	$dias = diff_dte($f1,$f2);
	echo "Dif Dias ".$dias;
	?>


<?php
function diferenciaDias($fecha1, $fecha2)
{


//Fecha 1 Formato AAAA-MM-DD

$ano1 = substr($fecha1, 0, 4);
$mes1 = substr($fecha1, 5, 2);
$dia1 = substr($fecha1, 8, 2);

// defino fecha 1 
// $ano1 = 2006; 
// $mes1 = 10; 
// $dia1 = 2; 

// Defino Fecha 2  Formato AAAA-MM-DD

$ano2 = substr($fecha2, 0, 4);
$mes2 = substr($fecha2, 5, 2);
$dia2 = substr($fecha2, 8, 2);

// $ano2 = 2006; 
// $mes2 = 10; 
// $dia2 = 27; 

// calculo timestam de las dos fechas 
$timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1); 
$timestamp2 = mktime(0,0,0,$mes2,$dia2,$ano2); 

// Luego, podríamos restar los timestamp y convertir los segundos en días: 

// resto a una fecha la otra 
$segundos_diferencia = $timestamp1 - $timestamp2; 
//echo $segundos_diferencia; 

// convierto segundos en días 
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24); 

// Para convertir los segundos en días, como se ha podido observar en el código, hay que dividir entre el número de segundos de un día. (60 segundos de un minuto, por los 60 minutos de una hora, por las 24 horas de un día). 

// Ahora bien, con un código como el anterior, el valor de los días de diferencia puede tener decimales y ser negativo. Nosotros queremos un número de días entero y positivo. Entonces todavía tendremos que hacer un par de operaciones matemáticas. Primero quitar el signo negativo y luego quitar los decimales. 

// obtengo el valor absoulto de los días (quito el posible signo negativo) 
//$dias_diferencia = abs($dias_diferencia); 

//quito los decimales a los días de diferencia 
$dias_diferencia = floor($dias_diferencia); 

// Los decimales los quitamos simplemente redondeando hacia abajo. Puesto que si tenemos un número decimal de días no ha llegado a un día completo y no nos interesa contabilizarlo. 

return $dias_diferencia;

}
$dif  = diferenciaDias('2014-12-31','2004-12-31');
echo "Diferencia en Dias ".$dif;
$aniosdif = $dif/365;
echo "<br>";
echo "<br>";
echo floor($aniosdif);

?>



</div>

</body>
</html>