<?php
    
    define('DBINFO','mysql:host=localhost;dbname=pendingrequest');
    define('DBUSER','root');
    define('DBPASS','');
    
    function performQuery($query){
        ini_set('display_error', 1);
        error_reporting(E_ALL);
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        $result = $stmt->execute();
        if($result) {
            return true;
        } else {
            return false;
        }
    }

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();    
    }
//$sales_person = 'SELECT * from user where status = "unapproved" and type = "sales-person"';
//approve = 'UPDATE user SET status="'.$status.'" WHERE id = '".$user_id." and type = "sales-person"';
?>
