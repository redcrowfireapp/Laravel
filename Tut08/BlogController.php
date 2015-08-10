<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\Http\Requests;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blog = new blog;
        $blog = blog::all();

        return view('Blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(BlogRequest $request)
    {

        $blog = new blog;
        $blog = blog::create($request->all());

        return redirect('Blog');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $blog = new blog;
        $blog = blog::findOrFail($id);

        return view('Blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $blog = new blog;
        $blog = blog::findOrFail($id);

        return view('Blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $blog = new blog;
        $blog = blog::findOrFail($id);
        
        $blog->update($request->all());

        return redirect('Blog');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
