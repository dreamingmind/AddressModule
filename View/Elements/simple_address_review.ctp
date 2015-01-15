<!-- AddressModule.Address View/Elements/simple_address_review.ctp -->
	<address class="<?php echo "{$alias}_review_{$address['id']} address_review"; ?>">
		<p class="label"><?php echo "$alias Address"; ?></p>
		<p class="name1"><?php echo $address['name1']; ?></p>	
		<p class="address1"><?php echo $address['address1']; ?></p>

	<?php if ($address['address2']) : ?>
		<p class="address2"><?php echo $address['address2']; ?></p>
	<?php endif; ?>

		<p class="city_state_postal_code">
			<span class="city"><?php echo $address['city']; ?></span>&nbsp;
			<span class="state"><?php echo $address['state']; ?></span>&nbsp;&nbsp;
			<span class="postal_code"><?php echo $address['postal_code']; ?></span>
		</p>	
	</address>
<!-- END AddressModule.Address View/Elements/simple_address_review.ctp END -->
