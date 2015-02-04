<section id="<?php echo "dynamic_review_{$alias}_{$address['id']}" ?>">
	<div class="review">
	<?php
	echo "\t\n" . $this->Form->button('Edit', array('type' => 'button', 'class' => 'edit')) . "\n";
	echo "\t\n" . $this->element('AddressModule.simple_address_review', array('alias' => $alias, 'address' => $address)) . "\n";
	?>
	</div>
	<div class="fieldset">
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
			echo "\t\n" . $this->Form->button('Submit', array('type' => 'button', 'class' => 'submit btn blue')) . "\n";
			echo "\t\n" . $this->Form->button('Cancel', array('type' => 'button', 'class' => 'cancel btn ltGrey')) . "\n";
		?>
		</fieldset>
	</div>
</section>
