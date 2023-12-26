<?php

//Conecta com a base de dados
include 'DBConnection.php';

//Recebe os dados do Formulario
$user=$_POST['nome'];
$pass=$_POST['pass'];

//Verifica
$sql = mysqli_query($link,"SELECT * FROM utilizador WHERE Nome = '$user' AND Password = '$pass'") or die("ERRO NO COMANDO SQL");

//Linhas afectadas pela consulta

$row = mysqli_num_rows($sql);

//Verifica se devolveu algo

if($row ==0){
	$pag='index.php';
	$_SESSION['erro']=1;
	Header("Location:$pag");
}
else{
	$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
	
	$id = $row['id'];
	//inicializa a sessao
	
	session_start();
	
	//grava as variaveis na sessao
	
	$_SESSION['iduser'] = $id;
	$_SESSION['erro']=0;
	$_SESSION['utilizador']=0;
	
	if($id==0){
		Header("Location:indexadmin.php");
		
		
	}
	else{
		Header("Location:index.php");
	}
	
}//Fecha ELSE
	?>