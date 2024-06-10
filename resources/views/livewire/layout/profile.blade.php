<div class="flex  flex-row   gap-4 items-center justify-center text-icon relative">
    <i class="fa-solid fa-bell icon" style="cursor: pointer"></i>
    <div class="border-2 "
        style="width: 50px; height: 50px; background-image:url('{{ auth()->user()->profile_photo_url != 'user.jpg' && auth()->user()->profile_photo_url != null ? auth()->user()->profile_photo_url : URL::asset('assets/images/default-user.jpg') }}'); border-radius:50%;background-size: cover;background-position: center;">
    </div>

    <i class="fa-solid fa-chevron-down icon" style="cursor: pointer"></i>

    <div class="dropdown-menu absolute top-14 -left-[80px] w-[200px] shadow-black/40 shadow-lg rounded-xl overflow-hidden pt-5">
        <ul class="  w-[200px]">
            <div class="mt-1  ">
                <div class="px-3 w-full flex justify-end text-color-normal-perfil ">

                    <div class="text-[20px]">Hola, {{ auth()->user()->name }}</div>
                </div>
            </div>
            <li class=" hover:text-white p-0 text-sm"><a href="{{ route('profile.show') }}" wire:navigate
                    class="w-full flex flex-row gap-2 items-center justify-start text-color-normal px-3 py-1">
                    {{ __('Profile') }}
                </a>
            <li class="hover:text-white p-0 text-sm">
                <a href="#" wire:navigate onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="w-full flex flex-row gap-2 items-center justify-start text-color-normal px-3 py-1">
                    {{ __('Salir') }}
                </a>

            </li>


        </ul>
    </div>

</div>

@push('scripts')
    <script>
        document.querySelector('.fa-chevron-down').addEventListener('click', function() {
            this.classList.toggle('active2');
            var body = document.querySelector('.body');
            var faChevronDown = body.querySelector('.fa-chevron-down');
            faChevronDown.style.transform = faChevronDown.style.transform ? '' : 'rotate(180deg)';
        });
    </script>
@endpush
