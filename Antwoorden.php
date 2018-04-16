<?php
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
   
   public function DeleteAnswer($id)
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
            $sql = "DELETE FROM antwoorden WHERE id = $id";
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
   public function GetAllAnswers()
    {
        $servername = "vagrant";
        $username = "root";
        $password = "root";
        $dbname = "groepswerk";
        try {
            $pdo = new PDO( "mysql:host=$servername;dbname=$dbname",
                $username, $password );
            $pdo->setAttribute( PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION );
            $statement = $pdo->query('SELECT id, score, commentaar FROM antwoorden');
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $statement->fetch()) {
                print_r($row);
            }
        } catch ( PDOException $e ) {
            print 'Exception!: ' . $e->getMessage();
        }
        $pdo = null;
    }
   
    public function SetAnswerOnLocation($location, $answer)
    {
        $servername = "vagrant";
        $username = "root";
        $password = "root";
        $dbname = "groepswerk";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // statement to insert the answer on the specific location
            $statement=$conn->exec('INSERT INTO Locations (answer) WHERE location = $location
            VALUE ($answer)');
            //print all modified rows
            print ("$statement row(s) modified");

            // uniek token genereren?
        }
        catch(PDOException $e)
        {
            echo 'Exception:' . $e->getMessage();
        }
        $conn = null;
    }
 }
