<div>
    <div class="min-h-screen bg-gray-900 space-y-4 text-gray-100">


        <livewire:components.header />


        @foreach ($members as $person)
            <div class="group bg-gray-800 inner-shadow relative">
                <div class="absolute inset-0 px-6 py-3 z-10 flex items-center">
                    <div class="space-x-3 text-xs flex items-center justify-center">
                        <button type="button"
                            class="rounded-full bg-red-600 px-2.5 py-1 text-xs font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Edit</button>
                        <button type="button"
                            class="rounded-full bg-indigo-600 px-2.5 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Info</button>

                    </div>
                </div>
                <div
                    class=" relative z-20 bg-gray-900 px-6 py-3 flex items-center space-x-4 group-hover:translate-x-[50%] transition group-hover:delay-500">
                    <div class="space-y-2 flex-1 flex space-x-6">
                        <div class="w-12 h-12 rounded-full bg-gray-700 relative">
                            <img class="w-12 h-12 block rounded-full"
                                src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ urlencode($person->name) }}"
                                alt="{{ $person->name }}">
                            <div
                                class="absolute w-8 h-8 -bottom-2 -right-2 rounded-full text-3xl flex items-center justify-center">
                                @if (now()->setTimezone($person->timezone)->format('h') > 8 &&
                                        now()->setTimezone($person->timezone)->format('h') < 18)
                                    ☀️
                                @else
                                    😴
                                @endif
                            </div>

                        </div>
                        <div>
                            <h2 class="font-semibold">{{ $person->name ?? null }} </h2>

                            <p class="font-normal text-sm text-gray-500">{{ $person->timezone }}</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-4xl font-light">{{ now()->setTimezone($person->timezone)->format('g:ia') }}
                        </p>
                    </div>

                </div>
            </div>
        @endforeach
        {{-- <button wire:click="truncate" type="button"
            class="rounded-md bg-blue-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Delete
            All</button> --}}
    </div>

</div>
