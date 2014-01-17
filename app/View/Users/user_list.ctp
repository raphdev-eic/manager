<?php $this->start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Users</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Lists</li>
</ul>
<!-- Heading -->
<div class="heading-buttons">
	<h1>Users EiC <span>Add Users</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'UserAdd')); ?>" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add Users</a>
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
						<th>Nom complet.</th>
						<th>Grade</th>
						<th>Membership</th>
						<th>Date d'ajout</th>
						<th>Date d'expiration</th>
						<th>Club d'investissement</th>
						<th>Programme</th>
						<th>Nombre de parts</th>
						<th>Status</th>
						<th>Details</th>
						<th>Editer</th>
					</tr>
				</thead>
				<!-- // Table heading END -->
				<!-- Table body -->
				<tbody>
					<?php foreach ($listuser as $list): ?>
					<!-- Table row -->
					<tr class="gradeX">
						<td><?php echo $list['User']['firstname'].' '.$list['User']['lastname']; ?></td>
						<td><?php echo $list['Rank']['name']; ?></td>
						<td><?php echo $list['Rank']['membership']; ?></td>
						<td><span class="label label-success"><?php $date = new DateTime( $list['User']['created']); echo $date->format('d/m/Y');?></span></td>
						<td><span class="label label-important"><?php $dates = new DateTime( $list['User']['date_expire']); echo $dates->format('d/m/Y');?></span></td>

						<?php if(!empty($list['Bordero'][0]['url'])): ?>
						<td><span class="label label-info"><?php echo 'Un bordero à été fourni'; ?></span></td>
					    <?php else: ?>
					    <td><span class="label label-warning"><?php echo 'Aucun bordero'; ?></span></td>
					    <?php endif; ?>

						<td><?php echo $list['Team']['name']; ?></td>
						<td><?php echo $list['Program']['name']; ?></td>
						<td><span class="badge badge-success"><?php echo $list['User']['parts']; ?></span></td>

						<?php if($list['User']['status'] == 0): ?>
							<td class="center">
								<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'ActiveUser',
								$list['User']['id'])); ?>" class="btn btn-danger btn-icon glyphicons thumbs_down"><i></i> Activer</a>
							</td>
					    <?php else: ?>
							<td class="center">
							<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'DesactiveUser',
								$list['User']['id'])); ?>" class="btn btn-success btn-icon glyphicons thumbs_down"><i></i> Désactiver</a> 
							</td>
					   <?php endif; ?>

							<td class="center">
								<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'ViewUser',
								$list['User']['id'])); ?>" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Détails</a>
							</td>
							<td class="center">
								<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'EditerUser',
								$list['User']['id'])); ?>" class="btn btn-warning btn-icon glyphicons circle_plus"><i></i> Editer</a>
							</td>
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