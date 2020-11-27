<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'Author Create';
        $data = User::where('type',2)->get();
        return view('admin.author.list',compact('page_name','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Role Create';
        $roles = Role::pluck('name','id'); //pluck==> give me name and id from permission
        return view('admin.author.create',compact('page_name','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|size:6',
            'roles.*'=>'required',
        ],[
            'name.required'=>'Name Is Required ...',
            'email.email'=>'You Must Write An Email Correctly ...',
            'email.unique'=>'User Email already Exist ...',
            'password.size'=>'Password Must Be 6 Characters Or More ...',
           // 'roles.*.required'=>'You Must Select Role(s)',
        ]);
        $author = new User();
        $author->name = $request->name;
        $author->email = $request->email;
        $author->password = Hash::make($request->password);
        $author->type =2;
        $author->save();
        foreach($request->roles as $value){
            $author->attachRole($value);
        }
        return redirect()->action('Admin\AuthorController@index')->with('success','Author Created Successfully');
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
        
        $page_name = 'Author Edit';
        $author = User::find($id);
        $roles = Role::pluck('name','id');
        $selectedroles = DB::table('role_user')->where('user_id',$id)->pluck('role_id')->toArray();
        return view('admin.author.edit',compact('page_name','author','selectedroles','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
         
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|size:6',
            'roles.*'=>'required',
        ],[
            'name.required'=>'Name Is Required ...',
            'email.email'=>'You Must Write An Email Correctly ...',
            'email.unique'=>'User Email already Exist ...',
            'password.size'=>'Password Must Be 6 Characters Or More ...',]);
           // 'roles.*.required'=>'You Must Select Role(s)',
        $author = User::find($id);
        $author->name = $request->name;
        $author->email = $request->email;
        $author->password = Hash::make($request->password);
        $author->type =2;
        $author->save();
        DB::table('role_user')->where('user_id',$id)->delete();
        foreach($request->roles as $value){
            $author->attachPermission($value);
        }
        return redirect()->action('Admin\AuthorController@index')->with('success','Author Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = User::find($id);
        $author->delete();
        return redirect()->action('Admin\AuthorController@index')->with('success','Author Deleted Successfully !!');
    }
}