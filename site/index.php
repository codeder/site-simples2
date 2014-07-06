<?php

$rotas = ['site', 'empresa', 'produtos', 'servicos', 'contato','sucesso'];
$rota = basename($_SERVER['REQUEST_URI']);

function pages($rota,$rotas) { 	
 	if (in_array($rota, $rotas)) {
 		$error = 0; 
    	return require_once ($rota.".php");
	}
	else{
		$error = 1;
		return require_once ("site.php");
	}
}

?>

<?php require_once ("header.php");?>
<?php pages($rota,$rotas); ?>
<?php require_once ("footer.php");?>