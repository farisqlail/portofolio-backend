<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        $reponse = [
            'success' => true,
            'message' => 'Data found!',
            'data' => $portfolio
        ];

        return Response()->json($reponse, 200);
    }

    public function admin(){

        $portfolio = Portfolio::all();
        $reponse = [
            'success' => true,
            'message' => 'Data found!',
            'data' => $portfolio
        ];

        return Response()->json($reponse, 200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
            'link' => 'required',
            'kategori' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Success', 'Portfolio berhasil ditambahkan');

            $portfolio = new Portfolio();

            $portfolio->title = $request->get('title');
            $portfolio->link = $request->get('link');
            $portfolio->kategori = $request->get('kategori');
            $portfolio->description = $request->get('description'); ;
            
            $portfolio->save();

            $reponse = [
                'success' => true,
                'message' => 'Portfolio berhasil ditambahkan',
                'data' => $portfolio
            ];
            
            return Response()->json($reponse, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
            'link' => 'required',
            'kategori' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Success', 'Portfolio berhasil diubah');

            $portfolio = Portfolio::findOrFail($id);

            $portfolio->title = $request->get('title');
            $portfolio->link = $request->get('link');
            $portfolio->kategori = $request->get('kategori');
            $portfolio->description = $request->get('description'); ;
            
            $portfolio->save();

            $reponse = [
                'success' => true,
                'message' => 'Portfolio berhasil diubah',
                'data' => $portfolio
            ];
            
            return Response()->json($reponse, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success', 'Portfolio berhasil dihapus');

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        $reponse = [
            'success' => true,
            'message' => 'Portfolio berhasil dihapus',
            'data' => []
        ];

        return Response()->json($reponse, 200);
    }
}
