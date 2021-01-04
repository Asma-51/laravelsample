<?php $__env->startSection('content'); ?>

<h1>contact page</h1>

<?php if(count($person)): ?>
<ul>

    <?php foreach($person as $p): ?>
    <li>
    <?php echo e($p); ?>

    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
alert("helooooo");
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>