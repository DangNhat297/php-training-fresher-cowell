<?php

require_once "DB.class.php";

$db = new DB();

// print_r($db->getAll('user'));
// print_r($db->findByID('user', 1));
// print_r($db->save('user', ['username' => 'linhloi2k2', 'email' => 'linhloi2k2@gmail.com', 'password' => 123456789]));
// print_r($db->update('user', ['password' => '987654321'], ['id' => 4, 'email' => 'linhloi2k2@gmail.com']));
// print_r($db->delete('user', ['id' => 4]));