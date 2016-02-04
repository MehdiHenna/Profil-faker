<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Profil-faker</title>
</head>
<body>
	<p>
	<?php
		echo $faker->name;
	?>
	</p>
	<p>
	<?php	
		echo $faker->address;
	?>	
	</p>
			
</body>
</html>