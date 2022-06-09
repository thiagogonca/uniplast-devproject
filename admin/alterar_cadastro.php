<?php        
	
	include 'conexao.php';

	mysql_query("SET NAMES 'utf8'"); 
    $cod_produto    = $_POST["campoCD_PRODUTO"];
	$produto        = $_POST['campoDS_PRODUTO'];
    $linha          = $_POST['campoDS_LINHA'];	
	$cor            = $_POST['campoDS_COR'];
	$material       = $_POST['campoDS_MATERIAL'];
	$aplic_produto  = $_POST['campoDS_APLIC_PRODUTO'];
	$detalhes       = $_POST['campoDS_DETALHES'];
     
	$SQL = "UPDATE produtos SET DS_PRODUTO = '$produto', DS_LINHA = '$linha', DS_COR = '$cor', DS_MATERIAL = '$material', DS_APLIC_PRODUTO = '$aplic_produto', DS_DETALHES = '$detalhes' where CD_PRODUTO = '$cod_produto'";

	if ($SQL < 0) {
 		   die('Problema na alteração:'.mysql_error());    
 	}	
 	else{
		$executa = mysql_query($SQL);	
		echo "<script>alert('Registro alterado com sucesso');</script>";
		echo "<script>window.location='consulta_uniplast.php'</script>";	
	}	

?>