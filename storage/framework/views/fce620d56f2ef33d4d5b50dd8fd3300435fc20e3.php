<?php $__env->startSection('conteudo'); ?>
<div class='container-fluid'>
    <form action='produto/'>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>