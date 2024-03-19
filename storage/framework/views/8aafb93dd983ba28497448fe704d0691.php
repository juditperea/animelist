

<?php $__env->startSection('title', 'Actualizar Película'); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="text-xl font-bold mb-4 mt-6">Actualizar Película</h2>
    <form action="<?php echo e(route('peliculas.update', ['id' => $pelicula->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
            <input type="text" name="imagen" id="imagen" value="<?php echo e($pelicula->imagen); ?>" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo e($pelicula->titulo); ?>" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500"><?php echo e($pelicula->descripcion); ?></textarea>
        </div>
        <div class="mb-4">
            <label for="genero_id" class="block text-sm font-medium text-gray-700">Género ID</label>
            <input type="number" name="genero_id" id="genero_id" value="<?php echo e($pelicula->genero_id); ?>" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="ano_lanzamiento" class="block text-sm font-medium text-gray-700">Año de Lanzamiento</label>
            <input type="number" name="ano_lanzamiento" id="ano_lanzamiento" value="<?php echo e($pelicula->ano_lanzamiento); ?>" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
            <select name="estado" id="estado" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
                <option value="Visto" <?php echo e($pelicula->estado === 'Visto' ? 'selected' : ''); ?>>Visto</option>
                <option value="Pendiente" <?php echo e($pelicula->estado === 'Pendiente' ? 'selected' : ''); ?>>Pendiente</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Película</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1DAW\M04 LLENGUATGE DE MARQUES\XAMPP2\php\animelist\resources\views/peliculasupdate.blade.php ENDPATH**/ ?>