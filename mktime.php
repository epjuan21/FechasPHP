<html>
<head>
	<meta charset="utf-8"> 
	<title>Funcion mktime</title>


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

.ejemplo {
	margin: 10px auto;
	width: 800px;
	padding: 10px;
	background-color: #4183D7;
	border: 2px solid #1F3A93;
	color: #FFF;
	border-radius: 5px;
}

.ejemplo p {
	font-size: 14px;
	font-weight: bold;
}

.ejemplo code {
	font-size: 15px;
}

.Explicacion code {
	font-size: 13px;
	display: block;
	padding-bottom: 5px;
	font-weight: 700;
}


</style> 

</head>
<body>

<div class="Explicacion">
	<h1>mktime - Obtener la marca de tiempo Unix de una fecha</h1>
	<code>int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )
	</code>
	<p>
		 Devuelve la marca de tiempo Unix correspondiente a los argumentos dados. Esta marca de tiempo es un entero que contiene el número de segundos entre la Época Unix (1 de Enero del 1970 00:00:00 GMT) y el instante especificado.
	</p>
	<p>
		Los argumentos pueden omitirse de derecha a izquierda; cualquier argumento que se omita será establecido al valor actual según la fecha y hora locales.  
	</p>

</div>

<div class="Explicacion">
	<h1>Parametros</h1>
	<h2>hour</h2>
El número de la hora relativa al inicio del día determinado por month, day y year. Los valores negativos referencian la hora antes de la media noche del día en cuestión. Los valores mayores que 23 referencian la hora apropiada en el/los día/s siguiente/s

<h2>minute</h2>
El número de los minutos relativos al inicio de hour. Los valores negativos referencian el minuto en la hora previa. Los valores mayores que 59 referencian el minuto apropiado en la/s hora/s siguiente/s. 

<h2>second</h2>
El número de segundos relativos al inicio de minute. Los valores negativos referencian el segundo en el minuto previo. Los valores mayores que 59 referencian el segundo apropiado en el/los minuto/s siguiente/s

<h2>month</h2>

El número del mes relativo al final del año previo. Los valores de 1 a 12 referencian los meses del calendario normal del año en cuestión. Los valores menores que 1 (incluyendo valores negativos) referencian los meses del año previo en orden inverso, por lo que 0 es Diciembre, -1 es Noviembre, etc. Los valores mayores que 12 referencian el mes apropiado en el/los año/s siguiente/s. 

<h2>day</h2>
El número del día relativo al final del mes previo. Los valores del 1 al 28, 29, 30 o 31 (dependiendo del mes) referencian los días normales del mes relevante. Los valores menores que 1 (incluyendo valores negativos) referencian los días del mes previo por lo que 0 es el último día del mes previo, -1 es el día anterior a ese, etc. Los valores mayores que el número de días del mes relevante referencian el día apropiado en el/los mes/es siguiente/s. 

<h2>year</h2>
El número del año, puede ser un valor de dos o cuatro dígitos, con valores entre 0-69 mapeados a 2000-2069 y 70-100 a 1970-2000. En sistemas donde time_t es un entero con signo de 32 bits, como es lo más normal hoy en día, el rango válido para year es entre 1901 y 2038. Sin embargo, antes de PHP 5.1.0 este rango estaba limitado desde 1970 a 2038 en algunos sistemas (p.ej. Windows).

</div>

<div class="ejemplo">

	<h1>Ejemplo 1</h1>

	<p>// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1</p>
	
	<code>date_default_timezone_set('UTC');</code>

	<p>// Imprime: July 1, 2000 is on a Saturday</p>

	<code>echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));</code>

	<p>// Imprime algo como: 2006-04-05T01:02:03+00:00</p>

	<code>echo date('c', mktime(1, 2, 3, 4, 5, 2006));</code>


</div>

 



</body>
</html>