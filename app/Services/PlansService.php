<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Plans;

class PlansService
{
    public function create(
        string $planName,
        string $label,
        string $description,
        string $typePlan
    ) {
        $plan = new Plans();
        $plan->planName = $planName;
        $plan->label = $label;
        $plan->description = $description;
        $plan->typePlan = $typePlan;
        $plan->save();
    }
}
