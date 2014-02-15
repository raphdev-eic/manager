            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Formulaire d'activation des investisseurs
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <?php echo $this->Form->create('User',array('class'=>'cmxform form-horizontal','id'=>'formActiveUser')) ?>
                                    <?php echo $this->Form->input('email',array('type'=>'hidden')); ?>
                                    <?php echo $this->Form->input('code',array('type'=>'hidden')); ?>
                                    <?php echo $this->Form->input('key_auth',array('type'=>'hidden')); ?>
                                    <div class="form-group">
                                        <label for="parts" class="control-label col-lg-3">Nombre de parts</label>
                                        <div class="col-lg-2">
                                            <?php echo $this->Form->input('parts',array('class'=>'form-control','id'=>'parts','label'=>false,'placeholder'=>'nombre de parts')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="program_id" class="control-label col-lg-3">Programme</label>
                                        <div class="col-lg-6">
                                            <?php echo $this->Form->input('program_id',array('class'=>'form-control','id'=>'program_id','label'=>false,'options'=>$program));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date_debut" class="control-label col-lg-3">Date de Debut Membership</label>
                                        <div class="col-lg-3">
                                              <?php echo $this->Form->input('date_debut',array('class'=>'form-control','id'=>'date_debut','label'=>false,
                                                'minYear' => date('Y') - 70,'maxYear' => date('Y') + 35));
                                              ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date_expire" class="control-label col-lg-3">Date de expiration Membership</label>
                                        <div class="col-lg-3">
                                        <?php echo $this->Form->input('date_expire',array('class'=>'form-control','id'=>'date_expire','label'=>false,'minYear' => date('Y') - 70,'maxYear' => date('Y') + 35));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="Role" class="control-label col-lg-3">Role</label>
                                        <div class="col-lg-6">
                                            <?php echo $this->Form->input('role_id',array('class'=>'form-control','id'=>'role_id','label'=>false,'options'=>$role));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="rank_id" class="control-label col-lg-3">Niveau d'investissement</label>
                                        <div class="col-lg-6">
                                        <?php echo $this->Form->input('rank_id',array('class'=>'form-control','id'=>'rank_id','label'=>false,'options'=>$rank));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="team_id" class="control-label col-lg-3">Club d'investissement</label>
                                        <div class="col-lg-6">
                                            <?php echo $this->Form->input('team_id',array('class'=>'form-control','id'=>'team_id','label'=>false,'options'=>$team));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <?php echo $this->Form->button('Etape 2',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?>
                                            <?php echo $this->Form->button('Cancel',array('class'=>'btn btn-icon btn-default glyphicons circle_remove','type'=>'reset')); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->end(); ?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>