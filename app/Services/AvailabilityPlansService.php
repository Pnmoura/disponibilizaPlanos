<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\AvailabilityPlans;

class AvailabilityPlansService
{
    /**
     * @var string $postalCode
     */
    public function getPlans(string $postalCode)
    {

        return AvailabilityPlans::select('availabilityPlans.id', 'plans.planName', 'plans.label', 'address.streetname', 'address.postalcode', 'address.neighborhood', 'address.city', 'address.state')
            ->join('plans', 'plans.id', '=', 'availabilityPlans.plan_id')
            ->join('address', 'address.id', '=', 'availabilityPlans.address_id')
            ->where('address.postalcode', 'LIKE', "%$postalCode%")
            ->get();
    }
}
