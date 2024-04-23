<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class GameController extends Controller
{
    public function getAllGames()
    {
        try {
            $games = Game::all();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Games retrieved successfully',
                    'data' => $games
                ], 200
            );
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Games cant be retrieved',
                'data' => 'Error: ' . $e->getMessage()
            ], 500);
        }
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
