<?php $this->start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>ranks</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Lists</li>
</ul>
<!-- Heading -->
<div class="heading-buttons">
	<h1>ranks EiC <span>Add ranks</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'ranks', 'action' => 'RankAdd')); ?>" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add ranks</a>
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
						<th>Nom Du grade.</th>
						<th>Minimum</th>
						<th>Maximum</th>
						<th>Niveau</th>
						<th>Prix d'adhesion</th>
						<th>Membership</th>
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
						<td><?php echo $list['Rank']['name']; ?></td>
						<td><?php echo $list['Rank']['Min']; ?></td>
						<td><?php echo $list['Rank']['max']; ?></td>
						<td><?php echo $list['Rank']['etoile']; ?></td>
						<td><?php echo $list['Rank']['price']; ?></td>
						<td><?php echo $list['Rank']['membership']; ?></td>
						<td class="center">
							<a href="<?php echo $this->Html->url(array('controller' => 'Ranks', 'action' => 'RankEdit',$list['Rank']['id'])); ?>" class="btn btn-primary btn-icon glyphicons edit"><i></i> Editer</a>
							</td>
						<td class="center"><a href="<?php echo $this->Html->url(array('controller' => 'Ranks', 'action' => 'RankDelete',$list['Rank']['id'])); ?>" class="btn btn-warning btn-icon glyphicons delete"><i></i> Delete</a></td>
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