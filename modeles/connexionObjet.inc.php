<?php
function connexionObjet($base,$param) {
    
	require_once($param.".inc.php");
	$id = new mysqli(HOST,USER,PASS,$base);
        
        if (!$id) {
		echo "<script type=text/javascript>"
			."	alert('Connexion Impossible à la base')"
			."</script>";
		exit();
	}
	return $id;
}
?>
