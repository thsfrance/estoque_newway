<?php $__env->startSection('conteudo'); ?>
<?php foreach($errors->all() as $error): ?>
    <?php echo e($error); ?>

<?php endforeach; ?>
<form action="/produtos/salva" method="POST">
    <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
    <input type='hidden' name='<?php echo e(empty($p) ? "" : "id"); ?>' value='<?php echo e(empty($p) ? "" : $p->id); ?>'>
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" name='nome' />
    </div>
    <div class="form-group">
        <label>Descrição:</label>
        <input type="text" class="form-control" name='descricao' />
    </div>
    <div class='form-group'>
        <button class='btn btn-primary form-control' type='submit'>Salvar</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>