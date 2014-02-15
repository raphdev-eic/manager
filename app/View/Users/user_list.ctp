<!--dynamic table-->
<?php  echo $this->Html->css('assets/advanced-datatable/media/css/demo_page',null,array('inline'=>false)); ?>
<?php  echo $this->Html->css('assets/advanced-datatable/media/css/demo_table',null,array('inline'=>false)); ?>
<?php  echo $this->Html->css('assets/data-tables/DT_bootstrap',null,array('inline'=>false)); ?>
<div class="row">
            <div class="col-sm-12">
                <?php $this->Session->flash(); ?>
                <section class="panel">
                    <header class="panel-heading">
                        Operation non validées
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'AllListUser')); ?>" class="btn btn-success"><i class="fa fa-group"> Afficher tous les investisseurs</i></a>
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Parrain</th>
                                    <th>Email du parrain</th>
                                    <th class="hidden-phone">code</th>
                                    <th class="hidden-phone">Bordereau</th>
                                    <th>Editer</th>
                                    <th>Activer</th>
                                    <th class="hidden-phone">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listuser as $list): ?>
                                    <tr>
                                        <td><?php echo $list['User']['firstname'].' '.$list['User']['lastname']; ?></td>
                                        <td><?php echo $list['User']['email']; ?></td>
                                        <td><?php echo $list['ParentUser']['firstname'].' '.$list['ParentUser']['lastname']; ?></td>
                                        <td><?php echo $list['ParentUser']['email']; ?></td>
                                        <td><?php echo $list['User']['code']; ?></td>
                                        <?php if(!empty($list['Bordero'][0]['url'])): ?>
                                        <td><span class="label label-info"><?php echo 'Un bordero à été fourni'; ?></span></td>
                                        <?php else: ?>
                                        <td><span class="label label-warning"><?php echo 'Aucun bordero'; ?></span></td>
                                        <?php endif; ?>
                                        <td>
                                           <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'EditerUser',$list['User']['id'])); ?>" class="btn btn-warning btn-icon glyphicons circle_plus"><i></i> Editer
                                           </a>
                                        </td>
                                        <?php if($list['User']['status'] == 0): ?>
                                            <td>
                                                <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'ActiveUser',
                                                $list['User']['id'])); ?>" class="btn btn-danger btn-icon glyphicons thumbs_down"><i></i> Activer</a>
                                            </td>
                                        <?php else: ?>
                                            <td>
                                            <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'DesactiveUser',
                                                $list['User']['id'])); ?>" class="btn btn-success btn-icon glyphicons thumbs_down"><i></i> Désactiver</a>
                                            </td>
                                       <?php endif; ?>
                                        <td class="center hidden-phone">
                                            <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'DesactiveUser',
                                                $list['User']['id'])); ?>" class="btn btn-success btn-icon glyphicons thumbs_down"><i></i> Supprimer</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Parrain</th>
                                    <th>Email du parrain</th>
                                    <th class="hidden-phone">code</th>
                                    <th>Editer</th>
                                    <th>Activer</th>
                                    <th class="hidden-phone">Supprimer</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
<!--dynamic table-->
<?php  echo $this->Html->script('assets/advanced-datatable/media/js/jquery.dataTables', array('inline'=>false)); ?>
<?php  echo $this->Html->script('assets/data-tables/DT_bootstrap', array('inline'=>false)); ?>