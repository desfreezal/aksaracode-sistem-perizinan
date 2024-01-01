<?php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\StatusDokumen;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function getStatusDokumen()
    {
        try {
            $statusDokumen = StatusDokumen::get();
            
            return response()->json($statusDokumen, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
