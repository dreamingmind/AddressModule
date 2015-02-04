<section id="<?php echo "dynamic_review_{$alias}_{$address['id']}" ?>">
	<div class="review">
	<?php
	echo "\t\n" . $this->Form->button('Edit', array('type' => 'button', 'class' => 'edit')) . "\n";
	echo "\t\n" . $this->element('AddressModule.simple_address_review', array('alias' => $alias, 'address' => $address)) . "\n";
	?>
	</div>
	<div class="fieldset">
	<?php
		echo "\t\t\n" . $this->element('AddressModule.simple_address_fieldset', array('alias' => $alias, 'address' => $address)) . "\n";
		echo "\t\n" . $this->Form->button('Submit', array('type' => 'button', 'class' => 'submit btn blue')) . "\n";
		echo "\t\n" . $this->Form->button('Cancel', array('type' => 'button', 'class' => 'cancel btn ltGrey')) . "\n";
	?>
	</div>
</section>
