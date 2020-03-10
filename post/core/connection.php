<?php
 try {
    $pdo = new PDO('mysql:host=localhost;dbname=baby', 'root', '');
     
} catch (PDOException $e) {
    print "Connetion Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
