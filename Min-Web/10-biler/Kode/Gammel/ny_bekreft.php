<?php
//koble til databasem

include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['ny_bil']))
    {
        $regnr = $_POST['regnr'];
        $merke = $_POST['merke'];
        $type = $_POST['type'];
        $farge = $_POST['farge'];
        $aar = $_POST['aar'];

        $query = "INSERT INTO biler (regnr, merke, type, farge, aar) VALUE
        (:regnr, :merke, :type, :farge, :aar)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":regnr",$regnr);
        $stmt->bindParam(":merke",$merke);
        $stmt->bindParam(":type",$type);
        $stmt->bindParam(":farge",$farge);
        $stmt->bindParam(":aar",$aar);
        $stmt->execute();
        
    }
?>