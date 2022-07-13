<?php

namespace App\Models;

class User extends BaseModel{

    public function getList(){
        return $this->getAll('user');
    }

}