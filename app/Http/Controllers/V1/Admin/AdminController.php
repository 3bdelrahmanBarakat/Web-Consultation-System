<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\StoreAdminRequest;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::paginate();

        return view('Admin.admins')->with('admins', $admins);
    }

    public function store(StoreAdminRequest $request)
    {
        $request['password'] = Hash::make($request['password']);
        Admin::create($request->all());
        return back()->with('message', 'Admin has been added successfully');
    }
}
