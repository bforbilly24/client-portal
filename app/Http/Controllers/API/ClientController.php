<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Tutorial;
use Exception;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function login(Request $request)
    {
        try {
            $client = Client::with(['projects'])
                ->where('slug', $request->input('username'))
                ->where('password', $request->input('password'))
                ->first();

            if ($client) {
                return ResponseFormatter::successPost(
                    $client,
                    'Authentication Success'
                );
            } else {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Authentication Failed', 500);
            }
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function allTutorial(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $tutorials = Tutorial::get();

        if ($tutorials->isEmpty()) {
            return ResponseFormatter::error(
                null,
                'Data tutorials tidak ada'
            );
        }

        if ($id) {
            $target = $tutorials->find($id);
            if ($target) {
                return ResponseFormatter::success(
                    $target,
                    'Data tutorials berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data tutorials tidak ada'
                );
            }
        }

        if ($title) {
            $target = $tutorials->where('title', 'like', '%' . $title . '%')->get();
            if ($target) {
                if ($target->isEmpty()) {
                    return ResponseFormatter::success(
                        null,
                        'Data tutorial like title = ' . $title . ' tidak ada '
                    );
                }
                return ResponseFormatter::success(
                    $target,
                    'tutorial like title =' . $title . ' berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data tutorial tidak ada'
                );
            }
        }


        return ResponseFormatter::success(
            $tutorials,
            'Data tutorial berhasil diambil'
        );
    }
}
