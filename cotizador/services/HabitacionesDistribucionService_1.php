<?php
require ('../clases/HabitacionSencillaClass.php');

if(filter_has_var(INPUT_POST, 'btnGrabar')){
    
    
    
    switch (filter_input(INPUT_POST, "tHabitacion")){
        case 'Sencilla':
            $nHabitacion = filter_input(INPUT_POST, "nHabitaciones");
            $tHabitacion = filter_input(INPUT_POST, "tHabitacion");
            $adultos = filter_input(INPUT_POST, "nAdultos");
            $junior = filter_input(INPUT_POST, "nJunior");
            $menor = filter_input(INPUT_POST, "nMenor");
            $hSencilla = new HabitacionSencillaClass($nHabitacion, $tipHabitacion, $adultos, $junior, $menor);
            echo $hSencilla->getTipHabitacion();
            echo 'habitacion sencilla';
            break;
        case 'Sencilla C/1 Menor':
            echo 'habitacion sencilla';
            break;
        case 'Sencilla C/2 Menores':
            echo 'Sencilla C/2 Menores';
            break;
        case 'Sencilla C/3 Menores':
            echo 'Sencilla C/3 Menores';
            break;
        case 'Doble':
            echo 'hab doble';
            break;
        case 'Doble C/1 Menor':
            echo 'hab Doble C/1 Menor';
            break;
        case 'Doble C/2 Menores':
            echo 'hab Doble C/2 Menores';
            break;
        case 'Doble +++':
            echo 'hab Doble C/2 Menores';
            break;
        case 'Doble x':
            echo 'hab Doble x';
            break;
        case 'Triple':
            echo 'hab triple';
            break;
        case 'Triple C/1 Menor':
            echo 'hab triple C/1 Menor';
            break;
        case 'Triple +++':
            echo 'hab triple +++';
            break;
        case 'Triple x':
            echo 'hab x';
            break;
        case 'Cuadruple':
            echo 'hab cuadruple';
            break;
        case 'Cuadruple +++':
            echo 'hab Cuadruple +++';
            break;
        case 'Cuadruple x':
            echo 'hab Cuadruple x';
            break;
        case 'Suite':
            echo 'hab Suite';
            break;
    }
    
}
    
