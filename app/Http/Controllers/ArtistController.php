<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artist = Artist::all();
        return view('artist.index')->with('artist',$artist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $file = time().$request->file('artistimg')->getClientOriginalName();
        $path = $request->file('artistimg')->storeAs('artistimages',$file,'public');
        $input['artistimg']='/storage/'.$path;
        Artist::create($input);
        return redirect('book')->with('flash_message','Artist Added!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);
        return view('artist.show')->with('artist',$artist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('artist.edit')->with('artist',$artist);
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
        $artist = Artist::find($id);
        $input = $request->all();
        $artist->update($input);
        return redirect('artist')->with('flash_message','Artist Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artist::destroy($id);
        return redirect('artist')->with('flash_message','Artist Deleted.');
    }

    public function search()
    {
        $search_text = $_GET['search_artist'];
        $artist = Artist::where('title','LIKE','%'.$search_text.'%')->get();
        return view('artist.search',compact('artist'));
    }
}
