<?php
require_once 'DB_Manager.php';

class Scroll {
    
    public function  comments ($startFrom)
    {

        $scroll = new DB_Manager();
        $res =  $scroll->getComments($startFrom);

        $comments = array();
        $rows = $res->fetch_all(MYSQLI_ASSOC);

        foreach($rows as $i => $row){
            $comments[] = $row;
        }
        return $comments;
    }
}

?>