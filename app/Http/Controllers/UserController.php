<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return response('Bu narsalarni ro`yhati', 201, ['X-Header-One' => 'Header Value Testing']);
        // yoki
        // return response('Bu narsalarni ro`yhati', 201)->header('X-Header-One', 'Header Value Testing');

        // redirect
        // return redirect('users/create');

        // Json qaytarish
        return response()->json([
            'name' => 'Oybek',
            'state' => 'Uz',
        ]);
    }

    // public function show(Request $request, $user){
    public function show($user){
        $user += 1000;
        // return 'Tanlangan user ' . $user;

        // return view('users.show', [
        //     'name' => 'Oybek',
        //     'id' => $user
        // ]);
        // yoki
        // dd($request->requestUri);
        return view('users.show')
        ->with('name', 'Oybek')
        ->with('id', $user);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        // dd($request);
        // dd($request->input('name'));
        // dd($request->input('email'));
        // dd($request->all());
        dd($request->email);

        // if ($request->has('name')) // inputdan kelayotgan name bor bolsa ishlaydi
        // {
        //     echo "Yes";
        // }else{
        //     echo 'No';
        // }
    }

    public function edit($user_id){
        return $user_id . ' ni O \'zgartirish';
    }
}
