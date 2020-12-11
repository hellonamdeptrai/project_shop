<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserFrontendRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get();

        $user = User::get()->find($id);

        return view('frontend.users.edit')->with([
            'categories' => $categories,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserFrontendRequest $request, $id)
    {
        $user = User::get()->find($id);


        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->status =  1;
        $user->postion = 3;
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->password = bcrypt($request->get('password'));

        $file = $request->file('avatar');
        if($file){
            $path = Storage::disk('public')->putFileAs('avatars', $file,$file->getClientOriginalName());
            $user->avatar = $file->getClientOriginalName();
        }
        $user->avatar = $user->avatar;

        $user->save();

        return redirect()->route('frontend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
