 <?php 
				include 'DBConnection.php';
				if (isset($_POST["arquivar"])){
											$tof = $_POST["arquivar"]; 
											$query = mysqli_query($link,"UPDATE sugestao SET Arquivado='1' WHERE id=$tof;");
											}	
											header("Refresh:0; url=EditarSugestao.php");
											?>