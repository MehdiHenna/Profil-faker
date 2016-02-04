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
	
	<?php
		for ($i=0; $i<10; $i++) {
			echo $faker->name, "\n";
		}
	?>
	
	<p>
	<?php	
		echo $faker->address;
	?>	
	</p>
	<p>
	<?php
		echo $faker->text;
	?>	
	</p>

			
</body>
</html>