<form method="POST" action="{{ route('logout') }}" x-data>
    @csrf

    <x-dropdown-link href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>
