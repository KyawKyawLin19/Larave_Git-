<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Township;
use App\City;
use App\QCenter;
use App\Quser;

class QCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all()->pluck('name','id');
        return view('index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getTownships($id)
    {
        $townships = Township::where('city_id',$id)->pluck('name','id');
        return json_encode($townships);
    }

    public function getData($id)
    {
        $cities = City::all()->pluck('name','id');
        $data = QCenter::where('township_id',$id)->get();
        return view('data_view',compact(['data','cities']));
    }

    public function getHospital(Quser $qusers,$id){
         $qusers  = Quser::where('qcenter_id',$id)->get();
         dd($qusers->qcenter);
        // return view('hospital_view',compact('qusers'));
    }

    public function searchQuser(Request $request,Quser $quser){

        $qusersname = $request->searchQusername;
        $qusersnrc = $request->searchWithNrc;

        $quser = $quser->newQuery();

        if ($request->has('searchQusername')) {
            $quser->where('name','like','%'.$qusersname.'%');
        }
    
        if ($request->has('searchWithNrc')) {
            $quser->where('nrc','like','%'.$qusersnrc.'%');
        }

        $qusers = $quser->get();  
        return view('hospital_view',compact('qusers'));
    }
}
