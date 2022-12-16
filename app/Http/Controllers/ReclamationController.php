<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\reclamationRequest;
use App\Models\Reclamation;
use App\Models\User;
use Auth;

class ReclamationController extends Controller
{
    /*public function __construct()
    {
          $this->middleware('auth');
          //----$this->middleware('admin');----
    }*/
   
   
    public function index($reclam) {

        $reclam=User::email();
        $reclam=User::id();

        return view("dossier.reclamation",['reclam'=>$reclam]);


    }

    public function reclamation() {

       
        return view("dossier.reclamation");


    }

    public function store(reclamationRequest $request) {
        $reclam=new Reclamation();
        $reclam->email=$request->input('email');
        $reclam->cin=$request->input('cin');
        $reclam->sujet=$request->input('sujet');
        $reclam->text=$request->input('text');
        $reclam->user_id=Auth::user()->id;  
        $reclam->save();          
       
        return redirect("reclamation");


    }


    public function home() {

       
        return view("home");


    }


}
