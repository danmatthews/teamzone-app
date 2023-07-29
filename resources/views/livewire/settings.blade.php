<div class="text-white">
    <livewire:components.header back-to="/" title="Settings" />
    <form action="" wire:submit="save" class="px-6 py-3 space-y-6">
        <div>
            <label for="timezone" class="block text-sm font-medium leading-6 text-gray-100">Your Timezone</label>
            <select wire:model="timezone" id="timezone" name="timezone"
                class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-blue-600 sm:text-sm sm:leading-6">
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

        <fieldset>
            <legend class="block text-sm font-medium leading-6 text-gray-100 mb-3">Notifications</legend>
            <div class="space-y-5">
                <div class="relative flex items-start">
                    <div class="flex h-6 items-center">
                        <input id="candidates" aria-describedby="candidates-description" name="candidates"
                            type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="candidates" class="font-medium ">Coming online soon</label>
                        <p id="candidates-description" class="text-gray-300">Get notified 10 minutes before a team
                            member's start time.</p>
                    </div>
                </div>
                <div class="relative flex items-start">
                    <div class="flex h-6 items-center">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="offers" class="font-medium ">Going offline soon</label>
                        <p id="offers-description" class="text-gray-300">Get notified 10 minutes before a person is
                            scheduled to go offline.</p>
                    </div>
                </div>
            </div>

        </fieldset>
        <button type="submit"
            class="rounded-md bg-blue-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Save</button>

    </form>

</div>
