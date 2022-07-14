<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', [
            'users' => $users
        ]);
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.editUser', [
            'user' => $user
        ]);
    }

    public function editUserForm(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'surname' => 'required|string',
            'name' => 'required|string',
            'patronymic' => 'required|string',
            'id' => 'required|integer',
            'photo' => 'required|file|max:2048|image'
        ]);

        if($validator->fails()) return response()->json($validator->errors(), 400);

        $user = User::find($r->id);

        $photo = Storage::putFile('public', $r->file('photo'));

        $user->surname = $r->surname;
        $user->name = $r->name;
        $user->patronymic = $r->patronymic;
        $user->photo = '/public'.Storage::url($photo);

        $user->save();

        return response()->json(['admin' => 'admin', 'link' => redirect()->back()->getTargetUrl()], 200);

    }
}
