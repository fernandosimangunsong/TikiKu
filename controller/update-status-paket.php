<?php

include('db.class.php');
$bdd = new db(); 
$query = $bdd->execute('UPDATE users SET firstname="firstname2", lastname="lastname2" WHERE id=20');