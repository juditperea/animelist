

<?php $__env->startSection('title', 'Películas'); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="text-xl font-bold mb-4 mt-6">Películas</h2>
    <a href="<?php echo e(route('peliculas.create')); ?>" class="inline-block bg-red-600 text-white ml-8 px-4 py-2 rounded-md hover:bg-red-600" >Añadir película</a>

    <ul>
        <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <img src="<?php echo e(asset('img/' . $pelicula->imagen)); ?>" alt="<?php echo e($pelicula->titulo); ?>">
                <div class="details">
                    <strong class="font-bold text-red-600"><?php echo e($pelicula->titulo); ?></strong>
                    <p>Género: <?php echo e($pelicula->genero->nombre); ?></p>
                    <p>Año de lanzamiento: <?php echo e($pelicula->ano_lanzamiento); ?></p>
                    <a href="<?php echo e(route('peliculas.show', ['id' => $pelicula->id])); ?>" class="bg-blue-500 text-white py-2 px-2 rounded">Ver detalles</a>
                    <a href="<?php echo e(route('peliculas.edit', ['id' => $pelicula->id])); ?>" class="bg-yellow-500 text-white py-2 px-2 rounded">Editar</a>
                    <form action="<?php echo e(route('peliculas.delete', ['id' => $pelicula->id])); ?>" method="POST" class="inline-block">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta película?')" class="bg-red-500 text-white py-2 px-2 rounded">Eliminar</button>
                    </form>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1DAW\M04 LLENGUATGE DE MARQUES\XAMPP2\php\animelist\resources\views/peliculas.blade.php ENDPATH**/ ?>