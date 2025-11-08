<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchaseOrder;

class PurchaseOrderController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(PurchaseOrder::with('items')->paginate(15));
    }

    public function store(Request $request)
    {
        // TODO: validate and create PO, handle purchase_origin and payment_mode
        $data = $request->all();
        $po = PurchaseOrder::create($data);
        return response()->json($po, 201);
    }

    public function show($id)
    {
        return response()->json(PurchaseOrder::with(['items','supplier','shipments'])->findOrFail($id));
    }
}
