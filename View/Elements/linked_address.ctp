<div class="address linked">
	<?php
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('name1');
		echo $this->Form->input('name2');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('postal_code');
		echo $this->Form->input('country');
		echo $this->Form->input('foreign_key', array('type' => 'hidden'));
		echo $this->Form->input('foreign_table', array('type' => 'hidden'));
	?>
</div>