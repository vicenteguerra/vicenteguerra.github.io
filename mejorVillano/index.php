<?php
	echo '<link rel="stylesheet" type="text/css" href="css/style.css">';

	for($i=0; $i<100;$i++){
		$villano[$i]['nombre']=generateVillianName();
		$villano[$i]['grado_maldad']=rand(0,9);
		$villano[$i]['capacidad_volar']=rand(0,9);
		$villano[$i]['poder_fisico']=rand(0,9);
		$villano[$i]['egocentrismo']=rand(0,9);
		$villano[$i]['monologar']=rand(0,9);
		$villano[$i]['triunfos_acumulados']=rand(0,9);
		$villano[$i]['ingenio']=rand(0,9);
		$villano[$i]['poder_mental']=rand(0,9);
		$villano[$i]['audacia']=rand(0,9);
		$villano[$i]['poder_monetario']=rand(0,9);
	}

	//var_dump($villano);

	function generateVillianName(){
		$firstName= array( 'The Evil'
		                  ,'The Mad'
		                  ,'The Big'
		                  ,'The Dangerous'
		                  ,'Captain'
		                  ,'The Ghostly'
		                  ,'Professor'
		                  ,'Doctor'
		                  ,'Phantom'
		                  ,'The Brutal'
		                  ,'The Unstoppable'
		                  ,'The Vile'
		                  ,'The Dark'
		                  ,'The Crazy'
		                  ,'The Iron'
		                  ,'The Poison'
		                  ,'The Bloody'
		                  ,'The Rancid'
		                  ,'The Invisible'
		                  ,'The Black'
		                  ,'The Atomic'
		                  ,'The Mega'
		                  ,'The Grand');
		$secondName = array('Shadow'
		                    ,'Knight'
		                    ,'Tarantula'
		                    ,'Skull'
		                    ,'Mastermind'
		                    ,'Wizard'
		                    ,'Ninja'
		                    ,'Devil'
		                    ,'Freak'
		                    ,'Beast'
		                    ,'Criminal'
		                    ,'Master'
		                    ,'Lord'
		                    ,'Child'
		                    ,'Slayer'
		                    ,'Spider'
		                    ,'Creature'
		                    ,'Monster'
		                    ,'Vampire'
		                    ,'Mutant'
		                    ,'Robot'
		                    ,'Machine'
		                    ,'Man'
		                    ,'Alien'
		                    ,'Aídi');

		return $firstName[rand(0,(count($firstName)-1))]." ".$secondName[rand(0,(count($secondName)-1))] ;
	}

	echo '
	<div class="top"></div>
	<table>
	  <tr>
	  	<td>Nombre</td>
	    <td>Grado de maldad</td>
	    <td>Capacidad de volar</td>
	    <td>Poder físico</td>
	    <td>Egocentrismo</td>
	    <td>Monologar</td>
	    <td>Triunfos acumulados</td>
	    <td>Ingenio</td>
	    <td>Poder mental</td>
	    <td>Audacia</td>
	    <td>Poder monetario</td>
	  </tr>
	  ';


    foreach ($villano as $key => $value) {
    	echo "<tr>";
    	foreach ($value as $key1 => $value1) {
    		echo "<td>". $value1. "</td>";
    	}
    	echo "</tr>";
    }

    echo "</table>";

?>