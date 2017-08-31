<?php
/**
* @author Mohammad Abulebbeh
* Class DrawTriangle to handle the methodglogy of drawing the triangle
*/
class DrawTriangle{

	/**
	* @author Mohammad Abulebbeh
	* @param $rows
	* @return triangle of stars
	*/
	public function draw($rows)
	{	
		// Check the number of rows
		if($rows <= 0)
		{
			echo "Please enter a number more than ZERO";
			die;
		}

		// Loop depends upong the no. of given rows
		for($size = 1; $size <= $rows; $size++)
		{
			// Loop for the spaces
			for($counter = $rows; $counter >= $size; $counter--)
			{
				echo ' ';

			}

			// Loop for the stars
			for($counter = 1; $counter <= $size * 2 - 1; $counter++)
			{
				echo "*";
			}

			// Print new line
			echo "\n";
		}
	}
}
