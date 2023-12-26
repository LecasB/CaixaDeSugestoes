<?php
include 'DBConnection.php';
	if((isset($_POST["id"])) && (isset($_POST["nome"])) && (isset($_POST["pass"]))){
		$fpass=$_POST["pass"];
		$id=$_POST["id"];
			 $query = mysqli_query($link,"update utilizador set Password='$fpass' where ID='$id';");
             if($query){
                          
                 }else{
           echo"Erro ao Actualizar!Erro:".mysqli_error()."";
              }
            }
			header("Refresh:0; url=Alterpass2.php");
			?>