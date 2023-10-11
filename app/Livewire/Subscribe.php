<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscribe as SubscribeModel;
use Jenssegers\Agent\Agent;
class Subscribe extends Component
{
    public string $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.subscribe');
    }

    public function submit(){

        $this->validate();

        $SubscribeModel=SubscribeModel::createOrFirst([
            'email'=>$this->email,
        ]);

        $this->reset();

        $agent=new Agent();

        $SubscribeModel->update([
            'browser'=>$agent->browser(),
            'decive_type'=>$agent->deviceType()
        ]);

        session()->flash('message', 'Your Have Subscribed Successfully!');

    }
}
