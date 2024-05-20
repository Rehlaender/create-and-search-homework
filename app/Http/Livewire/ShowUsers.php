<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Profile;

class ShowUsers extends Component
{
    public $profiles;
    public $name;
    public $last_name;
    public $isCreating;
    public $foundProfiles;
    public $search_query;
    public $render_profiles;

    function mount()
    {
        $this->fetchProfiles();
        $this->isCreating = true;
        $this->foundProfiles = Profile::where('id', 'LIKE', 0)->get();
    }

    function fetchProfiles()
    {
        $this->profiles = Profile::all()->reverse();
        $this->render_profiles = $this->profiles;
    }

    function addProfile()
    {
        if ($this->name != '' && $this->last_name != '') {
            $profile = new Profile();
            $profile->name = $this->name;
            $profile->last_name = $this->last_name;
            $profile->save();
            $this->name = '';
            $this->last_name = '';
            $this->fetchProfiles();
        }
    }

    function searchUser()
    {
        // Don't know why it's needed, but will find out later
        \DB::statement("SET SQL_MODE=''");
        // https://stackoverflow.com/questions/40917189/laravel-syntax-error-or-access-violation-1055-error
        $this->foundProfiles = Profile::search($this->search_query, null, true)->get();
        
    }

    function toggleIsCreating($value)
    {
        $this->isCreating = $value;
        if ($value) {
            $this->render_profiles = $this->profiles;
        } else {
            $this->render_profiles = $this->foundProfiles;
        }
    }

    public function render()
    {
        return view('livewire.show-users');
    }
}