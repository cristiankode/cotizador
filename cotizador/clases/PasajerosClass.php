<?php
class  Pasajeros{
    
    private $idPax;
    private $apellidoP;
    private $apellidoM;
    private $nombre;
    private $nombre2;
    private $titulo;
    private $principal;
    private $grupo;
    private $nombreGrupo;
    private $cidExpediente;
    private $hotel;
    private $pasaporte;
    private $tipoblqt;
    private $genero;
    private $fechanac;
    private $cid_bloqueo;
    private $adoon;
    private $ciudadAddon;
    private $expedpas;
    private $vencimientopas;
    private $nacionalidad;
    private $vuelosAdoon;
    private $tipoBloqueo;
    private $fechaHora;
    private $fechaLimite;
    private $status;
    private $statusd;
    private $notas;
    private $habitacion;
    private $clave;
    private $ruta;
    private $cConfirm;
    private $claveOp;
    private $vendedor;
    private $nhab;
    private $habCad;
    private $tipoHotel;
    private $tipoVuelo;
    private $clase;
    private $tipoServ;
    private $tipoOperador;
    private $cid_blqter;
    private $cConfirmT;
    private $fechalimt;
    private $rutaT;
    private $tarifaA;
    private $tarifaB;
    private $tarifaC;
    private $tarifaD;
    private $tarifaE;
    private $tarifaF;
    private $tarifaG;
    private $tarifaH;
    private $tarifaI;
    private $tarifaJ;
    private $tarifaT;
    private $cTarifa;
    private $tarifaAddon;
    private $borrado;
    
    public function __construct() {
        
    }
    
    public function __destruct() {
        unset($this);
    }
    
    function getIdPax() {
        return $this->idPax;
    }

    function getApellidoP() {
        return $this->apellidoP;
    }

    function getApellidoM() {
        return $this->apellidoM;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getNombre2() {
        return $this->nombre2;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getPrincipal() {
        return $this->principal;
    }

    function getGrupo() {
        return $this->grupo;
    }

    function getNombreGrupo() {
        return $this->nombreGrupo;
    }

    function getCidExpediente() {
        return $this->cidExpediente;
    }

    function getHotel() {
        return $this->hotel;
    }

    function getPasaporte() {
        return $this->pasaporte;
    }

    function getTipoblqt() {
        return $this->tipoblqt;
    }

    function getGenero() {
        return $this->genero;
    }

    function getFechanac() {
        return $this->fechanac;
    }

    function getCid_bloqueo() {
        return $this->cid_bloqueo;
    }

    function getAdoon() {
        return $this->adoon;
    }

    function getCiudadAddon() {
        return $this->ciudadAddon;
    }

    function getExpedpas() {
        return $this->expedpas;
    }

    function getVencimientopas() {
        return $this->vencimientopas;
    }

    function getNacionalidad() {
        return $this->nacionalidad;
    }

    function getVuelosAdoon() {
        return $this->vuelosAdoon;
    }

    function getTipoBloqueo() {
        return $this->tipoBloqueo;
    }

    function getFechaHora() {
        return $this->fechaHora;
    }

    function getFechaLimite() {
        return $this->fechaLimite;
    }

    function getStatus() {
        return $this->status;
    }

    function getStatusd() {
        return $this->statusd;
    }

    function getNotas() {
        return $this->notas;
    }

    function getHabitacion() {
        return $this->habitacion;
    }

    function getClave() {
        return $this->clave;
    }

    function getRuta() {
        return $this->ruta;
    }

    function getCConfirm() {
        return $this->cConfirm;
    }

    function getClaveOp() {
        return $this->claveOp;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function getNhab() {
        return $this->nhab;
    }

    function getHabCad() {
        return $this->habCad;
    }

    function getTipoHotel() {
        return $this->tipoHotel;
    }

    function getTipoVuelo() {
        return $this->tipoVuelo;
    }

    function getClase() {
        return $this->clase;
    }

    function getTipoServ() {
        return $this->tipoServ;
    }

    function getTipoOperador() {
        return $this->tipoOperador;
    }

    function getCid_blqter() {
        return $this->cid_blqter;
    }

    function getCConfirmT() {
        return $this->cConfirmT;
    }

    function getFechalimt() {
        return $this->fechalimt;
    }

    function getRutaT() {
        return $this->rutaT;
    }

    function getTarifaA() {
        return $this->tarifaA;
    }

    function getTarifaB() {
        return $this->tarifaB;
    }

    function getTarifaC() {
        return $this->tarifaC;
    }

    function getTarifaD() {
        return $this->tarifaD;
    }

    function getTarifaE() {
        return $this->tarifaE;
    }

    function getTarifaF() {
        return $this->tarifaF;
    }

    function getTarifaG() {
        return $this->tarifaG;
    }

    function getTarifaH() {
        return $this->tarifaH;
    }

    function getTarifaI() {
        return $this->tarifaI;
    }

    function getTarifaJ() {
        return $this->tarifaJ;
    }

    function getTarifaT() {
        return $this->tarifaT;
    }

    function getCTarifa() {
        return $this->cTarifa;
    }

    function getTarifaAddon() {
        return $this->tarifaAddon;
    }

    function getBorrado() {
        return $this->borrado;
    }

    function setIdPax($idPax) {
        $this->idPax = $idPax;
    }

    function setApellidoP($apellidoP) {
        $this->apellidoP = $apellidoP;
    }

    function setApellidoM($apellidoM) {
        $this->apellidoM = $apellidoM;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNombre2($nombre2) {
        $this->nombre2 = $nombre2;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setPrincipal($principal) {
        if($principal === 'on'){
            $principal = '1';
        }else{
            $principal = '0';
        }
        
        $this->principal = $principal;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setNombreGrupo($nombreGrupo) {
        $this->nombreGrupo = $nombreGrupo;
    }

    function setCidExpediente($cidExpediente) {
        $this->cidExpediente = $cidExpediente;
    }

    function setHotel($hotel) {
        $this->hotel = $hotel;
    }

    function setPasaporte($pasaporte) {
        $this->pasaporte = $pasaporte;
    }

    function setTipoblqt($tipoblqt) {
        $this->tipoblqt = $tipoblqt;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setFechanac($fechanac) {
        $this->fechanac = $fechanac;
    }

    function setCid_bloqueo($cid_bloqueo) {
        $this->cid_bloqueo = $cid_bloqueo;
    }

    function setAdoon($adoon) {
        $this->adoon = $adoon;
    }

    function setCiudadAddon($ciudadAddon) {
        $this->ciudadAddon = $ciudadAddon;
    }

    function setExpedpas($expedpas) {
        $this->expedpas = $expedpas;
    }

    function setVencimientopas($vencimientopas) {
        $this->vencimientopas = $vencimientopas;
    }

    function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    function setVuelosAdoon($vuelosAdoon) {
        $this->vuelosAdoon = $vuelosAdoon;
    }

    function setTipoBloqueo($tipoBloqueo) {
        $this->tipoBloqueo = $tipoBloqueo;
    }

    function setFechaHora($fechaHora) {
        $this->fechaHora = $fechaHora;
    }

    function setFechaLimite($fechaLimite) {
        $this->fechaLimite = $fechaLimite;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setStatusd($statusd) {
        $this->statusd = $statusd;
    }

    function setNotas($notas) {
        $this->notas = $notas;
    }

    function setHabitacion($habitacion) {
        $this->habitacion = $habitacion;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setRuta($ruta) {
        $this->ruta = $ruta;
    }

    function setCConfirm($cConfirm) {
        $this->cConfirm = $cConfirm;
    }

    function setClaveOp($claveOp) {
        $this->claveOp = $claveOp;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    function setNhab($nhab) {
        $this->nhab = $nhab;
    }

    function setHabCad($habCad) {
        $this->habCad = $habCad;
    }

    function setTipoHotel($tipoHotel) {
        $this->tipoHotel = $tipoHotel;
    }

    function setTipoVuelo($tipoVuelo) {
        $this->tipoVuelo = $tipoVuelo;
    }

    function setClase($clase) {
        $this->clase = $clase;
    }

    function setTipoServ($tipoServ) {
        $this->tipoServ = $tipoServ;
    }

    function setTipoOperador($tipoOperador) {
        $this->tipoOperador = $tipoOperador;
    }

    function setCid_blqter($cid_blqter) {
        $this->cid_blqter = $cid_blqter;
    }

    function setCConfirmT($cConfirmT) {
        $this->cConfirmT = $cConfirmT;
    }

    function setFechalimt($fechalimt) {
        $this->fechalimt = $fechalimt;
    }

    function setRutaT($rutaT) {
        $this->rutaT = $rutaT;
    }

    function setTarifaA($tarifaA) {
        $this->tarifaA = $tarifaA;
    }

    function setTarifaB($tarifaB) {
        $this->tarifaB = $tarifaB;
    }

    function setTarifaC($tarifaC) {
        $this->tarifaC = $tarifaC;
    }

    function setTarifaD($tarifaD) {
        $this->tarifaD = $tarifaD;
    }

    function setTarifaE($tarifaE) {
        $this->tarifaE = $tarifaE;
    }

    function setTarifaF($tarifaF) {
        $this->tarifaF = $tarifaF;
    }

    function setTarifaG($tarifaG) {
        $this->tarifaG = $tarifaG;
    }

    function setTarifaH($tarifaH) {
        $this->tarifaH = $tarifaH;
    }

    function setTarifaI($tarifaI) {
        $this->tarifaI = $tarifaI;
    }

    function setTarifaJ($tarifaJ) {
        $this->tarifaJ = $tarifaJ;
    }

    function setTarifaT($tarifaT) {
        $this->tarifaT = $tarifaT;
    }

    function setCTarifa($cTarifa) {
        $this->cTarifa = $cTarifa;
    }

    function setTarifaAddon($tarifaAddon) {
        $this->tarifaAddon = $tarifaAddon;
    }

    function setBorrado($borrado) {
        $this->borrado = $borrado;
    }


}
