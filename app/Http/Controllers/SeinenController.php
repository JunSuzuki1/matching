<?php

namespace App\Http\Controllers;

use App\Seinen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeinenController extends Controller
{
    public function index()
		{
		  if ( Auth::check() ){
			$seinenList = Seinen::all();
			return view('seinen')->with('seinenList',$seinenList);
		  }
		  return view('seinen');
		  
		}
		public function add()
		{
			if( Auth::check() ){
				$seinen = Seinen::where('userid',Auth::user()->id)->first();
				return view('seinenadd')->with('seinen',$seinen);
			}
			return view('seinenadd');
		}
		
		public function store(Request $request)
		{
			$seinenCheck = Seinen::where('userid',Auth::user()->id)->first();
			if($seinenCheck == null){
				$seinen = new Seinen;
			}else{
				$seinen = Seinen::find($seinenCheck->id);
			}
				$seinen->username = Auth::user()->name;
				$seinen->userid = Auth::user()->id;
				$seinen->old = $request->input('old');
				$seinen->wantold = $request->wantold;
				$seinen->area = $request->area;
				$seinen->description = $request->description;

				$seinen->save();

			return redirect('young');
		}
}
