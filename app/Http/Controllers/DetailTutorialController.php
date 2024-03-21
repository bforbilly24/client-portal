<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class DetailTutorialController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $client = Client::with(['projects'])->where('slug', $id)->firstOrFail();
        $tutorial = Tutorial::all();
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
                    'tutorial' => $tutorial,
                ]);
            }

            // Jika password benar, simpan status login ke session
            $request->session()->put('client_authenticated', $client->id);
        }

        return view('pages.detailtutorial', [
            'client' => $client,
            'tutorial' => $tutorial,

        ]);
    }
}
