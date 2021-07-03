<?php

namespace App\Http\Controllers;

use App\Http\Requests\dataRequest;
use App\Http\Resources\DataResource;
use App\Models\data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataResource::collection(data::all());
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
    public function store(dataRequest $request)
    {
        $data = new data();
        $data->title = $request->title;
        $data->body = $request->body;
        $data->save();
        return "data saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return data::find($id);
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
    public function update(dataRequest $request, $id)
    {
        $data = data::find($id);
        $data->title = $request->title;
        $data->body = $request->body;
        $data->save();
        return "Record Updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = data::find($id)->delete();
        if ($data) {
            return "data deleted";
        } else {
            return "Data not deleted";
        }
    }
}
