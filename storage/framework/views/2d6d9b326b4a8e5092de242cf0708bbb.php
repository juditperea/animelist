

<?php $__env->startSection('title', $serie->titulo); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-4xl mx-auto mt-8 grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <img src="<?php echo e(asset('img/' . $serie->imagen)); ?>" alt="<?php echo e($serie->titulo); ?>" class="w-full h-auto mb-8">
            <h2 class="text-xl font-semibold mb-2"><?php echo e($serie->titulo); ?></h2> 
            <p class="text-gray-700 mb-2"><?php echo e($serie->descripcion); ?></p>
            <p class="text-gray-700 mb-2">Género: <?php echo e($serie->genero->nombre); ?></p>
            <p class="text-gray-700 mb-2">Año de lanzamiento: <?php echo e($serie->ano_inicio); ?></p>
            <p class="text-gray-700 mb-2">Acabada en: <?php echo e($serie->ano_fin); ?></p>
            <p class="text-gray-700 mb-2">Temporadas: <?php echo e($serie->numero_temporadas); ?></p>
            <p class="text-gray-700 mb-4">Capítulos: <?php echo e($serie->numero_episodios); ?></p>
        </div>

        <div class="col-span-1">
            <h3 class="text-lg font-semibold mb-4">Comentarios</h3>
            <?php if($serie->comments): ?>
        <?php $__currentLoopData = $serie->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border-b border-gray-200 mb-4 pb-4">
                <p class="text-gray-700"><?php echo e($comment->user->name); ?> dijo:</p>
                <p class="text-gray-700"><?php echo e($comment->comment); ?></p>
                <form action="<?php echo e(route('series.comment.delete', ['id' => $comment->id])); ?>" method="POST" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este comentario?')" class="m-2 bg-red-500 text-white px-1 py-1 rounded-md hover:bg-red-600">Eliminar comentario</button>
                </form>
                     <!-- editar
                    <a href="<?php echo e(route('series.comment.edit', ['id' => $comment->id])); ?>" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Editar</a>
                <form action="<?php echo e(route('series.comment.delete', ['id' => $comment->id])); ?>" method="POST" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este comentario?')" class="m-2 bg-red-500 text-white px-1 py-1 rounded-md hover:bg-red-600">Eliminar comentario</button>
                        </form>
                         <form action="<?php echo e(route('series.comment.edit', ['id' => $comment->id])); ?>" method="POST">
                
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-4">
                            <textarea name="comment" id="comment" rows="2" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500"><?php echo e($comment->comment); ?></textarea>
                            
                        </div>
                        
                    </form>
                        --->
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
             <p>No hay comentarios disponibles.</p>
            <?php endif; ?>

            <form action="<?php echo e(route('series.comment.store', ['id' => $serie->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium text-gray-700">Agregar Comentario</label>
                    <textarea name="comment" id="comment" rows="3" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>
                <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded">Enviar Comentario</button>
            </form>
            <!-- listas -->
            <form action="<?php echo e(route('series.agregarLista', ['serie' => $serie->id])); ?>" method="POST" class="mt-4">
    <?php echo csrf_field(); ?>
    <label for="lista" class="block text-sm font-medium text-gray-700">Agregar a lista:</label>
    <div class="mt-1">
        <select name="lista" id="lista" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-black">
            <option value="por_ver">Por ver</option>
            <option value="visto">Visto</option>
            <option value="viendo">Viendo</option>
        </select>
    </div>
    <input type="hidden" name="serieId" id="serieId" value="<?php echo e($serie->id); ?>">
    <button type="submit" class="inline-block mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Agregar a lista</button>
    <a href="<?php echo e(route('listas.series.mostrar')); ?>" class="inline-block mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ver listas</a>
</form>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\1DAW\M04 LLENGUATGE DE MARQUES\XAMPP2\php\animelist\resources\views/detalleserie.blade.php ENDPATH**/ ?>