<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // For database connection

// for redirecting
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    protected $table = "scoreboard_datas";

    
    public function Board()
    {
        // show the view
        return view('board');
    }
    
    public function Test() 
    {
        $datas = DB::select('select data from '.$this->table);
        // show the view
        return view('test', ["firstTeam" => $datas[0]->data, "secondTeam" => $datas[1]->data]);
    }
    
    public function Admin()
    {
        // show the view
        return view('admin');
    }
    
    public function UpdateScores(Request $request) 
    {
        $data = [
            'team1score' => intval($request->team1score),
            'team2score' => intval($request->team2score)
          ];
        $team1score = $data['team1score'];
        $team2score = $data['team2score'];
        DB::update('update '.$this->table.' set data = ' .$team1score. ' where id=1');
        DB::update('update '.$this->table.' set data = ' .$team2score. ' where id=2');
        //return response('hello world, 200');
        return view('admin');
    }
}
