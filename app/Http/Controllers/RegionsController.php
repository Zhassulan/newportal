<?php

namespace app\Http\Controllers;

use App\Region;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class RegionsController {
	
	public function show() {
		$regions = Region::all();
		return view( 'regions' )->with ( ['regions' => $regions] );
	}
	
	public function new() {
		$region = new Region();
		return view( 'region' )->with ( ['region' => $region] );
	}
	
	public function save(Request $request, $id) {
		
		$validatedData = $request->validate([
				'name' => 'required|max:255',
		]);
		
		if (!isset($id))	{
			$region = new Region();
		}	else	{
			$region = Region::findOrFail($id);
		}
		$region->name = Input::get('name');
		$region->save();
		
		return redirect()->route('regions');
		//return back()->withInput();
	}
	
	public function edit($id) {
		return view('region', ['region' => Region::findOrFail($id)]);
	}
	
	public function del($id) {
		$region = Region::findOrFail($id);
		$region->delete();
		return redirect()->route('regions');
	}
	
}

