<div class="flex justify-center show-users">
    <button wire:click="toggleIsCreating(true)"
        class="{{$isCreating  ? "active" : ""}}">
        New Users</button>
    <button wire:click="toggleIsCreating(false)" 
        class="{{!$isCreating  ? "active" : ""}}">Search users</button>
    @if ($isCreating)
        <h2>You are creating an user</h2>
        <div>
            <input type="text" wire:model.live="name" placeholder="name" />
            <input type="text" wire:model="last_name" placeholder="last name" />
            <button wire:click="addProfile" class="submit">SUBMIT NEW PROFILE</button>
        </div>
        <br>
        <div style="height: 300px; overflow: scroll">
            @if ($profiles->isEmpty())
                <p>no profiles here</p>
            @else
                <table class="awesome-table table-auto border-collapse table-auto w-full text-sm">
                    <thead>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Name
                            </th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Last name
                            </th>
                        </tr>
                    </thead>
                    </th>
                    <tbody class="bg-white dark:bg-slate-800">
                        @foreach ($profiles as $profile)
                            <tr>
                                <td>{{ $profile->name }}</td>
                                <td>{{ $profile->last_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @else
        <h2>You are searching for an user</h2>
        <div>
            <input type="text" wire:model.live="search_query" placeholder="search for..." />
            <button wire:click="searchUser" class="submit">SEARCH</button>
        </div>
        <br>
        <div style="height: 300px; overflow: scroll">
            @if ($foundProfiles->isEmpty())
                <p>found no one</p>
            @else
                <table class="awesome-table table-auto">
                    <thead>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Name
                            </th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Last name
                            </th>
                        </tr>
                    </thead>
                    </th>
                    <tbody class="bg-white dark:bg-slate-800">
                        @foreach ($foundProfiles as $profile)
                            <tr>
                                <td>{{ $profile->name }}</td>
                                <td>{{ $profile->last_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif
</div>
