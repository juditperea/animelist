<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - ANIMELIST</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black">
    <header class="py-4 px-6 bg-red-600">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-black">ANIMELIST</h1>
            <nav>
                <ul class="flex space-x-2">
                    <li><a href="/" class="btn hover:text-gray-400">Inicio</a></li>
                    <li><a href="/peliculas" class="btn hover:text-gray-400">Películas</a></li>
                    <li><a href="/series" class="btn hover:text-gray-400">Series</a></li>
                    <li><a href="<?php echo e(route('mis.listas')); ?>" class="btn hover:text-gray-400">Listas</a></li>
                    <li><a href="<?php echo e(route('paginasanime')); ?>" class="btn hover:text-gray-400">Páginas</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mx-auto mt-6">
        <div class="max-w-md mx-auto bg-red-400 p-6 rounded-md">
            <h2 class="text-xl font-bold text-black mb-4">Crear Serie</h2>
            <form action="<?php echo e(route('series.create')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="imagen" class="block text-sm font-medium text-black">Imagen</label>
                    <input type="text" name="imagen" id="imagen" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="titulo" class="block text-sm font-medium text-black">Título</label>
                    <input type="text" name="titulo" id="titulo" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="descripcion" class="block text-sm font-medium text-black">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500"></textarea>
                </div>
                <div class="mb-4">
                    <label for="genero_id" class="block text-sm font-medium text-black">Género ID</label>
                    <input type="number" name="genero_id" id="genero_id" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="ano_inicio" class="block text-sm font-medium text-black">Año de Inicio</label>
                    <input type="number" name="ano_inicio" id="ano_inicio" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="ano_fin" class="block text-sm font-medium text-black">Año de Fin</label>
                    <input type="number" name="ano_fin" id="ano_fin" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="estado" class="block text-sm font-medium text-black">Estado</label>
                    <select name="estado" id="estado" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                        <option value="Visto">Visto</option>
                        <option value="Viendo">Viendo</option>
                        <option value="Pendiente">Pendiente</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="numero_temporadas" class="block text-sm font-medium text-black">Número de Temporadas</label>
                    <input type="number" name="numero_temporadas" id="numero_temporadas" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="numero_episodios" class="block text-sm font-medium text-black">Número de Episodios</label>
                    <input type="number" name="numero_episodios" id="numero_episodios" class="mt-1 p-2 block w-full border border-gray-700 rounded-md focus:outline-none focus:border-indigo-500">
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Crear Serie</button>
            </form>
        </div>
    </div>
    
    <footer class="py-4 px-6 bg-red-600 mt-6">
        <nav>
            <ul class="flex space-x-6">
                <li><a href="/login" class="btn hover:text-gray-400">Inicia Sesión</a></li>
                <li><a href="/register" class="btn hover:text-gray-400">Regístrate</a></li>
                <li><a href="/google-auth/redirect" class="btn hover:text-gray-400">SSO Google</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
<?php /**PATH C:\1DAW\M04 LLENGUATGE DE MARQUES\XAMPP2\php\animelist\resources\views/seriescreate.blade.php ENDPATH**/ ?>