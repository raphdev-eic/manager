<?php $this->Start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> Manager EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Pages</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Valeur Liquidative</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Add Value</li>
</ul>

<!-- Heading -->
<div class="heading-buttons">
	<h1>Value EiC <span>Add Value</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'Values', 'action' => 'ValueList')); ?>" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> return to List</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<?php $this->end(); ?>
<div class="innerLR">
	<?php echo $this->Form->create('Value'); ?>
	<!-- Widget -->
	<div class="widget widget-tabs widget-tabs-gray">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Description</a></li>
			</ul>
		</div>
		<!-- // Widget heading END -->
		<div class="widget-body">
			<div class="tab-content">
				<!-- Description -->
				<div class="tab-pane active" id="productDescriptionTab">
					<!-- Row -->
					<div class="row-fluid">
						<!-- Column -->
						<div class="span3">
							<strong>Valeur VL</strong>
							<p class="muted">Ajouter la Valeur de la VL</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Valeur VL </label>
							<?php echo $this->Form->input('current',array('id'=>'inputTitle','class'=>'span6','placeholder'=>'valeur de la vl','label'=>false)); ?>
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
					<hr class="separator bottom" />
					<!-- Row -->

					<!-- Row -->
					<div class="row-fluid">
						<!-- Column -->
						<div class="span3">
							<strong>Funds</strong>
							<p class="muted">Choix du fond aux quels il appartient</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Funds</label>
							<?php echo $this->Form->input('fund_id',array('id'=>'fund_id','class'=>'span6','options'=>$list,'label'=>false)); ?>
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
					<hr class="separator bottom" />
					<!-- Row -->
				</div>
				<!-- // Description END -->
			</div>
		</div>
	</div>

	<!-- Bottom buttons -->
	<div class="heading-buttons">
		<div class="buttons pull-right" style="margin: 0;">
			<?php echo $this->Form->button('Cancel',array('type'=>'reset','class'=>'btn btn-default btn-icon glyphicons share')); ?><i></i>
			<?php echo $this->Form->button('Save',array('class'=>'btn btn-primary btn-icon glyphicons ok_2')); ?><i></i>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- // Bottom buttons END -->
	<?php echo $this->Form->end(); ?>
</div>
