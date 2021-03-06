
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
            <li><?= $this->Html->link('Nouvelles interventions', ['action' => 'new_interventions']) ?></li>
            <li class="active"><?= $this->Html->link("Candidatures", ['action' => 'candidated_interventions']) ?></li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?= $this->Flash->render() ?>
        <h1 class="page-header">Interventions pour lesquelles j'ai postulé</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <!-- Date-Heure-Theme-Lycee - Adresse Lycée -Détails  -->
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Dates possibles') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Thème') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Lycée') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Adresse') ?></th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($interventions as $intervention): ?>
                    <tr>
                        <td><?= h($intervention->id) ?></td>
                        <td><?= h($intervention->possible_dates) ?></td>
                        <td><?= h($intervention->type_intervention) ?></td>
                        <td><?= h($intervention->teacher->highschool->highschool_name) ?></td>
                        <td><?= h($intervention->teacher->highschool->highschool_address) ?></td>
                        <td><?= $this->Html->link('Détails', ['controller' => 'Interventions', 'action' => 'view_candidate', $intervention['id']]) ?></td>
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
    
