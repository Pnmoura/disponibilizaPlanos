<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Address;

class AddressService
{
    public function create(
        string $postalcode,
        string $streetname,
        ?string $complement,
        string $neighborhood,
        string $city,
        string $state,
        string $ibgecode
    ) {
        $address = new Address();
        $address->postalcode = $postalcode;
        $address->streetname = $streetname;
        $address->complement = $complement;
        $address->neighborhood = $neighborhood;
        $address->city = $city;
        $address->state = $state;
        $address->ibgecode = $ibgecode;
        $address->save();
    }
}
