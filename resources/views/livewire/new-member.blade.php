<div class="text-white">

    <livewire:components.header back-to="/" title="Add Team Member" />



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

        {{ implode(',', $workingDays) }}
        <fieldset class="">
            <label for="working_hours" class="block text-sm font-medium leading-6 text-gray-100">Working Hours <span
                    class="font-normal text-gray-300">(in local
                    time)</span></label>
            @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $key => $day)
                <div class="grid grid-cols-3 gap-2 items-center text-sm">
                    <label class="flex items-center space-x-2">
                        <input value="{{ $day }}" wire:model.live="workingDays" id="candidates"
                            aria-describedby="candidates-description" name="candidates" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                        <span>{{ $day }}</span>
                    </label>
                    <div>
                        <select {{ !in_array($day, $workingDays) ? 'disabled' : '' }} wire:model.live="timezone"
                            id="timezone" name="timezone"
                            class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @foreach (range(1, 23) as $hour)
                                <option value="{{ $hour }}">
                                    {{ now()->hour($hour)->minute(0)->format('h:ia') }}
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select {{ !in_array($day, $workingDays) ? 'disabled' : '' }} wire:model="timezone"
                            id="timezone" name="timezone"
                            class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @foreach (range(1, 23) as $hour)
                                <option value="{{ $hour }}">
                                    {{ now()->hour($hour)->minute(0)->format('h:ia') }}
                            @endforeach
                        </select>
                    </div>
                </div>
            @endforeach

        </fieldset>

        <button type="submit"
            class="rounded-md bg-indigo-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</button>
    </form>

</div>
