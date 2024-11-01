<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/4139b148cd.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<body>
     <!-- Contenedor principal que ocupa toda la pantalla en alto y ancho -->
    <div class="flex screen-height w-screen">
      <!-- Barra lateral izquierda que ocupa el 25% del ancho de pantalla -->
        <div class="flex justify-center xs:w-1/5 sm:w-1/4">
            @livewire('sidebar')
        </div>

      <!-- Área de contenido principal, ocupa el 75% restante del ancho de la pantalla -->
        <div class="flex flex-col xs:w-4/5 sm:w-3/4">

             <!-- Barra de navegación superior -->
            @livewire('header')

            <!-- Sección de tareas y estadísticas -->
            <div class="h-full flex justify-center items-center overflow-hidden">
                <div class="w-11/12 bg-white rounded-3xl flex flex-col xs:h-40/41 xs:p-5 xs:mr-0 sm:h-11/12 sm:mr-16 sm:p-9">

                    <!-- Detalles de la tarea principal -->
                    @livewire('task-details')

                    <!-- Sección de estadísticas y tareas -->
                    <div class="no-scrollbar h-2/3 flex justify-between xs:mt-4 xs:flex-col xs:overflow-y-scroll sm:flex-row sm:mt-2 sm:items-center">

                        <!-- Columna de estadísticas -->
                        @livewire('stats')

                        <!-- columna de las tareas -->
                        @livewire('task-list')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>