<?php

namespace App\Http\Controllers;

use App\Models\Megaproker;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MegaprokerController extends Controller
{
    public function index(): JsonResponse
    {
        $megaprokers = Megaproker::all();
        return response()->json([
            "megaprokers" => $megaprokers
        ]);
    }
}
