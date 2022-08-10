<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TestmultipleUpload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

class TestmultipleUploadController extends Controller
{

    public function index()
    {
        $testmultiples = TestmultipleUpload::all();

        // $count = TestmultipleUpload::where('id', $id);

        $audios = [];
        $videos = [];
        $images = [];
        $documents = [];

        foreach ($testmultiples as $item) {
            $fileName = $item->filename;

            $array = explode('.', $fileName);
            $extension = array_pop($array);
            $extension = strtolower($extension);

            if (in_array($extension, ['mp4', 'mkv', 'avi'])) {
                $videos[] = $item;
            }

            if (in_array($extension, ['mp3', 'a3', 'a4', '3gp'])) {
                $audios[] = $item;
            }

            if (in_array($extension, ['pdf', 'doc', 'docx', 'xl', 'ppt', 'dll', 'txt', 'zip'])) {
                $documents[] = $item;
            }

            if (in_array($extension, ['png', 'jpeg', 'jpg', 'icon', 'webp'])) {
                $images[] = $item;
            }
        }

        $picture = count($images);
        $videos = count($videos);
        $audios = count($audios);
        $documents = count($documents);

        return view('Testmultiple.index', compact('testmultiples', 'audios', 'videos', 'images', 'documents', 'picture'));
    }

    public function create()
    {
        return view('Testmultiple.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'required',
        ]);

        $upload = $request->file('filename');

        if ($request->hasfile('filename')) {
            $file = new TestmultipleUpload();
            $name = $upload->getClientOriginalName();
            // $extension = $upload->getClientOriginalExtension();
            $upload->move(public_path() . '/files', $name);
            $file->filename = $name;
            $file->save();
        }

        // return redirect('testmultiple')->with('message', 'Your files added successfully!');
        return redirect('testmultiple')->with('success', 'Your files added successfully!');
    }

    public function show(Request $request, $id)
    {
    }


    public function edit(TestmultipleUpload $testmultipleUpload, $id)
    {
        $testmultiples = TestmultipleUpload::find($id);
        return view('Testmultiple.edit', compact('testmultiples'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'filename' => 'required',
        ]);

        $testmultiple = TestmultipleUpload::find($id);
        if ($request->hasFile('filename')) {
            // Delelte old file
            $oldFile = public_path('files/') . $testmultiple->filename;
            if (isset($oldFile) && !empty($oldFile)) {
                unlink($oldFile);
            }

            $upload = $request->file('filename');
            if ($request->hasfile('filename')) {
                $name = $upload->getClientOriginalName();
                $upload->move(public_path() . '/files', $name);
                $testmultiple->filename = $name;
            }
        }
        $testmultiple->save();
        return redirect('testmultiple')->with('success', 'Your files updated successfully!');
    }

    public function destroy(TestmultipleUpload $testmultipleUpload)
    {
        //
    }

    // public function multipleedit($id)
    // {
    //     return ('hi');
    // }
}
