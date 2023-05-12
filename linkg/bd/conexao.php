<?php define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'linkg');
define('PORT', '3306');

try {
    $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";port=".PORT."; ",USER, PASS);
    
} catch (PDOException $e) {
    
} 

?>