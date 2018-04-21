<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Recruit;

class RecruitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruits = Recruit::all();
        return view('admin.recruits.index', ['recruits' => $recruits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recruits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'type' => 'required|max:255',
            'main_image' => 'image|max:1000',
        ]);

        $recruit = new Recruit;
        $recruit->title = $request->title;
        $recruit->type = $request->type;
        $recruit->job = $request->job;
        $recruit->salary = $request->salary;
        $recruit->work_location = $request->work_location;
        $recruit->work_hours = $request->work_hours;
        $recruit->work_period = $request->work_period;
        $recruit->welfare = $request->welfare;
        if ($request->file('main_image')){
            $imageName = $request->file('main_image')->getClientOriginalName();
            if (preg_match("/^[a-zA-Z0-9]+$/", $imageName) === 1) {
                $imageName = str_shuffle(time().$request->file('main_image')->getClientOriginalName()). '.' . $request->file('main_image')->getClientOriginalExtension();
                $request->file('main_image')->move(public_path() . '/image/recruits', $imageName);
                $recruit->main_image = $imageName;
            } else{
                return redirect()->back()->withInput()->withErrors(['main_image' => 'ファイル名は半角英数字にしてください']);
            }
        }
        $recruit->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruit = Recruit::find($id);
        return view('admin.recruits.edit', ['recruit' => $recruit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'type' => 'required|max:255',
        ]);

        $recruit = Recruit::find($id);
        $recruit->title = $request->title;
        $recruit->type = $request->type;
        $recruit->job = $request->job;
        $recruit->salary = $request->salary;
        $recruit->work_location = $request->work_location;
        $recruit->work_hours = $request->work_hours;
        $recruit->work_period = $request->work_period;
        $recruit->welfare = $request->welfare;
        $recruit->save(); 
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recruit = Recruit::find($id);
        $recruit->delete();
        
        return redirect()->back();
    }
}
