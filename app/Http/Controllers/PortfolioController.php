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

        return view('portofolio.index', ['portfolio' => $portfolio]);
    }

    public function admin(){

        $portfolio = Portfolio::all();

        return view('admin.portfolio.index', ['portfolio' => $portfolio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

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

            return redirect()->route('portfolio.admin');
        }
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
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit', ['portfolio' => $portfolio]);
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

            return redirect()->route('portfolio.admin');
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

        return redirect()->route('portfolio.admin');  
    }
}
