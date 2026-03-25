<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- IZQUIERDA -->
            <div class="flex">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route(auth()->user()->getRutaDashboard()) }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- LINKS -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <!-- Panel normal -->
                    <x-nav-link :href="route(auth()->user()->getRutaDashboard())">
                        Panel
                    </x-nav-link>

                    <!-- Panel de control con validación -->
                    <a href="#"
                       onclick="verificarAccesoMultiple([5,6,7,8], '{{ route('welcome') }}')"
                       class="inline-flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 cursor-pointer">
                        Panel Control
                    </a>

                </div>
            </div>

            <!-- USUARIO -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm text-gray-500 bg-white hover:text-gray-700">
                            <div>{{ Auth::user()->name }}</div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <!-- Ir a inicio -->
                        <a href="{{ route('welcome') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Ir a inicio
                        </a>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                Cerrar sesión
                            </button>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

            <!-- HAMBURGUESA -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="p-2 text-gray-400 hover:text-gray-500">
                    ☰
                </button>
            </div>

        </div>
    </div>

    <!-- MENSAJE SIN RECARGA -->
    <div id="mensajeAcceso"
         style="display:none"
         class="fixed top-5 right-5 bg-red-500 text-white px-4 py-2 rounded shadow">
        🚫 No tienes permiso
    </div>

</nav>

<!-- SCRIPT -->
<script>
    function verificarAccesoMultiple(rolesPermitidos, ruta) {

        let rolUsuario = {{ auth()->user()->rol }};

        if (rolesPermitidos.includes(rolUsuario)) {
            window.location.href = ruta;
        } else {
            let mensaje = document.getElementById('mensajeAcceso');
            mensaje.style.display = 'block';

            setTimeout(() => {
                mensaje.style.display = 'none';
            }, 2500);
        }
    }
</script>
