<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Plans;

class PlansService
{
    public function create(array $request)
    {
        $plan = new Plans();
        $plan->planName = $request['planName'];
        $plan->label = $request['label'];
        $plan->description = $request['description'];
        $plan->typePlan = $request['typePlan'];
        $plan->save();
    }
}
