<nav class="sidebar ">



    <header>
        <div class="image-text flex flex-col justify-center items-center">
            <span class="image" style="height: auto; width:90px;">
                <img src="/assets/images/logo.png" style="height: auto; width:90px;" alt="logo">
            </span>
            <div class="text header-text text-center ">
                <span class="empresa">Empresa S.R.L</span>
                <span class="sistema">Administración</span>
            </div>

        </div>

        <i class="fa-solid fa-chevron-right toggle"></i>
    </header>
    <div class="menu-bar">
        <div class="menu">

            {{-- <li class="search-box">
                <i class="fa-solid fa-magnifying-glass icon"></i>
                <input type="text" placeholder="Buscar.." class="searchopacity searchinput">
            </li> --}}
            <ul class="menu-link">
                <li class="nav-link">
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        wire:navigate>
                        <i class="fa-solid fa-house-chimney icon"></i>
                        <span class="text nav-text">Inicio</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('profile.show', ['id' => 0, 'edit' => 0]) }}"
                        class="{{ request()->routeIs('profile.show') ? 'active' : '' }}" wire:navigate>
                        <i class="fa-solid fa-users icon"></i>
                        <span class="text nav-text">Pacientes</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.show') ? 'active' : '' }}" wire:navigate>
                        <i class="fa-solid fa-calendar-alt icon"></i>
                        <span class="text nav-text">Agenda</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.show') ? 'active' : '' }}" wire:navigate>
                        <i class="fa-regular fa-folder-open icon"></i>
                        <span class="text nav-text">Catálogos</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.show') ? 'active' : '' }}" wire:navigate>
                        <i class="fa-solid fa-hand-holding-medical icon"></i>
                        <span class="text nav-text">Servicios</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.show') ? 'active' : '' }}" wire:navigate>
                        <i class="fa-solid fa-qrcode icon"></i>
                        <span class="text nav-text">Promo Codes</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.show') ? 'active' : '' }}" wire:navigate>
                        <i class="fa-brands fa-telegram icon"></i>
                        <span class="text nav-text">Novedades</span>
                    </a>
                </li>



            </ul>
        </div>
        <hr>

        <div>
            <li class="nav-link">
                <a href="{{ route('profile.show') }}" class="{{ request()->routeIs('profile.show') ? 'active' : '' }}"
                    wire:navigate>
                    <i class="fa-solid fa-shield-halved icon"></i>
                    <span class="text nav-text">Roles</span>
                </a>
            </li>
            <li class="nav-link">
                <a href="{{ route('profile.show') }}" class="{{ request()->routeIs('profile.show') ? 'active' : '' }}"
                    wire:navigate>
                    <i class="fa-solid fa-user-shield icon"></i>
                    <span class="text nav-text">Admin</span>
                </a>
            </li>
            <li class="nav-link">
                <a href="{{ route('profile.show') }}" class="{{ request()->routeIs('profile.show') ? 'active' : '' }}"
                    wire:navigate>
                    <i class="fa-solid fa-users icon"></i>
                    <span class="text nav-text">Usuarios</span>
                </a>
            </li>
        </div>
        <hr>

        <div class="bottom-content">
            <li class="">
                <a href="#"  wire:navigate onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket icon"></i>
                    <span class="text nav-text">Salir</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <li class="mode">
                <div href="#" class="moon-sun">
                    <i class="fa-solid fa-moon icon moon"></i>
                    <i class="fa-regular fa-sun icon sun"></i>

                </div>
                <span class="mode-text text">Modo Oscuro</span>
                <div class="toggle-switch bg-transparent">
                    <span class="switch bg-transparent"></span>
                </div>
            </li>
        </div>
    </div>


</nav>


@push('scripts')
    <script>
        document.querySelector('.toggle').addEventListener('click', () => {

            var sidebar = document.querySelector('.sidebar');
            var body = document.querySelector('.body');
            sidebar.classList.toggle('close');
            cabecera = body.querySelector('.cabecera');
            // width: calc(100% - 250px); en cabecera
            cabecera.style.width = sidebar.classList.contains('close') ? 'calc(100% - 88px)' : 'calc(100% - 250px)';
            /*search.classList.toggle('searchopacity');*/
        });


        document.querySelector('.toggle-switch').addEventListener('click', () => {
            // Realizar una solicitud AJAX a la ruta Laravel para cambiar el tema



            var sidebar = document.querySelector('.sidebar');
            var body = document.querySelector('.body');
            body.classList.toggle('dark2');
            var modeText = sidebar.querySelector('.mode-text');
            if (body.classList.contains('dark2')) {
                modeText.textContent = 'Modo Claro';
                document.querySelector('.body').classList.add('dark2')
                document.documentElement.classList.add('dark')
                localStorage.theme = 'dark'
            } else {
                modeText.textContent = 'Modo Oscuro';
                document.querySelector('.body').classList.remove('dark2')
                document.documentElement.classList.remove('dark')
                localStorage.theme = 'light'
            }





        });
        //const search = sidebar.querySelector('.searchinput');
        //const searchBtn = sidebar.querySelector('.search-box');
        // agregar evento para que la cabecera cambie de tamaño a calc(100% - 250px)

        /*searchBtn.addEventListener('click', () => {
            sidebar.classList.remove('close');
            search.classList.remove('searchopacity');
        });*/
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalButton");

        // Get the button that closes the modal
        var closeBtn = document.getElementById("closeModalButton");

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "flex";
        }

        // When the user clicks on close button, close the modal
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endpush
