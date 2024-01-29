<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CreateUserController extends Controller
{


   public function index(){
    return view('Admin.user_list');
   }
    //getdata from  user model.
   public function getData(Request $request){

        if ($request->ajax()) {

            $getData = User::latest('id');
            dd($getData);

            return DataTables::eloquent($getData)
            ->addIndexColumn()

            ->addColumn('action', function($data){
                $action='
                <button  class="btn btn-sm btn-primary m-1 edit-btn" data-id="'.$data->id.'"  data-toggle="modal" data-target="#edit_user"> <i class="fa fa-edit"></i> </button>
                <button  class="btn btn-sm btn-danger m-1 delete-btn" data-id="'.$data->id.'"> <i class="fa fa-trash"></i> </button>
                ';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);

        }
    }
}



