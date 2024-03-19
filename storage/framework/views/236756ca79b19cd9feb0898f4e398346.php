

<?php $__env->startSection('title', 'Series'); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="text-xl font-bold mb-4 mt-6">Series</h2>
    <a class="inline-block bg-red-600 text-white ml-8 px-4 py-2 rounded-md hover:bg-red-600" href="<?php echo e(route('series.create')); ?>">Añadir serie</a>

    <ul>
        <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <img src="<?php echo e(asset('img/' . $serie->imagen)); ?>" alt="<?php echo e($serie->titulo); ?>">
                <div class="details">
                    <strong class="font-bold text-red-600"><?php echo e($serie->titulo); ?></strong>
                    <p>Género: <?php echo e($serie->genero->nombre); ?></p>
                    <p>Año de inicio: <?php echo e($serie->ano_inicio); ?></p>
                    <p>Año de fin: <?php echo e($serie->ano_fin); ?></p>
                    <a href="<?php echo e(route('series.show', ['id' => $serie->id])); ?>" class="bg-blue-500 text-white py-2 px-2 rounded">Ver detalles</a>
                    <a href="<?php echo e(route('series.edit', ['id' => $serie->id])); ?>" class="bg-yellow-500 text-white py-2 px-2 rounded">Editar</a>
                    <form action="<?php echo e(route('series.delete', ['id' => $serie->id])); ?>" method="POST" class="inline-block">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta serie?')" class="bg-red-500 text-white py-2 px-2 rounded">Eliminar</button>
                    </form>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1DAW\M04 LLENGUATGE DE MARQUES\XAMPP2\php\animelist\resources\views/series.blade.php ENDPATH**/ ?>