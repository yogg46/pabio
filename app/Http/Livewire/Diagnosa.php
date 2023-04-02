<?php

namespace App\Http\Livewire;

use App\Models\DetailPenyakit;
use Livewire\Component;

class Diagnosa extends Component
{

    public $jnsTanaman;
    public $bgnTanaman;
    public $gjlTanaman = [];

    public $showJNS = 'false';
    public $showBGN = 'false';
    public $showGJL = 'false';

    public function render()
    {
        return view('livewire.diagnosa', [
            'gejala' => DetailPenyakit::search('Buah', $this->jnsTanaman)->search('Bagian', $this->bgnTanaman)->get()
        ])
            ->extends('layouts.main', [
                'tittle' => ' ',
            ])
            ->section('page');
    }

    public function ResetISI()
    {
        $this->gjlTanaman = [];
    }
    public function showBagian()
    {
        $this->showBGN = 'true';
        $this->ResetISI();
    }
    public function showGejala()
    {
        $this->showGJL = 'true';
        $this->ResetISI();

    }


    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields()
    {
        // $this->account = '';
        // $this->username = '';
    }

    public function store()
    {
        // $validatedDate = $this->validate([
        //         'account.0' => 'required',
        //         'username.0' => 'required',
        //         'account.*' => 'required',
        //         'username.*' => 'required',
        //     ],
        //     [
        //         'account.0.required' => 'Account field is required',
        //         'username.0.required' => 'Username field is required',
        //         'account.*.required' => 'Account field is required',
        //         'username.*.required' => 'Username field is required',
        //     ]
        // );

        // foreach ($this->account as $key => $value) {
        //     Account::create(['account' => $this->account[$key], 'username' => $this->username[$key]]);
        // }

        // $this->inputs = [];

        // $this->resetInputFields();

        // session()->flash('message', 'Account Added Successfully.');
    }
}
