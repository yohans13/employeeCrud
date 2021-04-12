<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\employee;


class postController extends Controller
{
    public function getAllEmp()
    {
        $post=DB::table('post')->get();
        return view('posts',compact('post'));
    }


    public function newEmp (){
        return view('newEmployee');
    }



}
