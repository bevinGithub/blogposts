<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Photo;

use App\Http\Requests\UsersRequest;
use App\Http\Requests\UsersEditRequest;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::all();
        return view ('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->toArray();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        #echo "<pre>"; print_r($_POST);exit;
        if (trim($request->password) == '') {
            $input = $request->except('password');
        } else {
            $input =$request->all();
            $input['password'] = bcrypt($request->password);
        }
        
        if ($file = $request->file('photo_id')) {
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file' => $name]); 
            #get photo id to add to the users table
            $input['photo_id'] = $photo->id;
        }

        
        User::create($input);
        // $user = new User();
        // $user->name = trim($_POST['name']);
        // $user->email = trim($_POST['email']);
        // $user->is_active = trim($_POST['is_active']);
        // $user->role_id = trim($_POST['role_id']);
        // $user->photo_id = $photo_id;
        // $user->password = bcrypt(trim($_POST['password']));
        // $user->save();
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->toArray();
        #echo "<pre>"; print_r($user);exit;
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        if (trim($request->password) == '') {
            $input = $request->except('password');
        } else {
            $input =$request->all();
            $input['password'] = bcrypt($request->password);
        }
        $user = User::findOrFail($id);
        $input =$request->all();
        #check if image is uploaded and update it
        if ($file = $request->file('photo_id')) {
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file' => $name]); 
            #get photo id to add to the users table
            $photo_id = $photo->id;
            $input['photo_id'] = $photo->id;;
        }
        $user->update($input);

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $input =$request->all();
        echo "<pre>"; print_r($input->paa);exit;



        
    }
    public function bevin(){

    }
}
