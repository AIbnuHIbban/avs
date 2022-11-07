<aside class="main-sidebar sidebar-light-primary elevation-3">
    <a href="{{url('dashboard')}}" class="brand-link d-flex justify-content-center">
        <img src="{{asset('logo/anindya_logo.webp')}}" alt="Anindya Logo" class="brand-image">
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            @switch(auth()->user()->role)
                @case('admin')
                    @include('navigations.nav_admin')
                    @break
                @default
                    @include('navigations.nav_member')
            @endswitch
        </nav>
    </div>
</aside>