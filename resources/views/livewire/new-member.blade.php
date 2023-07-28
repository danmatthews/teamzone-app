<div class="text-white">

    <div class="h-12 px-4 flex items-center justify-between bg-gray-950">

        <div class="flex space-x-3 items-center">

            <a wire:navigate href="/"
                class="rounded-full bg-indigo-600 p-1 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>

            </a>

            <h1 class="font-extrabold uppercase tracking-widest">Teamzone</h1>

        </div>


    </div>



    <form action="" wire:submit="save" class="px-6 py-3 space-y-6">



        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-100">Name</label>
            <div class="mt-2">
                <input type="text" wire:model="name" name="email" id="email"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                    placeholder="John Appleseed">

                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>



        <div>
            <label for="timezone" class="block text-sm font-medium leading-6 text-gray-100">Timezone</label>
            <select wire:model="timezone" id="timezone" name="timezone"
                class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="">--Choose--</option>
                @foreach ($timezones as $continent => $countries)
                    <optgroup label="{{ $continent }}">

                        @foreach ($countries as $timezone => $country)
                            <option value="{{ $timezone }}">{{ $country }}</option>
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
            @error('timezone')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
            class="rounded-md bg-indigo-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</button>
    </form>

</div>
