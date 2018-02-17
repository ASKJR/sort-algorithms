<?php

class Sort {

	CONST ASCENDING_ORDER  = 'ascending';
	CONST DESCENDING_ORDER = 'descending'; 

	public function bubleSort(&$arrayToSort,$order = self::ASCENDING_ORDER)
	{
		if (!empty($arrayToSort) && is_array($arrayToSort)) {
			do {
				
				$swap = false;
				
				if ($order == self::ASCENDING_ORDER) {
					for ($i=0; $i < count($arrayToSort)-1 ; $i++) { 
						if ($arrayToSort[$i] > $arrayToSort[$i+1]) {
							$aux = $arrayToSort[$i+1];
							$arrayToSort[$i+1] = $arrayToSort[$i];
							$arrayToSort[$i] = $aux;
							$swap = true; 
						}		
					}
				}
				else {
					//DESCENDING_ORDER
					for ($i=0; $i < count($arrayToSort)-1 ; $i++) { 
						if ($arrayToSort[$i] < $arrayToSort[$i+1]) {
							$aux = $arrayToSort[$i+1];
							$arrayToSort[$i+1] = $arrayToSort[$i];
							$arrayToSort[$i] = $aux;
							$swap = true; 
						}		
					}	
				}
								
			} while($swap);
		}
		else {
			echo "Invalid parameter.";
		}
	}
}

$numbers = [89,4,55,90,84,33,1];

$sort = new Sort();

echo "<pre>";
print_r($numbers);
echo "</pre>";

$sort->bubleSort($numbers);

echo "<pre>";
print_r($numbers);
echo "</pre>";

$sort->bubleSort($numbers,Sort::DESCENDING_ORDER);

echo "<pre>";
print_r($numbers);
echo "</pre>";


