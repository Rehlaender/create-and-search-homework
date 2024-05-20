<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Profile;

class ShowUsers extends Component
{

    public $profiles;
    public $name;
    public $last_name;

    function mount() {
        $this->name = 'jons';
        $this-> fetchProfiles();
    }

    function fetchProfiles() {
        $this-> profiles = Profile::all()->reverse();
    }

    function asdfu() {
        $this->name = "yea";
        // if($this->name != '' && last_name != '') {
        //     // $profile = new Profile();
        //     // $profile->name = $this->name;
        //     // $profile->last_name = $this->last_name;
        //     // $profile->save();
        //     // $this->name = '';
        //     // $this->last_name = '';
        //     // $this->fetchProfiles();
        // } else {
        //     $this->name = "yea";
        // }

    }

    public function render()
    {
        return view('livewire.show-users');
    }
}
