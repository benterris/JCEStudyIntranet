
<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li>
                <div align="center">
                <?=$this->Html->image('logo-XXX.jpg', ['alt' => 'C\'possible logo', 'class' => 'img-thumbnail', 'align' => 'center']) ?>
                </div>
            </li>
        </ul>
        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link('Accueil bénévoles', ['action' => 'accueil']) ?></li>
            <li class="active"><?= $this->Html->link('Mon historique', ['action' => 'old_interventions_volunteer']) ?></li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?= $this->Flash->render() ?>
        <h1 class="page-header">Historique de mes interventions réalisées</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Lycée') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Adresse') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Thème') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Pôle') ?></th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($interventions as $intervention): ?>
                    <tr>
                        <td><?= h($intervention->id) ?></td>
                        <td><?= h($intervention->date) ?></td>
                        <td><?= h($intervention->teacher->highschool->highschool_name) ?></td>
                        <td><?= h($intervention->teacher->highschool->address) ?></td>
                        <td><?= h($intervention->type_intervention) ?></td>
                        <td><?= h($intervention->pole) ?></td>
                        <td><?= $this->Html->link('Détails', ['controller' => 'Interventions', 'action' => 'view_completed_volunteer', $intervention['id']]) ?></td>
                    </tr>
            <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}')]) ?></p>
            </div>
        </div>
    </div>
</div>  
    
