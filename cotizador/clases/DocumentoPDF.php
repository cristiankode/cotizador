<?php
require ('PasajerosClass.php');

class DocumentoPDF extends Pasajeros{
    
    private $nombre;
    private $tipoArchivo;
    private $tamañoArchivo;
    private $extension;
    private $directorioSavePasaportes = '../pasaportesFiles';
    private $directorioSaveVisas = '../visasFiles';
    private $dirTemporal;
    private $mensaje;
    
    public function __construct() {
        
    }
    public function __destruct() {
        unset($this);
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getTipoArchivo() {
        return $this->tipoArchivo;
    }

    function getTamañoArchivo() {
        return $this->tamañoArchivo;
    }

    function getExtension() {
        return $this->extension;
    }

    function getDirectorioSavePasaportes() {
        return $this->directorioSavePasaportes;
    }

    function getDirectorioSaveVisas() {
        return $this->directorioSaveVisas;
    }

    function getDirTemporal() {
        return $this->dirTemporal;
    }

    function getMensaje() {
        return $this->mensaje;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTipoArchivo($tipoArchivo) {
        $this->tipoArchivo = $tipoArchivo;
    }

    function setTamañoArchivo($tamañoArchivo) {
        $this->tamañoArchivo = $tamañoArchivo;
    }

    function setExtension($extension) {
        $this->extension = $extension;
    }

    function setDirectorioSavePasaportes($directorioSavePasaportes) {
        $this->directorioSavePasaportes = $directorioSavePasaportes;
    }

    function setDirectorioSaveVisas($directorioSaveVisas) {
        $this->directorioSaveVisas = $directorioSaveVisas;
    }

    function setDirTemporal($dirTemporal) {
        $this->dirTemporal = $dirTemporal;
    }

    function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

        
    

    public function uploadFilePDF($nombre,$tipo,$size,$dirTemp,$directorioSave, $nombreArchivo) {
        
        if (move_uploaded_file($dirTemp, $nombre)) {
    $vol_archi = round($size / 1024, 2);    // Volumen archivo en Kb redondeado a dos decimales
    $extension = substr(strrchr($nombre, "."), 1);    // Extraemos la extension del archivo
    $volumen_min = "5120";           // volumen minimo en bit - 5120 = 5 kb  
    $volumen_max = "5120000";       // volumen maximo en bit - 5120000 = 5 MB

    $archivo_permitido = "application/pdf";       // archivo permitido, .pdf

    if ($size >= $volumen_min AND $size <= $volumen_max AND 
           $tipo == $archivo_permitido){
    
//        $idmc = $_POST['idmc']; // Es el nuevo nombre del archivo
        $carpeta = $directorioSave; // Carpeta en la que guardaremos nuestros archivos 
        // Renombramos el archivo 
//        $archivo_renombrado = "$idmc". ".$extension";
        $archivo_renombrado = $nombreArchivo . ".$extension";
        rename($nombre, $archivo_renombrado);
        
            if(copy("$archivo_renombrado", "$carpeta/$archivo_renombrado")){
            
//                print "El fichero ha sido almacenado con éxito. <br/>"
//                . "Click en el boton cerrar para terminar.";
                
                echo '<div class="alert alert-success" role="alert">
            <strong>El fichero ha sido almacenado con éxito. Click en el botón Cerrar para terminar.</strong> </div>';
//                    <a target=\"_blank\" href=\"$carpeta/$archivo_renombrado\">$archivo_renombrado</a> <br /> 
//                    $vol_archi Kb";
                
            }else {   
                echo "<div id='error'>El fichero NO se ha podido copiar.</div>";   
            } 
        // Eliminamos el archivo del directorio raiz una vez copiado 
        unlink($archivo_renombrado);     
    }else{
        echo "<div id='error'>El archivo no es del tipo ($archivo_permitido) o volumen permitido ($vol_archi Kb)</div>"; 
    }
}else{
     echo "<div id='error'>Debe adjuntar algún archivo valido(.pdf).</div>"; 
}

        
    }
}