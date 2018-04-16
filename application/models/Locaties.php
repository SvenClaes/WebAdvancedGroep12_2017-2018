<?php

class Locaties extends CI_Model
{
    public function MakeLocation($name)
    {
        $servername = "vagrant";
        $username = "root";
        $password = "root";
        $dbname = "groepswerk";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO MyGuests (name) VALUES ($name)";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    public function ChangeLocation($name, $id)
    {
        $servername = "vagrant";
        $username = "root";
        $password = "root";
        $dbname = "groepswerk";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE locaties SET name=$name WHERE id=$id";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    public function DeleteLocation($name)
    {
        $servername = "vagrant";
        $username = "root";
        $password = "root";
        $dbname = "groepswerk";
        try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // sql to delete a record
            $sql = "DELETE FROM locaties WHERE name= $name ";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    public function GetAllLocations()
    {

        $servername = "vagrant";
        $username = "root";
        $password = "root";
        $dbname = "groepswerk";
        try {
            $pdo = new PDO("mysql:host=$servername; dbname=$dbname",
                $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
            $statement = $pdo->query('SELECT name from locations');
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $statement->fetch()) {
                print_r($row);
            }
        } catch (PDOException $e) {
            print 'Exception!: ' . $e->getMessage();
        }
        $pdo = null;
    }
}