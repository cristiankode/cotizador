<?php
//namespace Model;

//Clase abstracta permite la conexion a MySQL
abstract class Model {

    //atributos
    private static $db_host = '192.168.2.6';
    private static $db_user = 'cristian';
    private static $db_pass = '4321';
    protected $db_name;
    private static $db_charset = 'utf-8';
    private $conn;
    protected $query;
    protected $rows = array();

//    Metodos abstractos para CRUD de clases que hereden
    abstract protected function createDivisas();

    abstract protected function readAllDivisas();

    abstract protected function createContactExternos();

    abstract protected function getContactosExternos();

    abstract protected function updateDivisas();

    abstract protected function updateContactExternos();

    abstract protected function deleteContactExternos();

    abstract protected function buscarPorFecha();

    abstract protected function buscarRangosFechasDivisas();

    abstract protected function findEmailExternal();
    
    abstract protected function findCurrencyAverage();

//    Metodo privado para conectarse a la base de datos
    private function db_open() {
        $this->conn = new mysqli(
                self::$db_host, self::$db_user, self::$db_pass, $this->db_name
        );

        $this->conn->set_charset(self::$db_charset);
    }

//    Metodo privado para desconectarse de la base de datos
    private function db_close() {
        $this->conn->close();
    }

//    Establecer un query que afecte datos(INSERT,DELETE,UPDATE)
    protected function set_query() {
        $this->db_open();
        $this->conn->query($this->query);
        $this->db_close();
    }

//    Obtener datos de un query(SELECT)
    protected function get_query() {
        $this->db_open();

        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());

        $result->close();

        $this->db_close();

        return array_pop($this->rows);
    }

}
