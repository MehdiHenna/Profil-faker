<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();
include "views/head.php";
?>
	
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

<?php
	include "views/body.php";
?>