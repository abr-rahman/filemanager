<?php

namespace App\Http\Controllers;

use App\Models\TestmultipleUpload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class TestmultipleUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testmultiples = TestmultipleUpload::all();


        // $count = TestmultipleUpload::where('id', $id);

        $audios = [];
        $videos = [];
        $images = [];
        $documents = [];

        foreach($testmultiples as $item)
        {
            $fileName = $item->filename;

            $array = explode('.', $fileName);
            $extension = array_pop($array);
            $extension = strtolower($extension);

            if(in_array($extension, ['mp4', 'mkv', 'avi']))
            {
                $videos[] = $item;
            }

            if(in_array($extension, ['mp3', 'a3', 'a4', '3gp']))
            {
                $audios[] = $item;
            }

            if(in_array($extension, ['pdf', 'doc', 'docx', 'xl', 'ppt', 'dll', 'txt', 'zip']))
            {
                $documents[] = $item;
            }

            if(in_array($extension, ['png', 'jpeg', 'jpg', 'icon', 'webp']))
            {
                $images[] = $item;
            }
        }

        $picture = count($images);
        $videos = count($videos);
        $audios = count($audios);
        $documents = count($documents);

        return view('Testmultiple.index', compact('testmultiples', 'audios', 'videos', 'images', 'documents', 'picture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Testmultiple.create');
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
            'filename' => 'required',
        ]);

        $upload = $request->file('filename');

        if ($request->hasfile('filename')) {

            // $name = uniqid().'.' .$upload->getClientOriginalName();
            $name = $upload->getClientOriginalName();

            $upload->move(public_path() . '/files', $name);

            $file = new TestmultipleUpload();
            $file->filename = $name;
            $file->save();
        }

        // return redirect('testmultiple')->with('message', 'Your files added successfully!');
        return redirect('testmultiple')->with('success', 'Your files added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestmultipleUpload  $testmultipleUpload
     * @return \Illuminate\Http\Response
     */
    public function show(TestmultipleUpload $testmultipleUpload)
    {
        return "HI";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestmultipleUpload  $testmultipleUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(TestmultipleUpload $testmultipleUpload)
    {
        $testmultiples = TestmultipleUpload::all();
        return view('Testmultiple.edit', compact('testmultiples'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestmultipleUpload  $testmultipleUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestmultipleUpload $testmultipleUpload)
    {
        return ('hi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestmultipleUpload  $testmultipleUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestmultipleUpload $testmultipleUpload)
    {
        //
    }

    // public function multipleedit($id)
    // {
    //     return ('hi');
    // }
}
