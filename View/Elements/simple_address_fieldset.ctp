<!-- AddressModule.Address View/Elements/simple_address_input.ctp -->
	<fieldset class="<?php echo $alias; ?>">
		<legend><?php echo __("$alias Address"); ?></legend>
	<?php
		echo $this->Form->input("$alias.id", array('type' => 'hidden')) . "\n";
		echo $this->Form->input("$alias.name1", array('label' => 'Name', 'placeholder' => 'Name (required)')) . "\n\n";
		echo $this->Form->input("$alias.address1", array('label' => 'Street Address', 'placeholder' => 'Address (required)')) . "\n\n";
		echo $this->Form->input("$alias.address2", array('label' => 'Unit', 'placeholder' => 'Suite or unit (optional)')) . "\n\n";
		echo $this->Form->input("$alias.city", array('placeholder' => '(required)')) . "\n\n";
		echo $this->Form->input("$alias.state", array('placeholder' => '(required)')) . "\n\n";
		echo $this->Form->input("$alias.postal_code", array('placeholder' => '(required)')) . "\n\n";
		echo $this->Form->input("$alias.foreign_key", array('type' => 'hidden')) . "\n\n";
		echo $this->Form->input("$alias.foreign_table", array('type' => 'hidden')) . "\n\n";
	?>
	</fieldset>
<!-- END AddressModule.Address View/Elements/simple_address_input.ctp END -->
