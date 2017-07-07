<div class="sensors form">
<?php echo $this->Form->create('Sensor');?>
	<fieldset>
		<legend><?php __('Add Sensor'); ?></legend>
	<?php
		echo $this->Form->input('illumination');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sensors', true), array('action' => 'index'));?></li>
	</ul>
</div>