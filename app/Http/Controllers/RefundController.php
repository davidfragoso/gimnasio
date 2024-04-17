<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function index()
    {
        return Refund::all();
    }

    public function store(Request $request)
    {
        return Refund::create($request->all());
    }

    public function show($id)
    {
        return Refund::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $refund = Refund::findOrFail($id);
        $refund->update($request->all());
        return $refund;
    }

    public function destroy($id)
    {
        $refund = Refund::findOrFail($id);
        $refund->delete();
        return 204;
    }
}
