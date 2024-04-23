<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Database\Seeders\RoomSeeder;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getAllRooms()
    {
        try {
            $rooms = Room::all();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Rooms retrieved successfully',
                    'data' => $rooms
                ], 200
            );
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Rooms cant be retrieved',
                'data' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function createRoot(Request $request)
    {
        try {
            $room = new Room();

            $request->validate([
                'title' => 'required|max:50',
                'description' => 'required|max:150',
                'url_image' => 'required|max:150'
            ]);
            $room->title = $request->title;
            $room->description = $request->description;
            $room->url_image = $request->url_image;
            $room->save();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Room created successfully',
                    'data' => $room
                ], 200
            );
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Room cant be created',
                'data' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateRoomById($id, Request $request)
    {
        try {
            $room = Room::find($id);

            if (!$room) {
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'Room not found',
                        'data' => null
                    ], 404
                );
            }
            
            $request->validate([
                'title' => 'max:50',
                'description' => 'max:150',
                'url_image' => 'max:150'
            ]);
            
            if ($request->title) {
                $room->title = $request->title;
            }
            if ($request->description) {
                $room->description = $request->description;
            }
            if ($request->url_image) {
                $room->url_image = $request->url_image;
            }

            $room->save();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Room updated successfully',
                    'data' => $room
                ], 200
            );
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Room cant be updated',
                'data' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteRoomById($id)
    {
        try {
            $room = Room::find($id);

            if (!$room) {
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'Room not found',
                        'data' => null
                    ], 404
                );
            }
            $room->delete();

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Room deleted successfully',
                    'data' => $room
                ], 200
            );
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Rooms cant be retrieved',
                'data' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
}
