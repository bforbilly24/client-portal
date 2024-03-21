<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\UserRequest;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Contracts\DataTable;
use App\Http\Requests\Admin\ClientRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        if (request()->ajax()) {
            $query = User::query();


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
                                <a class="dropdown-item" href=" ' . route('user.edit', $item->id) . ' ">
                                    Edit
                                </a>
                                <a class="dropdown-item" href="/admin/user/editpassword/' . $item->id . ' ">
                                    Edit Password
                                </a>
                                <form action=" ' . route('user.destroy', $item->id) . ' " method="POST">
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



        return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/imgproject', 'public');

        $data['password'] = Hash::make($request->password);
        User::create($data);

        return redirect()->route('user.index');
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
        $item = User::findOrFail($id);


        return view('pages.admin.user.edit', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpassword($id)
    {
        $item = User::findOrFail($id);


        return view('pages.admin.user.editpassword', [
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
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);
        if ($request->hasFile('photo')) {

            $data['photo'] = $request->file('photo')->store('assets/imgproject', 'public');
            if ($item->photo) {
                Storage::delete($item->photo);
                File::delete(public_path('storage/' . $item->photo));
            }
        } else {
            $request['photo'] = $item->photo;
        }

        // $data['password'] = Hash::make($request->password);



        $item->update($data);

        return redirect()->route('user.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(UserRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);
        if ($request->hasFile('photo')) {

            $data['photo'] = $request->file('photo')->store('assets/imgproject', 'public');
            if ($item->photo) {
                Storage::delete($item->photo);
                File::delete(public_path('storage/' . $item->photo));
            }
        } else {
            $request['photo'] = $item->photo;
        }

        $data['password'] = Hash::make($request->password);



        $item->update($data);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);
        // $projectdelete = Project::where('clients_id', $id);
        // $project = Project::where('clients_id', $id)->get();
        // foreach ($project as $projects) {
        //     File::delete(public_path('storage/' . $projects->photo));
        // }
        File::delete(public_path('storage/' . $item->photo));

        $item->delete();
        // $projectdelete->delete();
        return redirect()->route('user.index');
    }
}