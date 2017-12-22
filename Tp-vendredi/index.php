<?php
	require_once "autoload.php";

	use FormBuilder\FormBuilder;

	$fb = new FormBuilder();
	$form = $fb->buildContactForm();
  $fb2 = new LoginForm();
  $form2 = $fb2->buildLoginForm();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body> <p> Joyeuses Fêtes de fin d'année </P>
	<?php $form->draw();
        $form2->draw();?>
</body>
</html>
