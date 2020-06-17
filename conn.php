 <?php
    /**
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("") or die(mysql_error())
     */
    try {
        $strConnection = 'mysql:host=localhost;dbname=db1';
        $pdo = new PDO($strConnection, 'root', '');
    } catch (PDOException $e) {
        //throw $th;
        $msg = 'ERREUR PDO dans' . $e->getMessage();
        die($msg);
    }
    ?>