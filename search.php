<?php 

$searchString = $_GET['searchTerm'];


header('Content-type: application/json');
print(json_encode([['employee_work_id' => '1234-5678',
	               'lastname' => 'Mones'], ['employee_work_id' => '2321-23232',
	               'lastname' => 'Salada', 'firstname' => 'ja']]
	               ));
?>
