<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\AvailabilityPlansService;
use Illuminate\Http\Request;

class AvailabilityPlansController extends Controller
{
    /** @var AvailabilityPlansService*/

    private $availabilityPlansService;

    public function __construct(AvailabilityPlansService $availabilityPlansService)
    {
        $this->availabilityPlansService = $availabilityPlansService;
    }

    public function show(Request $request)
    {
        $availabilityPlansService = $this->availabilityPlansService->getPlans($request->input('postalcode'));

        return ($availabilityPlansService);
    }
}
