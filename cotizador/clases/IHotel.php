<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author sistemasweb1
 */
interface IHotel {

    
    public function getHabitaciones();

    public function getCombinacionHabitaciones();
    
    public function getTipHabitacion();
    
    public function setHabitaciones($habitaciones = '');
    
    public function setTipHabitacion($tipoHabitacion);
}
