<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function index()
    {
        return Membership::all();
    }

    public function store(Request $request)
    {
        return Membership::create($request->all());
    }

    public function show($id)
    {
        return Membership::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $membership = Membership::findOrFail($id);
        $membership->update($request->all());
        return $membership;
    }

    public function destroy($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->delete();
        return 204;
    }
}
