<div class="flex justify-center">
    <button wire:click="toggleIsCreating(true)">Create new Users</button>
    <button wire:click="toggleIsCreating(false)">Search users</button>
    @if ($isCreating)
        <h2>You are creating an user</h2>
        <div>
            <input type="text" wire:model.live="name" placeholder="name" />
            <input type="text" wire:model="last_name" placeholder="last name" />
            <button wire:click="addProfile">SUBMIT NEW PROFILE</button>
        </div>
        <br>
        <div>
            <br>
            <br>
            @if ($profiles->isEmpty())
                <p>no profiles here</p>
            @else
                <table class="table-auto">
                    <th>
                        <tr>
                            <td>name</td>
                            <td>last name</td>
                            <td>actions</td>
                        </tr>
                    </th>
                    <tbody>
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
            <button wire:click="searchUser">SEARCH</button>
        </div>
        <br>
        <div>
            <br>
            <br>
            @if ($foundProfiles->isEmpty())
                <p>no profiles here</p>
            @else
                <table class="table-auto">
                    <th>
                        <tr>
                            <td>name</td>
                            <td>last name</td>
                            <td>actions</td>
                        </tr>
                    </th>
                    <tbody>
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
