<?php
	$this->Form->create("{$alias}_{$address['id']}");
	echo $this->element('AddressModule.simple_address_review', array('alias' => $alias, 'address' => $address));
	echo $this->Form->button('Edit', array('class' => "edit_{$address['id']}", 'bind' => 'edit_address'));
	echo $this->element('AddressModule.simple_address_input', array('alias' => $alias, 'address' => $address));
	$this->Form->end();

?>
