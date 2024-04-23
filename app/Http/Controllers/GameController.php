<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getAllGames()
    {
        return 'GET ALL GAMES';
    }

    public function createGame(Request $request)
    {
        dump($request->input());
        $title = $request->input('title');
        return 'CREATE GAME';
    }

    public function updateGameById($id)
    {
        return 'UPDATE GAME';
    }

    public function deleteGameById($id)
    {
        return 'DELETE GAME';
    }
}
