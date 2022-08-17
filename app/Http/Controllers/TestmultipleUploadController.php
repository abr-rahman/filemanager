<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestmultipleUpload;
use Illuminate\Support\Facades\File;

class TestmultipleUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $images = count($images);
        $videos = count($videos);
        $audios = count($audios);
        $documents = count($documents);

        return view('Testmultiple.index', compact('testmultiples', 'audios', 'videos', 'images', 'documents'));
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
        return redirect('home')->with('success', 'Your files added successfully!');
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
        return redirect('home')->with('success', 'Your files updated successfully!');
    }

    public function destroy($id)
    {

        $delete = TestmultipleUpload::find($id);
        $oldFile = public_path('files/') . $delete->filename;
            unlink($oldFile);
        $delete->delete();
        return back();
    }

    public function folderstore(Request $request)
    {
        // $request->folder_create = File::makeDirectory(public_path() . '/folder');

        $result = file_exists(public_path('hello-world')) ?: File::makeDirectory('hello-world');
        $all =  scandir(public_path());

        $onlyFolders =  array_filter($all, function ($item) {
            return is_dir($item) && !in_array($item, ['.', '..']);
        });

        // return $onlyFolders;
        return view('Testmultiple.index', compact('onlyFolders'));
    }


}
