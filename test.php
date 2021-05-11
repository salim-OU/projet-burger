<?php
        try
        {
            $database = new PDO('mysql:host=localhost;dbname=store;charset=utf8','root','');
            $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e)
        {
            die('ERROR: '.$e->getMessage());
        }
        $database = new PDO('mysql:host=localhost;dbname=store;charset=utf8','root','');
        $results = $database->query('SELECT first_name FROM customers');
        while ($row=$results->fetch()){
            echo $row['first_name'].'<br>';

        }
?>
