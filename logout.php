<?php
//Inicializa sessao
session_start();

//Destroi as variaveis
unset($_SESSION[ID]);
unset($_SESSION[Nome]);
session_destroy();

//Redirciona para a tela de login
Header("Location: Login.php");

?>