<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{


    public function search(Request $request){
        $query = DB::table('employees');

        if($request->ajax()){
            $users = $query->where('name','LIKE','%'.$request->search.'%')
            ->orWhere('email','LIKE','%'.$request->search.'%')
            ->orWhere('phone','LIKE','%'.$request->search.'%')
            ->get();
            return response()->json(['employees'=>$users]);

        }
        else{
            $users = $query->get();
            return view('search',compact('users'));
        }


    }

    public function post(){
        return view('post.create');
    }

    public function insert(Request $Request){
       DB::table('employees')->insert([
            'name'=>$Request ->name,
            'email'=>$Request ->email,
            'phone'=>$Request ->phone,
       ]);

       return response ('thank you');
    }

    public function index(){
        // $employees= DB::table('employees') ->get();
        $employees= DB::table('employees') ->paginate(10);
        return view('post.index', compact('employees'));
        dd($employees);
    }


    public function create(){

        return view('post.create');
    }

    public function edit($name){
        $employee = DB::table('employees')->where ('name',$name)->first();
        return view('post.edit', compact('employee'));
    }



    public function update(Request $Request, $name){
        DB::table('employees')->where ('name',$name)->update([
            'name'=>$Request->name,
            'phone'=>$Request->phone,
            'email'=>$Request->email,

        ]);
        return redirect()->route('post.index');
    }


    public function delet($name){
       DB::table('employees')->where ('name',$name)->delete();
       return redirect()->route('post.index');
       return name;
    }

    public function deleteAll(){
        DB::table('employees')->delete();
        return redirect()->route('post.index');

    }



}
