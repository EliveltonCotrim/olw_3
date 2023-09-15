<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AddressForm extends Form
{
    #[Rule('required|string|max:9', message: 'CEP inválido')]
    public string $zipcode = "";

    #[Rule('required|string|max:255')]
    public string $address = "";

    #[Rule('required|string|max:255')]
    public string $city = "";

    #[Rule('required|string|max:255')]
    public string $state = "";

    #[Rule('required|string|max:255')]
    public string $district = "";

    #[Rule('required|string|max:255')]
    public string $number = "";

    #[Rule('required|string|max:255')]
    public string $complement = "";

    public function findAddress(): void
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $this->zipcode);
        $url = "https://viacep.com.br/ws/{$zipcode}/json/";
        $address = Http::get($url)->object();

        if(!$address || isset($address->erro) && $address->erro){
            $this->addError('address.zipcode', 'CEP inválido');
            return;
        }

        $this->address = $address->logradouro;
        $this->city = $address->localidade;
        $this->state = $address->uf;
        $this->district = $address->bairro;
        $this->complement = $address->complemento;

    }
}
