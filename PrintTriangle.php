
<?php 

include "DrawTriangle.php";
	
	/**
	* @author Mohammad Abulebbe
	* Class PrintTriangle to print the triangle 
	*/
	class PrintTriangle{

		/**
		* @author Mohammad Abulebbeh
		* @param $rows
		* @return initilize object of DrawTriangle, and call the draw method, return triangle of stars
		*/
		public function __construct($rows)
		{
			$DrawTriangle = new DrawTriangle();
			$triangle = $DrawTriangle->draw($rows);
		}
	}
		// Check if the number of rows is given
		if(empty($argv[1]))
		{
			echo "Please specify the number of rows \n";
			die();
		}

		// Check if the given parameter is numeric
		elseif(!is_numeric($argv[1])){
			echo "Please enter integer number \n";
			die();
		}
		// Rounding the number 
		$rows = round($argv[1]);

		//Finally print the triangle of stars
		$PrintTriangle = new PrintTriangle($rows);

