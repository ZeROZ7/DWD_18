<?php

namespace DacingWithDeath\Http\Controllers;
use DacingWithDeath\Dates;
use Illuminate\Http\Request;
//use DB;
class DatesController extends Controller
{
    public function getAll(){
	    $dates = Dates::all();
	    return $dates;
        /*
            $dates = DB::table('dates')->get();
            foreach ($dates as $date) {
                echo $date->name;
            }
		*/
    }
    public function add(Request $request){
        $date = Dates::create($request->all());
        return $date;
    }

    public function get($id){
        $date = Dates::find($id);
        return $date;
    }

    public function edit($id, Request $request){
        $date = $this->get($id);
        $date->fill($request->all())->save();
        return $date;
    }

    public function delete($id){
        $date = $this->get($id);
        $date->delete();
        return $date;
    }

}
