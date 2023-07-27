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
     */
    public function filter(Request $request)
    {
        $plans = Plans::select()
            ->where('id', '=', $request->query('id'))
            ->get();

        return $plans;
    }
}
