<?php

var_dump($_GET);
if(!empty($_GET) AND isset ($_GET)){
    if($_GET['admin'] == "Admin" AND $_GET['password'] == "pass"){
    echo "Vous avez découvert le trésor";

}else {
    echo "veuillez soumetttre le formulaire avec une valeur fdp";
}
}


?>


<form method="">
    <input name="admin" value=""/>
    <input type ="password" name="password" value="">
    <button type="submit">Valider</button>
</form>