<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class OwnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $owners = Owner::select('id', 'name', 'email', 'created_at')->paginate(5);

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

        try {
            // トランザクションでオーナーとショップを登録
            $createOwner = DB::transaction(function () use ($request) {
                $owner = Owner::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                Shop::create([
                    'owner_id' => $owner->id,
                    'name' => '店名を入力してください',
                    'information' => '',
                    'filename' => '',
                    'is_selling' => true,
                ]);

                return $owner;
            }, 2);
        } catch (\Throwable $e) {
            Log::error($e);
            throw $e;
        }

        return redirect()
            ->route('admin.owners.index')
            ->with([
                'message' => "{$createOwner->name} を登録しました。",
                'status' => 'info',
            ]);
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
        $owner = Owner::findOrFail($id);
        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->password = Hash::make($request->password);
        $owner->save();

        return redirect()
            ->route('admin.owners.index')
            ->with([
                'message' => "{$owner->name} を更新しました。",
                'status' => 'info',
            ]);
    }

    public function destroy($id)
    {
        $owner = Owner::findOrFail($id);
        // ソフトデリート
        $owner->delete();

        return redirect()
            ->route('admin.owners.index')
            ->with([
                'message' => "{$owner->name} を削除しました。",
                'status' => 'alert',
            ]);
    }
}
