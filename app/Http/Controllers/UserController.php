<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $users = User::all();
        //dd($produks);
        return view('users.index', compact('users'));
    }
    /**
     * create
     *
     * @return void
     */

    public function create()
    {
    }
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
    }
    /**
     * edit
     *
     * @param  mixed
     * @return void
     */
    public function edit($id)
    {
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $produk
     * @return void
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        if ($users) {
            return redirect()->route('users.index')->with(['success' => 'Data Berhasil dihapus']);
        } else {
            return redirect()->route('users.index')->with(['error' => 'Data Gagal dihapus']);
        }
    }

    public function show($id)
    {
    }
}