<form method="POST" action="{{ route('logout') }}" x-data>
    @csrf

    <x-responsive-nav-link href="{{ route('logout') }}"
                           @click.prevent="$root.submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>
