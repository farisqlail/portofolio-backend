<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();

        $response = [
            'success' => true,
            'message' => 'Data found!',
            'data' => $blog
        ];
        // return view('blog.index', ['blog' => $blog]);
        return Response()->json($response, 200);
    }

    public function admin()
    {
        $blog = Blog::all();
        $response = [
            'success' => true,
            'message' => 'Data found!',
            'data' => $blog
        ];
        
        return Response()->json($response, 200);
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
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Success', 'Blog berhasil ditambahkan');

            $blog = new Blog();

            $blog->title = $request->get('title');
            $blog->link = $request->get('link');
            $blog->deskripsi = $request->get('deskripsi'); ;
            
            $blog->save();

            $response = [
                'success' => true,
                'message' => 'Blog berhasil ditambahkan',
                'data' => $blog
            ];
        
            return Response()->json($response, 200);
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
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Success', 'Blog berhasil diubah');

            $blog = Blog::findOrFail($id);

            $blog->title = $request->get('title');
            $blog->link = $request->get('link');
            $blog->deskripsi = $request->get('deskripsi'); ;
            
            $blog->save();

            $response = [
                'success' => true,
                'message' => 'Blog berhasil diubah',
                'data' => $blog
            ];
            
            return Response()->json($response, 200);
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
        Alert::success('Success', 'Blog berhasil dihapus');

        $blog = Blog::findOrFail($id);
        $blog->delete();

        $response = [
            'success' => true,
            'message' => 'Blog berhasil dihapus',
            'data' => []
        ];

        return Response()->json($response, 200);
    }
}
