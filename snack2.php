<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 
$name = key_exists("name", $_GET) ? trim($_GET["name"]) : false;
$email = key_exists("email", $_GET) ? trim($_GET["email"]) : false;
$age = key_exists("age", $_GET) ? trim($_GET["age"]) : false;

if((strlen($name)) >= 3 && strpos($email, "@") !== false && strpos($email, ".") !== false && is_numeric($age)){
    echo "accesso riuscito";
} else {
    echo "accesso negato";
} 

/* if(strpos($email, "@") !== false && strpos($email, ".") !== false) {
    echo "accesso riuscito";
} else {
    echo "accesso negato";
}

if(is_numeric($age)){
    echo "accesso riuscito";
} else {
    echo "accesso negato";
} */
?>