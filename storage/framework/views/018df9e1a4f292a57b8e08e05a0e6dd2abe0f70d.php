<?php $__env->startSection('conteudo'); ?>
<?php if(!empty($produtos->id)): ?>
<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Fotos</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($produtos as $p): ?>
        <tr>
            <td><?php echo e($p->nome); ?></td>
            <td><?php echo e($p->descricao); ?></td>
            <td></td>
            <td></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<div class="alert alert-danger">Não há produtos cadastrados!</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>