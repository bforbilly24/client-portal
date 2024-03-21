<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        if (request()->ajax()) {
            $query = Project::query()->where('clients_id', $client->id);


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
                                <a class="dropdown-item" href=" ' . route('project.edit', $item->id) . ' ">
                                    Edit
                                </a>
                                <form action=" ' . route('project.destroy', $item->id) . ' " method="POST">
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


        return view('pages.admin.project.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Client $client)
    {
        return view('pages.admin.project.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request, Client $client)
    {

        $data = $request->all();
        $data['clients_id'] = $client->id;

        $data['photo'] = $request->file('photo')->store('assets/imgproject', 'public');
        Project::create($data);

        return redirect()->route('client.project.index', $client->id);
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
    public function edit(Project $project)
    {
        $item = $project;

        return view('pages.admin.project.edit', [
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
    public function update(ProjectRequest $request, Project $project)
    {
        $data = $request->all();
        $item = $project;
        if ($request->hasFile('photo')) {

            $data['photo'] = $request->file('photo')->store('assets/imgproject', 'public');
            if ($item->photo) {
                Storage::delete($item->photo);
                File::delete(public_path('storage/' . $item->photo));
            }
        } else {
            $request['photo'] = $item->photo;
        }

        $item = $project;

        $item->update($data);

        return redirect()->route('client.project.index', $project->clients_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        File::delete(public_path('storage/' . $project->photo));
        $project->delete();
        return redirect()->route('client.project.index', $project->clients_id);
    }
}
