
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">// <![CDATA[
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'id');
	data.addColumn('number', 'illumination');

	<?php foreach ($sensors as $sensor): ?>

	data.addRows([
					['<?php echo h($sensor['Sensor']['id']); ?>', <?php echo h($sensor['Sensor']['illumination']); ?>]
				]);
	<?php endforeach; ?>
	var options = {
		title:'Illumination'
	};

var chart = new google.visualization.LineChart(document.getElementById('piechart'));
chart.draw(data, options);
}
google.setOnLoadCallback(drawChart);


// ]]></script></pre>
<div id="piechart" style="width: 900px; height: 500px;"></div>

<div class="sensors index">
	<h2><?php __('Sensors');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('illumination');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sensors as $sensor):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sensor['Sensor']['id']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['illumination']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sensor['Sensor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sensor['Sensor']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sensor['Sensor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sensor['Sensor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('action' => 'add')); ?></li>
	</ul>
</div>
