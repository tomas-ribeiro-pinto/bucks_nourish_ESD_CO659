<?php

namespace App\Http\Controllers;

use App\Models\Foodbank;
use App\Models\Hospital;
use Illuminate\Http\Request;

class FoodbankController extends Controller
{
    public function index()
    {
        $foodbanks = Foodbank::all()->where('organization_id', '=', auth()->user()->organization_id);

        return view('foodbanks/index', compact("foodbanks"));
    }
    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $foodbank = Foodbank::find(request('id'));
        $attributes = $request->validate([
            'email' => ['email', 'required', 'max:100'],
            'website_url' => ['required', 'max:100'],
            'phone' => ['required', 'max:100'],
            'requires_referral' => 'required',
            'requires_volunteer' => 'required',
        ]);
        $foodbank->update($attributes);

        return back()->with('message', 'Record Modified!');
    }
}
