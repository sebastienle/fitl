<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the objects from the db
        $teams = Team::all();

        $data = array();
        $data['objects'] = $teams;

        return view('teams.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new Team;
        $data = array();
        $data['team'] = $team;
        return view('teams.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team;

        // set the team's data from the form data
        $team->Name = $request->Name;
        $team->Sport = $request->Sport;
        $team->NbPlayers = $request->NbPlayers;

        // create a new team in the db
        if (!$team->save()) {
            $errors = $team->getErrors();
            
            // redirect back to the create page and pass along the errors
            return redirect()
                ->action('TeamController@create')
                ->with('errors', $errors)
                ->withInput();
        }
        
        // success!
        return redirect()
            ->action('TeamController@index')
            ->with('message', '<div class="alert alert-success">Team created successfully!</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();
        $team = Team::findOrFail($id);
        $data['object'] = $team;

        return view('teams/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', ['team' => $team]);
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
        $team = Team::findOrFail($id);

        //set the team'S data from form data
        $team->Name = $request->Name;
        $team->Sport = $request->Sport;
        $team->NbPlayers = $request->NbPlayers;

        if (!$team->save()) {
            $errors = $team->getErrors();
            
            // redirect back to the create page and pass along the errors
            return redirect()
                ->action('TeamController@edit', $team->id)
                ->with('errors', $team->getErrors())
                ->withInput();
        }

        return redirect()
            ->action('TeamController@index')
            ->with('message', '<div class="alert alert-success">Team updated successfully!</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        $team->delete();

        return redirect()
            ->action('TeamController@index')
            ->with('message', '<div class="alert alert-info">Team was deleted</div>');
    }
}
