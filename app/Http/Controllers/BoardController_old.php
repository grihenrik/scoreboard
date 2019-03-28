<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Description of BoardController
 *
 * @author turunent
 */
class BoardController extends Controller
{
    public function Board()
    {
        // show the view
        return view('Board');
    }
    public function Test()
    {
        $datas = DB::select('select data from scoreboard_datas');
        
        // show the view
        return view('test', ["first" => $datas]);
    }

    public function ScoreBoard()
    {
        // show the view
        return view('test');
    }


}
