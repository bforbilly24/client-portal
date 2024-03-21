<?php

namespace App\Http\Controllers\Admin;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Contracts\DataTable;
use App\Http\Requests\Admin\ClientRequest;
use App\Http\Requests\Admin\TutorialRequest;
use App\Models\Tutorial;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DateTime;
use DateTimeZone;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        if (request()->ajax()) {
            $query = Tutorial::query();


            // $query = DB::table('clients')->get();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href=" ' . route('tutorial.edit', $item->id) . ' ">
                                    Edit
                                </a>
                                <form action=" ' . route('tutorial.destroy', $item->id) . ' " method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
                })
                ->editColumn('url_thumbnail', function ($item) {
                    return '<img style="width: 160px; height: 90px" src="' . $item->url_thumbnail . '"/>';
                })
                ->rawColumns(['action', 'url_thumbnail'])
                ->make();
        }



        return view('pages.admin.tutorial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tutorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorialRequest $request)
    {

        $videoId = Youtube::parseVidFromURL($request->link);
        $video = Youtube::getVideoInfo($videoId);

        $carbonDuration = CarbonInterval::create($video->contentDetails->duration);
        $durationInSeconds = intval($carbonDuration->totalSeconds);

        // Membuat objek DateTime dari format ISO 8601 dan menetapkan zona waktu
        $iso8601DateTime = $video->snippet->publishedAt;
        $dateTime = new DateTime($iso8601DateTime, new DateTimeZone('UTC'));
        // Mengonversi ke format "23 Desember 2023"
        $formattedDate = $dateTime->format('d F Y');

        if ($durationInSeconds > 3600) {
            $hours = floor($durationInSeconds / 3600);
            $minutes = floor(($durationInSeconds % 3600) / 60);
            $seconds = $durationInSeconds % 60;

            // Mendapatkan format jam:menit:detik
            $formattedDuration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

            $duration = $formattedDuration;
        } else {
            $minutes = floor($durationInSeconds / 60);
            $seconds = $durationInSeconds % 60;

            // Mendapatkan format menit:detik
            $formattedDuration = sprintf('%02d:%02d', $minutes, $seconds);

            $duration = $formattedDuration;
        }
        // dd($video);

        Tutorial::create([
            'author' => $request->author,
            'title' => $video->snippet->title,
            'description' => $video->snippet->description,
            'url_thumbnail' => $video->snippet->thumbnails->high->url,
            'embed_html' => $video->player->embedHtml,
            'duration' => $duration,
            'published_at' => $formattedDate,
            'link' => $request->link,
        ]);

        return redirect()->route('tutorial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tutorial::findOrFail($id);


        return view('pages.admin.tutorial.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TutorialRequest $request, $id)
    {
        $item = Tutorial::findOrFail($id);

        $videoId = Youtube::parseVidFromURL($request->link);
        $video = Youtube::getVideoInfo($videoId);

        $carbonDuration = CarbonInterval::create($video->contentDetails->duration);
        $durationInSeconds = intval($carbonDuration->totalSeconds);

        // Membuat objek DateTime dari format ISO 8601 dan menetapkan zona waktu
        $iso8601DateTime = $video->snippet->publishedAt;
        $dateTime = new DateTime($iso8601DateTime, new DateTimeZone('UTC'));
        // Mengonversi ke format "23 Desember 2023"
        $formattedDate = $dateTime->format('d F Y');

        if ($durationInSeconds > 3600) {
            $hours = floor($durationInSeconds / 3600);
            $minutes = floor(($durationInSeconds % 3600) / 60);
            $seconds = $durationInSeconds % 60;

            // Mendapatkan format jam:menit:detik
            $formattedDuration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

            $duration = $formattedDuration;
        } else {
            $minutes = floor($durationInSeconds / 60);
            $seconds = $durationInSeconds % 60;

            // Mendapatkan format menit:detik
            $formattedDuration = sprintf('%02d:%02d', $minutes, $seconds);

            $duration = $formattedDuration;
        }
        // dd($video);

        $item->update([
            'author' => $request->author,
            'title' => $request->snippet->title,
            'description' => $video->snippet->description,
            'url_thumbnail' => $video->snippet->thumbnails->high->url,
            'embed_html' => $video->player->embedHtml,
            'duration' => $duration,
            'published_at' => $formattedDate,
            'link' => $request->link,
        ]);


        return redirect()->route('tutorial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Tutorial::findOrFail($id);
        // $projectdelete = Project::where('clients_id', $id);
        // $project = Project::where('clients_id', $id)->get();
        // foreach ($project as $projects) {
        //     File::delete(public_path('storage/' . $projects->photo));
        // }

        $item->delete();
        // $projectdelete->delete();
        return redirect()->route('tutorial.index');
    }
}
