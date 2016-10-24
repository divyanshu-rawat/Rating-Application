<?php
if (!empty($_POST['rate']) && !empty($_POST['item'])) {

	$rate = $_POST['rate'] == 'up' ? 1 : 0;
	$item = (int)$_POST['item'];
	
	try {
		
		require_once('../classes/Rate.php');
		$objRate = new Rate();

			echo json_encode($objRate->isSubmitted($item));
		
		if (!$objRate->isSubmitted($item)) {
			
			// echo json_encode('divyanshu');

			if ($objRate->addRating($item, $rate)) {
				echo json_encode(array('error' => false));
			} else {
				echo json_encode(array('error' => true, 'case' => 4));
			}
			
		} else {
			echo json_encode(array('error' => true, 'case' => 3));
		}
		
	} catch(Exception $e) {
		echo json_encode(array('error' => true, 'case' => 2));
	}

} else {
	echo json_encode(array('error' => true, 'case' => 1));
	// echo $_POST['rate'];
	// echo $_POST['item'];
}