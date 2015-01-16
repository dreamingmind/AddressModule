<?php 
	$jsonResult = array(
		'flash' => $this->Session->flash(),
		'section' => $this->element('simple_address_review_dynamic', array('address' => $this->request->data[$alias])),
		'result' => $result
	);
	echo json_encode($jsonResult);
?>