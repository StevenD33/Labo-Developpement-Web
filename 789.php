
<?php








//pour que la réponse s'affiche comme du texte brut
//header('Content-Type: text/plain');
 
/*partie à modifier*/
//$name = 'http://challenge01.root-me.org/web-serveur/ch8/';//nom du site
 
//pour ne pas devoir calculer à la main la longueur du corps, on le stocke dans une variable et la fonction strlen() nous la donne.
//$data = 'variable=valeur&variable2=valeur2';
 
//la requête
//$envoi  = "HEAD /fichier.ext / HTTP/1.1\r\n";
//$envoi .= "Host: ".$name."\r\n";
//$envoi .= "Connection: open\r\n";
//$envoi .= "Content-type: application/x-www-form-urlencoded\r\n";
//$envoi .= "Content-Length: ".strlen($data)."\r\n\r\n";
//$envoi .= $data."\r\n";
/*/partie à modifier*/
 
/*ouverture socket*/
//$//socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//if($socket < 0){
//       die('FATAL ERROR: socket_create() : " '.socket_strerror($socket).' "');
//}
 
//if (socket_connect($socket,gethostbyname($name),80) < 0){
//        die('FATAL ERROR: socket_connect()');
//}
/*/ouverture socket*/
 
/*envoi demande*/
//if(($int = socket_write($socket, $envoi, strlen($envoi))) === false){
 //       die('FATAL ERROR: socket_write() failed, '.$int.' characters written');
//}
/*/envoi demande*/
 
/*lecture réponse*/
//$reception = '';
//while($buff = socket_read($socket, 2000)){
 //  $reception.=$buff;
//}
//echo $reception;
/*/lecture réponse*/
 
//socket_close($socket);




//function Axel($prenom)
//{
//	if ($prenom != "Axel")
//	{
//	 	echo "mouais bof";	
//  } 
//	elseif ($prenom == "Axel" ){
			
//	}
//		{ echo "c'est stylé"; }
//}


//Axel("Axel");


//$tab = array ('BM', 'lambo', 'porsche',);


//for ($i=0; $i < 3 ; $i++) { 
//	echo "j'ai ça".$tab[$i] . '<br />';
//}

include "menu.php";

?>