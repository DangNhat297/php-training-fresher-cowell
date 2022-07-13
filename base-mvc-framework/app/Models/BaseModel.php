<?php

namespace App\Models;
use PDO;
use PDOException;

class BaseModel{

    private $__conn;

    public function __construct(){
        try{
            $this->__conn = new PDO("mysql:host=". config('DB_HOST') . ";dbname=". config('DB_DATABASE') . ";charset=utf8", config('DB_USERNAME'), config('DB_PASSWORD'));
            $this->__conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function findByID($table, $id){
        $stmt = $this->__conn->prepare("SELECT * FROM $table WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getAll($table){
        $stmt = $this->__conn->query("SELECT * FROM $table");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function save($table, $data = []){
        $cols = implode(",", array_keys($data));
        $values = array_values($data);
        $bindCols = array_map(function($key){
            return '?'; 
        }, array_keys($data));
        $bindCols = implode(",", $bindCols);
        $stmt = $this->__conn->prepare("INSERT INTO $table($cols) VALUES ($bindCols)");
        $stmt->execute($values);
        return $this->__conn->lastInsertId(); // return id of last insert record
    }

    public function update($table, $data = [], $where = []){
        $whereQuery = "";
        $bindCols = array_map(function($key){
            return "$key = ?";
        }, array_keys($data));
        $bindCols = implode(",", $bindCols);
        if(count($where) > 0){
            $whereVal = array_map(function($key, $value){
                return "$key = '$value'";
            }, array_keys($where), array_values($where));
            $whereVal = implode(" AND ", $whereVal);
            $whereQuery .= " WHERE $whereVal";
        }
        $stmt = $this->__conn->prepare("UPDATE $table SET $bindCols" . $whereQuery);
        $stmt->execute(array_values($data));
        return $stmt->rowCount();
    }

    public function delete($table, $where = []){
        $whereQuery = "";
        if(count($where) > 0){
            $whereVal = array_map(function($key, $value){
                return "$key = $value";
            }, array_keys($where), array_values($where));
            $whereVal = implode(",", $whereVal);
            $whereQuery .= " WHERE $whereVal";
        }
        $stmt = $this->__conn->prepare("DELETE FROM $table" . $whereQuery);
        $stmt->execute();
        return $stmt->rowCount();
    }

}