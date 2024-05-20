<div class="flex justify-center">
    <div>
        <input type="text" wire:model.live="name" placeholder="name" />
        <input type="text" wire:model="last_name" placeholder="last name" />
        <button wire:click="asdfu">submit new profile</button>
        <br>
        <br>
        <h1>asdfasdf {{$name}}<h1>
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
</div>
