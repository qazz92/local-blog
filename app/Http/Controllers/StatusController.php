<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\StatusService;

class StatusController extends Controller
{
    private $statusService;

    public function __construct(StatusService $statusService)
    {
        $this->statusService = $statusService;
    }

    public function info() {
        $this->statusService->info();
    }
}
