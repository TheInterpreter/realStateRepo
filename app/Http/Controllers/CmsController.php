<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cms;
use App\Images;
use Illuminate\Support\Facades\Input;

class CmsController extends Controller
{
    /**
     * Display a listing of the properties.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmss = Cms::paginate(24);
        $images = Images::all();
        return view('pages.index', compact('cmss', 'images'));
    }

    /**
     * Show the form for creating a new properties.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created properties in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'property-name' => 'Required',
            'property-address' => 'Required',
            'property-cost' => 'Required',
            'property-description' => 'Required'
        ]);
        $cmss = new Cms;
        // $images = new images;
        $destinationPath = 'uploads/';
        $cmss->name = $request->input('property-name');
        $cmss->address = $request->input('property-address');
        $cmss->cost = $request->input('property-cost');
        $cmss->description = $request->input('property-description');
        $cmss->save();
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $fileimage) {

                $namebefore = $fileimage->getClientOriginalName();
                // $ext = $fileimage->getClientOriginalExtension();
                $filename = time().$namebefore;
                // $filename = $fileimage->getClientOriginalName();
                $fileimage->move($destinationPath, $filename);
                $image = new Images;
                $image->picroute = $filename;
                $cmss->images()->save($image);
            }
        }
        return redirect('/cms')->with('info', 'The property is now added to our Database');
    }
    /**
     * Display the specified properties.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified properties.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cmss = Cms::find($id);
        return view('pages.edit', compact('cmss', 'id'));
    }

    /**
     * Update the specified properties in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cmss = Cms::find($id);
        $cmss->name = $request->get('property-name');
        $cmss->address = $request->get('property-address');
        $cmss->cost = $request->get('property-cost');
        $cmss->description = $request->get('property-description');
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $file->move('uploads', $file->getClientOriginalName());
            $cmss->picroute = $file->getClientOriginalName();
        }
        $cmss->save();
        return redirect('cms')->with('info', 'The property is now edited');
    }


    /**
     * Remove the specified properties from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cmss= Cms::find($id);
        $cmss->delete();
        return redirect('/cms')->with('success', 'information has been deleted');
    }


    public function delete($id)
    {
        $cmss = Cms::find($id);
        return view('pages.delete', compact('cmss', 'id'));
    }



    // public function upload()
    // {
    //     if (Input::hasFile('file')) {
    //         return redirect('');
    //         $file = Input::file('file');
    //         $file->move('uploads', $file->getClientOriginalName());
    //         echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
    //     }
    // }

}
