<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Plans;
use App\Services\PlansService;
use Illuminate\Http\Request;

class PlansController extends Controller
{

    /** @var PlansService*/
    private $plansService;
    public function __construct(PlansService $plansService)
    {
        $this->plansService = $plansService;
    }

    public function create(Request $request)
    {
        $this->plansService->create(
            $request->input('planName'),
            $request->input('label'),
            $request->input('description'),
            $request->input('typePlan')
        );
    }

    /**
     * @var int $id
     * @var string $label
     * @var string $typePlan
     */
    public function filter(Request $request)
    {
        $id = $request->query('id');
        $label = $request->query('label');
        $typePlan = $request->query('typePlan');

        $plans = Plans::select()
            ->where(function ($query) use ($id, $label, $typePlan) {
                $query->orWhere('id', $id)
                    ->orWhere('label', 'LIKE', "%$label%")
                    ->orWhere('typePlan', $typePlan);
            })
            ->get();

        return $plans;
    }
}
