<?php

namespace App\Http\Controllers;

use App\Models\Foodbank;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $organization = Organization::find(request('id'));
        $attributes = $request->validate([
            'email' => ['email', 'required', 'max:100'],
            'website_url' => ['required', 'max:100'],
            'phone' => ['required', 'max:100'],
        ]);

        $organization->update($attributes);

        return back()->with('message', 'Record Modified!');
    }
}
