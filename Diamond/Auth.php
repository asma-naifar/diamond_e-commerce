<?php
require "DBController.php";
class Auth {
    function getMemberByUsername($username) {
        $db_handle = new DBController();
        $query = "Select * from client where login = ?";
        $result = $db_handle->runQuery($query, 's', array($username));
        return $result;
    }

    function getMemberByEmail($email) {
        $db_handle = new DBController();
        $query = "Select * from client where email = ?";
        $result = $db_handle->runQuery($query, 's', array($email));
        return $result;
    }

    function getMemberById($id) {
        $db_handle = new DBController();
        $query = "Select * from client where id_client = ?";
        $result = $db_handle->runQuery($query, 'i', array($id));
        return $result;
    }

    function getCartIdByMemberId($id) {
        $db_handle = new DBController();
        $query = "Select * from panier where id_client = ?";
        $result = $db_handle->runQuery($query, 'i', array($id));
        return $result;
    }

    function getItemsByCartId($id) {
        $db_handle = new DBController();
        $query = "Select * from comporter where id_panier = ?";
        $result = $db_handle->runQuery($query, 'i', array($id));
        return $result;
    }

    function getDesByItemId($id) {
        $db_handle = new DBController();
        $query = "Select * from produit where reference = ?";
        $result = $db_handle->runQuery($query, 'i', array($id));
        return $result;
    }

    
	function getTokenByUsername($username,$expired) {
	    $db_handle = new DBController();
	    $query = "Select * from tbl_token_auth where username = ? and is_expired = ?";
	    $result = $db_handle->runQuery($query, 'si', array($username, $expired));
	    return $result;
    }
    
    function markAsExpired($tokenId) {
        $db_handle = new DBController();
        $query = "UPDATE tbl_token_auth SET is_expired = ? WHERE id = ?";
        $expired = 1;
        $result = $db_handle->update($query, 'ii', array($expired, $tokenId));
        return $result;
    }
    
    function insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date) {
        $db_handle = new DBController();
        $query = "INSERT INTO tbl_token_auth (username, password_hash, selector_hash, expiry_date) values (?, ?, ?,?)";
        $result = $db_handle->insert($query, 'ssss', array($username, $random_password_hash, $random_selector_hash, $expiry_date));
        return $result;
    }

    function insertUser($username, $email, $password) {
        $db_handle = new DBController();
        $password = password_hash($password , PASSWORD_DEFAULT);
        $query = "INSERT INTO client (email, login, password) values (?, ?, ?)";
        $result = $db_handle->insert($query, 'sss', array($email, $username, $password));
        return $result;
    }

    function insertItem($productId, $cartId) {
        $db_handle = new DBController();
        $query = "INSERT INTO comporter (reference, id_panier) values (?, ?)";
        $result = $db_handle->insert($query, 'ii', array($productId, $cartId));
        return $result;
    }

    
    function update($query) {
        mysqli_query($this->conn,$query);
    }

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

    function getQuantity($idCart, $idItem){
        $db_handle = new DBController();

        $query = "Select * from comporter where id_panier = ? and reference = ?";
        $result = $db_handle->runQuery($query, 'ii', array($idCart, $idItem));
        return sizeof($result);

    }

    function initCart($userId){

    $db_handle = new DBController();
    $query = "INSERT INTO panier (id_client) values (?)";
    $result = $db_handle->insert($query, 'i', array($userId));
    return $result;
 }

function deleteItem($idCart, $idItem){

    $db_handle = new DBController();
    $query = "DELETE FROM comporter WHERE id_panier = ? and reference = ?";
    $result = $db_handle->runQuery($query, 'ii', array($idCart, $idItem));

 }


}
?>