<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class DetailCommentController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $client = Client::with(['projects'])->where('slug', $id)->firstOrFail();
        $project = Project::all()->where('clients_id', $client->id)->count();
        $user = User::findOrFail(1);
        $data = $request->password;


        // if ($data != $client->password) {
        //     return view('pages.detailsubmit', [
        //         'client' => $client,
        //         'projecttotal' => $project,
        //     ]);
        // }

        // Cek apakah pengguna sudah memasukkan password dengan benar sebelumnya
        if ($request->session()->get('client_authenticated') != $client->id) {
            $data = $request->password;

            if ($data != $client->password) {
                // Jika password salah, kembalikan ke halaman input password
                if ($request->isMethod('post')) {
                    $request->session()->flash('error', 'Password salah, silakan coba lagi.');
                }


                return view('pages.detailsubmit', [
                    'client' => $client,
                    'projecttotal' => $project,
                ]);
            }

            // Jika password benar, simpan status login ke session
            $request->session()->put('client_authenticated', $client->id);
        }

        return view('pages.detailcomment', [
            'client' => $client,
            'projecttotal' => $project,
            'user' => $user,

        ]);
    }
}
