<?php

class BD {
    function conn(){
        $host='localhost';
        $user='root';
        $pass='';
        $db='vocesary';
        $conexion = mysqli_connect($host, $user, $pass, $db);
        if($conexion){
        return $conexion;
        }else{
            return 'No se ha podido acceder a la Base de datos';
        }
    }
    function select($valores,$from,$where,$conexion){
        if ($where == null) {
            $sql = "SELECT $valores FROM $from";
            $consu = $conexion->query($sql);
            return $consu;
        } else if ($where !== null) {
            $sql = "SELECT $valores FROM $from WHERE $where";
            $consu = $conexion->query($sql);
            return $consu;
        }
    }
}