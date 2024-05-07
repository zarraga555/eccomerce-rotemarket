<button
    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
    <div class="pr-2 text-xs align-right">
        <label id="time"></label> <br>
        {{ Auth::user()->name }}
    </div>
    <img class="h-8 w-8 rounded-full object-cover"
         src="{{ Auth::user()->profile_photo_url }}"
         alt="{{ Auth::user()->name }}" />
</button>
