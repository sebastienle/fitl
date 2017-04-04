<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the objects from the db
        $players = Player::all();

        $data = array();
        $data['objects'] = $players;

        return view('players.index', $data);
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
        $player = new Player;

        // set the team's data from the form data
        $player->last_name = $request->last_name;
        $player->first_name = $request->first_name;
        $player->position = $request->position;

        // create a new team in the db
        if (!$player->save()) {
            $errors = $player->getErrors();
            
            // redirect back to the create page and pass along the errors
            return redirect()
                ->action('PlayerController@create')
                ->with('errors', $errors)
                ->withInput();
        }
        
        // success!
        return redirect()
            ->action('PlayerController@index')
            ->with('message', '<div class="alert alert-success">Player created successfully!</div>');
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
        $player = Player::findOrFail($id);
        $data['object'] = $player;

        return view('players/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);
        return view('players.edit', ['player' => $player]);
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
       $player = Player::findOrFail($id);

        //set the team'S data from form data
        $player->last_name = $request->last_name;
        $player->first_name = $request->first_name;
        $player->position = $request->position;

        if (!$player->save()) {
            $errors = $player->getErrors();
            
            // redirect back to the create page and pass along the errors
            return redirect()
                ->action('PlayerController@edit', $player->id)
                ->with('errors', $player->getErrors())
                ->withInput();
        }

        return redirect()
            ->action('TeamController@show', $player->team_id)
            ->with('message', '<div class="alert alert-success">Player updated successfully!</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);

        $player->delete();

        return redirect()
            ->action('TeamController@show', $player->team_id)
            ->with('message', '<div class="alert alert-info">Player was deleted</div>');
    }
}
