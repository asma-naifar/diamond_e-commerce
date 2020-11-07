<?php
require "DBController.php";
class DBcart {



    function getNumberOfItemsByUsername($username){

    $db_handle = new DBController();

    $query = "Select * from client where login = ?";
    $result = $db_handle->runQuery($query, 's', array($username));

    $query = "Select * from panier where id_client = ?";
    $result = $db_handle->runQuery($query, 'i', array($result[0]["id_client"]));

    $query = "Select * from comporter where id_panier = ?";
    $result = $db_handle->runQuery($query, 'i', array($result[0]["id_panier"]));

    if(empty($result)){
        return 0;
    }
    else{
        return sizeof($result);
        }
    }


    function initCart($userId){

    $db_handle = new DBController();
    $query = "INSERT INTO panier (id_client) values (?)";
    $result = $db_handle->insert($query, 'i', array($userId));
    return $result;
 }

}
?>