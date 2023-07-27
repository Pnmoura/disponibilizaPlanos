<?php

declare(strict_types=1);

namespace App\Http\Controllers;

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
        $this->plansService->create($request->all());
    }
}
