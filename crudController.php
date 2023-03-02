<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\laravelCrud;
class crudController extends Controller
{
    //
public function Index(Request $request){
$users= laravelCrud::paginate(5);
return view('table',['users'=>$users]);
#return response()->json($users);
}
public function Delete($id){
   $data= laravelCrud::where('id',$id);
   $data->delete();
return redirect()->route('index');
  
}

public function Create(Request $request){
    $username = $request->input('username');
    $email = $request->input('email');
    $age = $request->input('age');
    $data= array('username'=>$username, 'email'=>$email, 'age'=>$age);
    DB::table('laravelCrud')->insert($data);
    $users = laravelCrud::paginate(5);
    return view('table',['users'=>$users]);
}
public function Edit($id){
   $data= laravelCrud::find($id);
   return view('edit',['data'=>$data]);
}
public function Update(Request $request,$id){
$data= laravelCrud::find($id);
$data->username=$request->input('username');
$data->email=$request->input('email');
$data->age=$request->input('age');
$data->save();
return redirect()->route('index');

}
}
