	<fieldset class="<?php echo $alias; ?>">
		<legend><?php echo __("$alias Address"); ?></legend>
	<?php
		echo $this->Form->input("$alias.id", array('type' => 'hidden'));
		echo $this->Form->input("$alias.attention", array('label' => 'c/o', 'placeholder' => 'Attention or Care Of (optional)'));
		echo $this->Form->input("$alias.name1", array('label' => 'Name', 'placeholder' => 'Name (required)'));
		echo $this->Form->input("$alias.name2", array('label' => 'Building/Company', 'placeholder' => '(optional)'));
		echo $this->Form->input("$alias.address1", array('label' => 'Street Address', 'placeholder' => 'Address (required)'));
		echo $this->Form->input("$alias.address2", array('label' => 'Unit', 'placeholder' => 'Suite or unit (optional)'));
		echo $this->Form->input("$alias.city", array('placeholder' => '(required)'));
		echo $this->Form->input("$alias.state", array('placeholder' => '(required)'));
		echo $this->Form->input("$alias.postal_code", array('placeholder' => '(required)'));
		echo $this->Form->input("$alias.country", array('placeholder' => '(required)'));
		echo $this->Form->input("$alias.foreign_key", array('type' => 'hidden'));
		echo $this->Form->input("$alias.foreign_table", array('type' => 'hidden'));
	?>
	</fieldset>
