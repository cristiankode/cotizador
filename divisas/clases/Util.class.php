<?php
//namespace Divisas\Clases;
class Util {

    /**
     * 
     * @param type $divisa
     * @return boolean
     * Valida divisas
     */
    public static function validaDivisas($divisa) {
        if (strval($divisa) == strval((float) $divisa) && $divisa > 0.0) {
            return true;
        } else {
//            echo '<script language="javascript">alert("ERROR: Divisa No Es Valida." );</script>';
            return false;
        }
    }

    /**
     * 
     * @param type $fecha
     * @return boolean
     * Validar fecha correcta
     */
    public static function fechaCorrecta($fecha) {
        $f = explode('-', $fecha);
        if (count($f) == 3 & checkdate($f[1], $f[2], $f[0])) {
            return true;
        }
        echo '<script language="javascript">alert("ERROR: La Fecha no es valida. Intenta nuevamente por favor (dd-mm-año).");</script>';
        return false;
    }

    /**
     * 
     * @param type $string
     * @return boolean
     */
    public static function validaStringVacio($string) {
        if (!empty($string)) {
            return true;
        }
        echo '<script language="javascript">alert("ERROR: Nombre de contacto no puede estar ausente. Intenta nuevamente por favor.");</script>';
        return false;
    }

    /**
     * 
     * @param type $string
     * @return boolean
     */
    public static function validaStringLong($string) {
        if (strlen($string) > 50) {
            return false;
            echo '<script language="javascript">alert("ERROR: Nombre de usuario demasiado largo. Intenta nuevamente por favor.");</script>';
        } else {
            return true;
        }
    }

    public static function validaStringAlfaNum($string) {
        $cadena = preg_replace('[\s+]', '', $string);
        if (ctype_alpha($cadena)) {
            return true;
        } else {
            echo '<script language="javascript">alert("ERROR: Nombre debe contener solo texto. Intenta nuevamente.");</script>';
            return false;
        }
    }

    /**
     * 
     * @param type $email
     * 
     */
    public static function validaEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 
     * @param type $float
     * @return String with two Decimals 
     * 
     */
    public static function roundTwoDecimal($float) {
        return round($float, 2);
    }

    /**
     * 
     * @param type $float
     * @return String with five Decimals
     */
    public static function roundFiveDecimal($float) {
        return round($float, 5);
    }

    /**
     * 
     * @param type $date
     * @return boolean
     * valid day of week
     */
    public static function getDayWeek($date) {
        $dayWeek = date('w', strtotime($date));
        if ($dayWeek == 5) {
            return true;
        }
        return false;
    }

    /**
     * 
     * @param type $date
     * @return String date of day saturday
     */
    public static function getDaySaturday($date) {
        $d = date_create($date);
        date_add($d, date_interval_create_from_date_string('01 days'));
        $saturday = date_format($d, 'Y-m-d');
        return $saturday;
    }

    /**
     * 
     * @param type $date
     * @return String date of day sunday
     */
    public static function getDaySunday($date) {
        $d = date_create($date);
        date_add($d, date_interval_create_from_date_string('02 days'));
        $sunday = date_format($d, 'Y-m-d');
        return $sunday;
    }

    public static function getMediaDivisas($arrayDivisa) {
        $medial = array_sum($arrayDivisa) / count($arrayDivisa);
        echo $medial;
        return $medial;
    }

    public static function createTable($statusHeader = array(), $status_data = array(), $idTable = '') {
        echo '<table border = "1" style="width:100%;border-spacing: 5px;" id="'.$idTable.'">';
        echo '<thead>';
        echo '<tr>';
        for($i = 0; $i<count($statusHeader); $i++){
           echo '<th>' . $statusHeader[$i] . '</th>';
        }
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr>';
        foreach ($status_data as $data) {
            echo   '<td>' . $data . '</td>';
        }
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        }

    /* addslashes() elimina caracteres especiales */
}