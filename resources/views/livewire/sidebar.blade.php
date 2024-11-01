<div class="bg-white flex flex-col justify-between xs:w-full sm:w-9/12">

    <!-- Encabezado de la aplicación en la barra lateral -->
    <div>
        <div class="border-b-2 xs:p-2">
            <h2 class="my-6 text-center font-bold xs:text-xs sm:text-base lg:text-xl">
                <e class="text-amber-600 font-bold">Task Manager</e> App
            </h2>
        </div>

        <!-- Menú de navegación dentro de la barra lateral -->
        <div class="mt-4 flex flex-col items-center justify-center">
            <!-- Elementos de menú con estilos interactivos al pasar el cursor -->
            <p class="cursor-pointer font-bold w-5/6 p-3 rounded-xl flex items-center hover:bg-amber-200 hover:text-amber-800 xs:text-xxs xs:flex-col sm:flex-row sm:text-xs lg:text-base">
                <i class="fa-solid fa-calendar xs:mr-0 xs:mb-1 sm:mr-2 sm-mb-0"></i>
                Plan
            </p>
            <!-- Cada item del menú sigue la misma estructura  -->
            <p class="cursor-pointer font-bold w-5/6 p-4 rounded-xl flex items-center hover:bg-amber-200 hover:text-amber-800 xs:text-xxs xs:flex-col xs:text-center sm:flex-row sm:text-xs sm:text-start lg:text-base">
                <i class="fa-solid fa-file-lines xs:mr-0 xs:mb-1 sm:mr-2 sm-mb-0"></i>
                Task list
            </p>
            <p class="cursor-pointer font-bold w-5/6 p-3 rounded-xl flex items-center hover:bg-amber-200 hover:text-amber-800 xs:text-xxs xs:flex-col sm:flex-row sm:text-xs lg:text-base">
                <i class="fa-solid fa-folder xs:mr-0 xs:mb-1 sm:mr-2 sm-mb-0"></i>
                Projects
            </p>
            <p class="cursor-pointer font-bold w-5/6 p-3 rounded-xl flex items-center hover:bg-amber-200 hover:text-amber-800 xs:text-xxs xs:flex-col sm:flex-row sm:text-xs lg:text-base">
                <i class="fa-solid fa-tag xs:mr-0 xs:mb-1 sm:mr-2  sm-mb-0"></i>
                Tags
            </p>
        </div>
    </div>

    <!-- Botón de logout en la parte inferior de la barra lateral -->
    <div class="font-bold w-5/6 p-4 flex items-center xs:text-xs xs:flex-col sm:text-base lg:flex-row">
        <div class="bg-black text-white rounded-lg flex justify-center items-center xs:mb-1 xs:w-7 xs:h-8 sm:h-9 sm:w-12 lg:mr-3">
            <i class="fa-solid fa-door-closed xs:text-xxs sm:text-sm"></i>
        </div>
        <p>Logout</p>
    </div>
    
</div>