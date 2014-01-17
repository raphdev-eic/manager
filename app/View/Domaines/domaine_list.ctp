<?php $this->start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Domaines</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Lists</li>
</ul>
<!-- Heading -->
<div class="heading-buttons">
	<h1>Domaines EiC <span>Add Domaines</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'Domaines', 'action' => 'DomaineAdd')); ?>" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add Domaines</a>
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
						<th>Nom du Domaine</th>
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
						<td><?php echo $list['Domaine']['name']; ?></td>
						<td class="center">
							<a href="<?php echo $this->Html->url(array('controller' => 'Domaines', 'action' => 'DomaineEdit',$list['Domaine']['id'])); ?>" class="btn btn-primary btn-icon glyphicons edit"><i></i> Editer</a>
							</td>
						<td class="center"><a href="<?php echo $this->Html->url(array('controller' => 'Domaines', 'action' => 'DomaineDelete',$list['Domaine']['id'])); ?>" class="btn btn-warning btn-icon glyphicons delete"><i></i>Delete</a></td>
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