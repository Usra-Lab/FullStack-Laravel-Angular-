<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return response()->json($users=User::all());
    }

    public function show($id){
        return response()->json($user=User::find($id));
    }

    public function store(Request $request){
        $user=User::create($request->all());
        return response($request);
    }
    public function update(Request $request,$id){
        $user=User::where('id',$id)->update($request->all());
        return response($request);

    }
    public function delete($id){
        $user=User::where('id',$id)->delete();     
    }
}
