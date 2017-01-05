<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $url_link = 'https://theedproject.org/upload/';

        $url_link2 = 'http://localhost/github/laravel/edproject/public/upload/';


        $avatar_img = $request->file('avatar');
        if (isset($avatar_img)) {
            $avatar_filename = str_random(20).$avatar_img->getClientOriginalName();
            $avatar_img->move(public_path().'/upload',$avatar_filename);
        }else{
            $avatar_filename = $user->avatar;
        }

        $data = [
            'name' => $request->get('name'),
            'job_title' => $request->get('job_title'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'biography' => $request->get('biography'),
            'avatar' => $url_link.$avatar_filename,
        ];
        $user->update($data);
        return redirect('/profile');
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
