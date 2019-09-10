<?php

namespace App\Http\Controllers;

use App\Response;
use Illuminate\Http\Request;
use carbon\Carbon;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reponses = Response::select(['id', 'name', 'contact', 'response', 'note', 'created_at'])->latest();
        return datatables()->of($reponses)
        ->addColumn('action', function ($response) {
            return '<a href="javascript:void(0);" data-href="'. route('response.destroy', [$response->id]) .'" class="btn btn-md btn-danger anchor_delete">Delete</a>';
        })

        ->editColumn('created_at', function ($reponse) {
            return $reponse->created_at ? with(new Carbon($reponse->created_at))->diffForHumans() : '';
        })
        ->filterColumn('created_at', function ($query, $keyword) {
            $query->whereRaw("DATE_FORMAT(created_at,'%m/%d/%Y') like ?", ["%$keyword%"]);
        })
        ->rawColumns(['action'])
        ->make(true);
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
        $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required',
            'response' => 'required',
        ]);

        Response::create($request->all());
        if($request->response == 'yes'){
            session()->flash('message', 'yes');
        } else {
            session()->flash('message', 'no');
        }

        session()->flash('okdone', 'Success');
        return redirect()->back();    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Response::find($id);
        $response->delete();
        session()->flash('status', 'Successfully deleted');
        session()->flash('type', 'success');
        return response('success', 200);    
    }
}