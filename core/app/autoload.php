<?php
// autoload.php
// 10 octubre del 2014
// esta funcion elimina el hecho de estar agregando los modelos manualmente
function spl_autoload_register($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
}

/*function autocargar($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
}
spl_autoload_register('autocargar');*/



?>
