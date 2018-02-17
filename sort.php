<?php

/**
 * Created-by = Alberto Kato.
 * Created-on = February 17th, 2018.
 */

class Sort {

	CONST ASCENDING_ORDER  = 'ascending';
	CONST DESCENDING_ORDER = 'descending'; 

	/**
	 * bubleSort
	 * @param  Array &$arrayToSort
	 * @param  String $order  ascending || descending
	 * @return Bool           true || false
	 */
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

			return true;
		}
		else {
			echo "Invalid parameter.";
			return false;
		}
	}


	/**
	 * selectionSort
	 * @param  Array &$arrayToSort
	 * @param  String $order      ascending || descending
	 * @return Bool               true || false
	 */
	public function selectionSort(&$arrayToSort,$order = self::ASCENDING_ORDER)
	{
		if (!empty($arrayToSort) && is_array($arrayToSort)) {
			
			if ($order == self::ASCENDING_ORDER) {
				for ($i=0; $i < count($arrayToSort) ; $i++) { 
					
					$minValueIndex = $i;
					
					for ($j=($i+1); $j < count($arrayToSort) ; $j++) { 
						
						if ($arrayToSort[$j] < $arrayToSort[$minValueIndex]) {
							$minValueIndex = $j;
						}	
					}

					if ($arrayToSort[$i] != $arrayToSort[$minValueIndex]) {
						$aux = $arrayToSort[$minValueIndex];
						$arrayToSort[$minValueIndex] = $arrayToSort[$i];
						$arrayToSort[$i] = $aux;
					}
				}
			}
			else {
				//DESCENDING_ORDER
				for ($i=0; $i < count($arrayToSort) ; $i++) { 
					
					$maxValueIndex = $i;
					
					for ($j=($i+1); $j < count($arrayToSort) ; $j++) { 
						
						if ($arrayToSort[$j] > $arrayToSort[$maxValueIndex]) {
							$maxValueIndex = $j;
						}	
					}

					if ($arrayToSort[$i] != $arrayToSort[$maxValueIndex]) {
						$aux = $arrayToSort[$maxValueIndex];
						$arrayToSort[$maxValueIndex] = $arrayToSort[$i];
						$arrayToSort[$i] = $aux;
					}
				}
			}

			return true;
		}
		else {
			echo "Invalid parameter.";
			return false;	
		}
	}

}

$numbers = [89,4,55,90,84,33,1];

$sort = new Sort();

echo "<pre>";
print_r($numbers);
echo "</pre>";

var_dump($sort->selectionSort($numbers));

echo "<pre>";
print_r($numbers);
echo "</pre>";

var_dump($sort->selectionSort($numbers,Sort::DESCENDING_ORDER));

echo "<pre>";
print_r($numbers);
echo "</pre>";


