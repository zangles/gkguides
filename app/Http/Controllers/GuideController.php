<?php

namespace App\Http\Controllers;

use App\Guide;
use App\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//        $guides = Guide::where('public', true)->paginate(15);

        $guides = Guide::where('public', true);

        if ($request->has('type')) {
            $guides->where('type', '=', $request->get('type'));
        }

        if ($request->has('search')) {
            $guides->where('name', 'LIKE', '%'.$request->get('search').'%');
        }

        $guides = $guides->paginate();

        return view('guides.index', compact('guides') );
    }

    /**
     * Show user guides.
     *
     * @return \Illuminate\Http\Response
     */
    public function userGuidesIndex()
    {
        return view('guides.userGuides');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guides.create');
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
        $guide = Guide::findOrFail($id);
        $user = Auth::user();

        if ($user->can('view', $guide)) {
            return view('guides.show');
        } else {
            abort(404);
        }

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


}
