<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i>Dashbord</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Accounts </li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Add Account</li>
</ul>
<?php echo $this->Session->flash(); ?>
<div class="innerLR">

	<!-- Form -->
	<?php echo $this->Form->create('Compte',array('class'=>'form-horizontal margin-none','id'=>'formAccountsUser')) ?>
		<!-- Widget -->
		<div class="widget widget-heading-simple widget-body-gray">
		    <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Informations du Compte bancaire  de investisseur</h4>
			</div>
			<!-- // Widget heading END -->

			<div class="widget-body">
				<!-- Row -->
				<div class="row-fluid">
					<!-- Column -->
					<div class="span6">
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="parts">Numero de comptes</label>
							<div class="controls">
                              <?php echo $this->Form->input('number',array('class'=>'span12','id'=>'number','label'=>false,'placeholder'=>'Numero de compte bancaire'));
                              ?>
							</div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->

					<!-- Column -->
					<div class="span6">
					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="rank_id">Nom de la Banque</label>
							<div class="controls">
	                           <?php echo $this->Form->input('bank',array('class'=>'span12','id'=>'bank','label'=>false,'placeholder'=>'Nom de la banque'));?>
							</div>
						</div>
						<!-- // Group END -->
					</div>
					<!-- // Column END -->

				</div>
				<!-- // Row END -->

				<hr class="separator" />

				<!-- Form actions -->
				<div class="form-actions">
					<?php echo $this->Form->button('Enregister et Terminer',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?>
					<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'UserList')); ?>" class="btn btn-icon btn-danger glyphicons circle_ok pull-right">Terminer</a>
				</div>
				<!-- // Form actions END -->
				
			</div>
		</div>
		<!-- // Widget END -->
    <?php echo $this->Form->end(); ?>
	<!-- // Form END -->
	
</div>	