<?php

namespace App\Http\Controllers\Admin;

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

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        if (request()->ajax()) {
            $query = Client::query();


            // $query = DB::table('clients')->get();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <a href=" ' . route('client.project.index', $item->id) . ' " class="btn btn-dark rounded mb-3 mr-3">
                            Project
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href=" ' . route('client.edit', $item->id) . ' ">
                                    Edit
                                </a>
                                <a class="dropdown-item" href="/details/' . $item->slug . '"target="_blank">View</a>
                                <form action=" ' . route('client.destroy', $item->id) . ' " method="POST">
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
                ->rawColumns(['action'])
                ->make();
        }



        return view('pages.admin.client.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/imgproject', 'public');

        Client::create($data);

        return redirect()->route('client.index');
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
        $item = Client::findOrFail($id);


        return view('pages.admin.client.edit', [
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
    public function update(ClientRequest $request, $id)
    {
        $data = $request->all();

        $item = Client::findOrFail($id);
        if ($request->hasFile('photo')) {

            $data['photo'] = $request->file('photo')->store('assets/imgproject', 'public');
            if ($item->photo) {
                Storage::delete($item->photo);
                File::delete(public_path('storage/' . $item->photo));
            }
        } else {
            $request['photo'] = $item->photo;
        }

        $item->update($data);

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Client::findOrFail($id);
        $projectdelete = Project::where('clients_id', $id);
        $project = Project::where('clients_id', $id)->get();
        foreach ($project as $projects) {
            File::delete(public_path('storage/' . $projects->photo));
        }
        File::delete(public_path('storage/' . $item->photo));

        $item->delete();
        $projectdelete->delete();
        return redirect()->route('client.index');
    }
}
