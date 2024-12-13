<?php

namespace App\Livewire;

use App\Models\DonationForm as ModelsDonationForm;
use Livewire\Component;

class DonationForm extends Component
{
	public $email;
	public $name;
	public $city;
	public $address;
	public function rules(){
		return [
			'email'=>[
				'required',
				'email',
				'min:5'
			],
			'name'=>[
				'required',
				'min:3'
			],
			'city'=>'required|min:2',
			'address'=>'required|min:5'
		];
	}
	public function submit(){
		$validationData = $this->validate();

		$data = new ModelsDonationForm;
		$data->fill($validationData);
	}
    public function render()
    {
        return view('livewire.donation-form');
    }
}
