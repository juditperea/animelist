

<?php $__env->startSection('title', 'Páginas Anime'); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="text-xl font-bold mb-4 mt-6">Páginas Anime</h2>

    <?php if($paginas->isEmpty()): ?>
        <p>No hay páginas anime disponibles.</p>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $paginas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pagina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h3 class="text-lg font-semibold"><?php echo e($pagina->nombre); ?></h3>
                    <p class="text-gray-700"><?php echo e($pagina->descripcion); ?></p>
                    <a href="<?php echo e($pagina->url); ?>" class="text-blue-500 hover:underline"><?php echo e($pagina->url); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1DAW\M04 LLENGUATGE DE MARQUES\XAMPP2\php\animelist\resources\views/paginas.blade.php ENDPATH**/ ?>