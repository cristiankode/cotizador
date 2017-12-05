<?php
require ('../clases/HabitacionSencillaClass.php');

if(filter_has_var(INPUT_POST, 'btnGrabar')){
    
    $nHabitacion = filter_input(INPUT_POST, "nHabitaciones");
    $tHabitacion = filter_input(INPUT_POST, "tHabitacion");
    $adultos = filter_input(INPUT_POST, "nAdultos");
    $junior = filter_input(INPUT_POST, "nJunior");
    $menor = filter_input(INPUT_POST, "nMenor");
    
    $totalPasajeros = 0;
    $nPasajeros = array();
    for($n = 0; $n < count($nPasajeros); $n++){
        
    }
    
    
}
    
