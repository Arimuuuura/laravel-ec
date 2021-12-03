<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $owners = Owner::select('id', 'name', 'email', 'created_at')->get();
        return view('admin.owners.index', compact('owners'));
    }

    public function create()
    {
        return view('admin.owners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:owners'],
            'password' => ['required', 'confirmed', 'string', 'min:8'],
        ]);

        Owner::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('admin.owners.index')
            ->with('message', 'オーナーを登録しました。');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $owner = Owner::findOrFail($id);

        return view('admin.owners.edit', compact('owner'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
