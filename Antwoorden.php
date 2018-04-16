<?php
/**
 * Created by PhpStorm.
 * User: joran
 * Date: 15/04/2018
 * Time: 12:41
 */
class Antwoorden
{
   public function DeleteAnswersPerLocation($locatieId)
   {
        $servername = "vagrant";
        $username = "root";
        $password = "root";
        $dbname = "groepswerk";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // sql to do delete all answers from a given location
            $sql = "DELETE FROM antwoorden WHERE locatieId = $locatieId";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
 }
