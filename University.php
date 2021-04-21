<?php
class University {
    public function GetUniversity($id){
        include "connetion.php";

        $sql = "SELECT CAST(CONVERT(name_uni USING utf8) AS binary) FROM university WHERE id_university =".$id;
        $stmt = $conn->query($sql);

        if($stmt){
            $result = $stmt->fetchColumn();
            json_encode($result);

            return $result;
        }else{
            die("Error :".$conn->error."<br />SQL :".$sql);
        }
        
    }
}