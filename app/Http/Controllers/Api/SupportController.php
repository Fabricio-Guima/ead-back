<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupportResource;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected $repository;

    public function __construct(SupportRepository $supportRepository)
    {
        $this->repository = $supportRepository;
    }

    public function index(Request $request)
    {
        $supports = $this->repository->getSupports();

        return SupportResource::collection($supports);
    }
}
