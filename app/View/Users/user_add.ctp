<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i>Dashbord</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Users</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Add Users</li>
</ul>
<?php echo $this->Session->flash(); ?>
<h1>SuperAdmin</h1>
<div class="innerLR">

	<!-- Form -->
	<?php echo $this->Form->create('User',array('class'=>'form-horizontal margin-none','id'=>'formSuperAdmin')) ?>
		<!-- Widget -->
		<div class="widget widget-heading-simple widget-body-gray">
		    <?php echo $this->Form->input('code',array('type'=>'hidden')); ?>
		    <?php echo $this->Form->input('key_auth',array('type'=>'hidden')); ?>
			<!-- Widget heading -->
			<div class="widget-head">
				<h4 class="heading">Ajouter un utilisateur particulier</h4>
			</div>
			<!-- // Widget heading END -->
			
			<div class="widget-body">
			
				<!-- Row -->
				<div class="row-fluid">
					<!-- Column -->
					<div class="span6">
					
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="username">Nom d'utilisateur</label>
							<div class="controls">
                              <?php echo $this->Form->input('username',array('class'=>'span12','id'=>'username','label'=>false,'placeholder'=>'Nom utilisateur')); ?>
							</div>
						</div>
						<!-- // Group END -->

						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="email">Adresse email</label>
							<div class="controls">
                              <?php echo $this->Form->input('email',array('class'=>'span12','id'=>'email','label'=>false,'placeholder'=>'email')); ?>
							</div>
						</div>
						<!-- // Group END -->

						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="firstname">Nom</label>
							<div class="controls">
                              <?php echo $this->Form->input('firstname',array('class'=>'span12','id'=>'firstname','label'=>false,'placeholder'=>'Nom'));
                              ?>
							</div>
						</div>
						<!-- // Group END -->

						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="lastname">Prenom</label>
							<div class="controls">
                              <?php echo $this->Form->input('lastname',array('class'=>'span12','id'=>'lastname','label'=>false,'placeholder'=>'Prenom'));
                              ?>
							</div>
						</div>
						<!-- // Group END -->

						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="date_nais">Date de naissance</label>
							<div class="controls">
							   <div class="input-append date" id="datetimepicker4">
                                <?php echo $this->Form->input('date_nais',array('class'=>'span7','id'=>'date_naise','label'=>false,
                                	'minYear' => date('Y') - 70,'maxYear' => date('Y') + 35));
                                	?>
                               </div>
							</div>
						</div>
						<!-- // Group END -->

						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="parts">Nombre de parts</label>
							<div class="controls">
                              <?php echo $this->Form->input('parts',array('class'=>'span12','id'=>'parts','label'=>false,'placeholder'=>'nombre de parts'));
                              ?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="program_id">Programme</label>
							<div class="controls">
	                           <?php echo $this->Form->input('program_id',array('class'=>'span12','id'=>'program_id','label'=>false,'options'=>$program));?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="country_id">Pays de residence</label>
							<div class="controls">
	                           <?php echo $this->Form->input('country_id',array('class'=>'span12','id'=>'country_id','label'=>false,'options'=>$country));?>
							</div>
						</div>
						<!-- // Group END -->


					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="date_debut">Date de Debut Membership</label>
							<div class="controls">
								<div class="input-append date" id="datetimepicker4">
	                              <?php echo $this->Form->input('date_debut',array('class'=>'span7','id'=>'date_debut','label'=>false,
	                              	'minYear' => date('Y') - 70,'maxYear' => date('Y') + 35));
	                              ?>
								</div>	
							</div>
						</div>
						<!-- // Group END -->

					</div>
					<!-- // Column END -->
					
					<!-- Column -->
					<div class="span6">
					
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="password">Mot de passe</label>
							<div class="controls">
                              <?php echo $this->Form->input('password',array('class'=>'span12','id'=>'password','label'=>false,'placeholder'=>'Password'));
                              ?>
							</div>
						</div>
						<!-- // Group END -->
						
						<!-- Group -->
						<div class="control-group">
							<label class="control-label" for="pass">Confirmer le mot de passe</label>
							<div class="controls">
                              <?php echo $this->Form->input('pass',array('class'=>'span12','id'=>'pass','label'=>false,'placeholder'=>'Confirmer mot de passe','type'=>'password'));
                              ?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="rank_id">Grade</label>
							<div class="controls">
	                           <?php echo $this->Form->input('rank_id',array('class'=>'span12','id'=>'rank_id','label'=>false,'options'=>$rank));?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="team_id">Club d'investissement</label>
							<div class="controls">
	                           <?php echo $this->Form->input('team_id',array('class'=>'span12','id'=>'team_id','label'=>false,'options'=>$team));?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="domaine_id">Domaine d'activité</label>
							<div class="controls">
	                           <?php echo $this->Form->input('domaine_id',array('class'=>'span12','id'=>'domaine_id','label'=>false,'options'=>$domaine));?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="role_id">Role</label>
							<div class="controls">
	                           <?php echo $this->Form->input('role_id',array('class'=>'span12','id'=>'role_id','label'=>false,'options'=>$role));?>
							</div>
						</div>
						<!-- // Group END -->


					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="city_id">Ville de residence</label>
							<div class="controls">
	                           <?php echo $this->Form->input('city_id',array('class'=>'span12','id'=>'city_id','label'=>false,'options'=>$city));?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="sexe">Genre</label>
							<div class="controls">
	                           <?php echo $this->Form->input('sexe',array('class'=>'span6','id'=>'city_id','label'=>false,'options'=>array('Masculin','Feminin')));?>
							</div>
						</div>
						<!-- // Group END -->

					     <!-- Group -->
						<div class="control-group">
							<label class="control-label" for="date_expire">Date de expiration Membership</label>
							<div class="controls">
								<div class="input-append date" id="datetimepicker4">
	                              <?php echo $this->Form->input('date_expire',array('class'=>'span7','id'=>'date_expire','label'=>false,'minYear' => date('Y') - 70,'maxYear' => date('Y') + 35));
	                              ?>
								</div>	
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
					<?php echo $this->Form->button('Enregistrer',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?>
					<?php echo $this->Form->button('Cancel',array('class'=>'btn btn-icon btn-default glyphicons circle_remove','type'=>'reset')); ?>
				</div>
				<!-- // Form actions END -->
				
			</div>
		</div>
		<!-- // Widget END -->
    <?php echo $this->Form->end(); ?>
	<!-- // Form END -->
	
</div>	