	<?php 

	 include ("../logica/conusltas.php");
	$lista=array();
	$lista2=array();



	 $sql = new Consultas();
	 $sql->InventarioActual("DENT","AOC");
        // $sql2->InventarioActual("SABANA","AOC");


	 foreach ($sql->InventarioActual("SABANA","AOC") as $key) {
	 		array_push($lista, $key);
	 }

	foreach ($sql->InventarioActual("DENT","AOC") as $key) { 	
	 	array_push($lista2, $key);
	
	 }
		
	 	

echo "Existe en las dos sucursales<br>\n";
foreach ($lista as $value1) {
    foreach ($lista2 as $value2) {
        if ($value1[1] == $value2[1]){
	$total=$value1[4]+$value2[4];

               echo " $value1[1]  $total<br>\n";
        }else{
	

	}


    }
}


echo "<br>sabana<br>\n";
foreach ($lista as $value1) {
    $encontrado=false;
    foreach ($lista2 as $value2) {
        if ($value1[1] == $value2[1]){
            $encontrado=true;
            $break;
        }
    }
    if ($encontrado == false){
           

	 echo " $value1[1] $value1[4]<br>\n";

    }
}


echo "<br>dent<br>\n";
foreach ($lista2 as $value2) {
    $encontrado=false;
    foreach ($lista as $value1) {
        if ($value1[1] == $value2[1]){
            $encontrado=true;
            $break;
        }
    }
    if ($encontrado == false){


	
          echo " $value2[1] $value2[4]<br>\n";
    }
}


			


 ?>