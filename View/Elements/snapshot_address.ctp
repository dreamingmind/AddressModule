<?php $adr_id = 'address-' . str_replace(array('.', ' '), '', microtime()); ?>

<div class="address snapshot">
	<div id="<?php echo $adr_id ?>" class="display toggle <?php echo $adr_id ?>">
		<?php
		echo $this->Html->para(NULL, $this->request->data['Address']['name1']);
		if (!empty($this->request->data['Address']['name2'])) {
			echo $this->Html->para(NULL, $this->request->data['Address']['name2']);
		}
		if (!empty($this->request->data['Address']['address2'])) {
			echo $this->Html->para(NULL, $this->request->data['Address']['address2']);
		}
		echo $this->Html->para(NULL, $this->request->data['Address']['address1']);
		echo $this->Html->para(NULL, "{$this->request->data['Address']['city']} {$this->request->data['Address']['state']}  {$this->request->data['Address']['postal_code']}");
		echo $this->Html->para(NULL, $this->request->data['Address']['country']);
		?>
	</div>
	<div class="edit <?php echo $adr_id ?>">
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
</div>