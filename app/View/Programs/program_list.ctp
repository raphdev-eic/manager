<?php $this->start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Programmes</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Lists</li>
</ul>
<!-- Heading -->
<div class="heading-buttons">
	<h1>Programme EiC <span>Add programme</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'Programs', 'action' => 'ProgramAdd')); ?>" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add Programme</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<?php $this->end(); ?>
<div class="innerLR">
	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">
		<div class="widget-body">
		
			<!-- Table -->
			<table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white">
			
				<!-- Table heading -->
				<thead>
					<tr>
						<th>Nom du programme.</th>
						<th>Prix minimum</th>
						<th>Prix maximum</th>
						<th>Editer</th>
						<th>Delete</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				<!-- Table body -->
				<tbody>
					<?php foreach ($list as $list): ?>
					<!-- Table row -->
					<tr class="gradeX">
						<td><?php echo $list['Program']['name']; ?></td>
						<td><?php echo $list['Program']['price_default']; ?></td>
						<td><?php echo $list['Program']['price_max']; ?></td>
						<td class="center">
							<a href="<?php echo $this->Html->url(array('controller' => 'Programs', 'action' => 'ProgramEdit',$list['Program']['id'])); ?>" class="btn btn-primary btn-icon glyphicons edit"><i></i> Editer</a>
							</td>
						<td class="center"><a href="<?php echo $this->Html->url(array('controller' => 'Programs', 'action' => 'ProgramDelete',$list['Program']['id'])); ?>" class="btn btn-warning btn-icon glyphicons delete"><i></i> Delete</a></td>
					</tr>
					<!-- // Table row END -->
					<?php endforeach ?>
				</tbody>
				<!-- // Table body END -->
			</table>
			<!-- // Table END -->
			
		</div>
	</div>
</div>