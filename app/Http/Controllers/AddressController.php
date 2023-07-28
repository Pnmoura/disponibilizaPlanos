<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\AddressService;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /** @var AddressService */

    private $addressService;

    public function __construct(AddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function create(Request $request)
    {
        $this->addressService->create(
            $request->input('postalcode'),
            $request->input('streetname'),
            $request->input('complement'),
            $request->input('neighborhood'),
            $request->input('city'),
            $request->input('state'),
            $request->input('ibgecode')
        );
    }
}
