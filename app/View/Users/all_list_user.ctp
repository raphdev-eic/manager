<!--dynamic table-->
<?php  echo $this->Html->css('assets/advanced-datatable/media/css/demo_page',null,array('inline'=>false)); ?>
<?php  echo $this->Html->css('assets/advanced-datatable/media/css/demo_table',null,array('inline'=>false)); ?>
<?php  echo $this->Html->css('assets/data-tables/DT_bootstrap',null,array('inline'=>false)); ?>
<div class="row">
            <div class="col-sm-12">
                <?php $this->Session->flash(); ?>
                <section class="panel">
                    <header class="panel-heading">
                       Liste des Investisseurs
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'UserList')); ?>" class="btn btn-info"><i class="fa fa-group"> Non Activer</i></a>
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
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
                                    <th>Pays</th>
                                    <th class="hidden-phone">Détail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($alluser as $v => $t): ?>
                                    <tr>
                                        <td><?php echo ucfirst($t['User']['lastname']).' '.ucfirst($t['User']['firstname']); ?></td>
                                        <td><?php echo $t['Rank']['name']; ?></td>
                                        <td><span class="label label-danger"><?php echo $t['Rank']['membership']; ?></span></td>
                                        <td><span class="label label-success"><?php echo $t['User']['date_debut']; ?></span></td>
                                        <td><span class="label label-danger"><?php echo $t['User']['date_expire']; ?></span></td>
                                        <td><?php echo $t['Team']['name']; ?></td>
                                        <td class="center hidden-phone"><?php echo $t['Program']['name']; ?></td>
                                        <td class="center hidden-phone"><span class="label label-success"><?php echo $t['User']['parts']; ?></span></td>
                                        <td class="center hidden-phone"><?php echo $t['Country']['name']; ?></td>
                                        <td class="center hidden-phone"><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'ViewUser',$t['User']['id'])); ?>" class="btn btn-danger"> Voir </a></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nom complet.</th>
                                    <th>Grade</th>
                                    <th>Membership</th>
                                    <th>Date d'ajout</th>
                                    <th>Date d'expiration</th>
                                    <th>Club d'investissement</th>
                                    <th>Programme</th>
                                    <th>Nombre de parts</th>
                                    <th class="hidden-phone">Détail</th>
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