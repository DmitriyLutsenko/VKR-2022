<?php

namespace App\Http\Controllers;

use App\Models\InfoPage;
use Illuminate\Http\Request;

class InfoPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function get_page ($slug) {
        return view('front.pages.infopage', [
            'infoPage' => InfoPage::where('slug', '=', $slug)->firstOrFail()
        ]);
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
     * @param  \App\Models\InfoPage  $infoPage
     * @return \Illuminate\Http\Response
     */
    public function show(InfoPage $infoPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoPage  $infoPage
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoPage $infoPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfoPage  $infoPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoPage $infoPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoPage  $infoPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoPage $infoPage)
    {
        //
    }
}
