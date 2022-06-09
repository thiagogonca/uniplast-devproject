<?php 
	include 'conexao.php';
	$sql="delete from carousel where id = '".$_GET["id"]."'";
	$query = mysql_query($sql);
	if(mysql_affected_rows() >=0){
		echo "<script>alert('Registro apagado com sucesso');</script>";
		echo "<script>window.location='banner.php'</script>";
	}
?>