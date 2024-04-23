<nav  x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
{{--                <!-- Hamburger -->--}}
{{--                <x-eccomerce.admin.navbar.responsive.hamburger/>--}}
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="shrink-0 flex items-center">
                    <x-eccomerce.admin.navbar.desktop.logo/>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <x-eccomerce.admin.navbar.desktop.menu/>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <x-eccomerce.admin.navbar.desktop.user/>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <x-eccomerce.admin.navbar.desktop.title_dropdown title="Account Management"/>
                            <!-- Authentication -->
                            <x-eccomerce.admin.navbar.desktop.logout/>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </div>

{{--    <!-- Responsive Navigation Menu -->--}}
{{--    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--        <x-eccomerce.admin.navbar.responsive.nav_link/>--}}
{{--        <!-- Responsive Settings Options -->--}}
{{--        <div class="pt-4 pb-1 border-t">--}}
{{--            <div class="flex items-center px-4">--}}
{{--                <x-eccomerce.admin.navbar.responsive.user/>--}}
{{--            </div>--}}

{{--            <div class="mt-3 space-y-1">--}}
{{--                <!-- Account Management -->--}}
{{--                <!-- Authentication -->--}}
{{--                <x-eccomerce.admin.navbar.responsive.logout/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</nav>

<script type="text/javascript">
    function showTime() {
        var date = new Date(),
            utc = new Date(Date(
                date.getFullYear(),
                date.getMonth(),
                date.getDate(),
                date.getHours(),
                date.getMinutes(),
                date.getSeconds()
            ));

        document.getElementById('time').innerHTML = utc.toLocaleTimeString();
    }

    setInterval(showTime, 1000);
</script>
