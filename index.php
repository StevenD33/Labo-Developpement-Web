<?php

//connxion à la base de donnéees 
$dbuser = "root";
$dbpswd = "root";
$dbhost = "localhost";
$dbname = "chat";


$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser, $dbpswd);

$req = $db->query('SELECT * FROM messages');
$results = $req->fetchAll(PDO::FETCH_ASSOC);
print_r($results);


$username= "john";
$message= "oui";
$req = $db->prepare('INSERT INTO messages(username,content) VALUES (?,?)');
$req->execute([$username,$message]);





echo '<pre>';
print_r($results);
echo '</pre>';