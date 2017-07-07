<div class="sensors view">
<h2><?php  __('Sensor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sensor['Sensor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Illumination'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sensor['Sensor']['illumination']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sensor', true), array('action' => 'edit', $sensor['Sensor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sensor', true), array('action' => 'delete', $sensor['Sensor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sensor['Sensor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
