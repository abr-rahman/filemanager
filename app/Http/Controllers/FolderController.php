<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestmultipleUpload;
use Illuminate\Support\Facades\File;

class FolderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function photofolder()
    {
        $testmultiple = TestmultipleUpload::all();

        $images = [];

        foreach ($testmultiple as $item) {
            $fileName = $item->filename;

            $array = explode('.', $fileName);
            $extension = array_pop($array);
            $extension = strtolower($extension);

            if (in_array($extension, ['png', 'jpeg', 'jpg', 'icon', 'webp'])) {
                $images[] = $item;
            }
        }


        return view('folder.photo', compact('images'));
    }

    public function videofolder()
    {
        $testmultiple = TestmultipleUpload::all();

        $videos = [];

        foreach ($testmultiple as $item) {
            $fileName = $item->filename;

            $array = explode('.', $fileName);
            $extension = array_pop($array);
            $extension = strtolower($extension);

            if (in_array($extension, ['mp4', 'mkv', 'avi', 'ogg', '3gp', 'm4a'])) {
                $videos[] = $item;
            }

        }
        return view('folder.video', compact('videos'));
    }


    public function odiofolder()
    {
        $testmultiple = TestmultipleUpload::all();

        $audios = [];

        foreach ($testmultiple as $item) {
            $fileName = $item->filename;

            $array = explode('.', $fileName);
            $extension = array_pop($array);
            $extension = strtolower($extension);


            if (in_array($extension, ['mp3', 'a3', 'a4', '3gp'])) {
                $audios[] = $item;
            }
        }
        return view('folder.odio', compact('audios'));
    }


    public function documentfolder()
    {
        $testmultiple = TestmultipleUpload::all();

        $documents = [];

        foreach ($testmultiple as $item) {
            $fileName = $item->filename;

            $array = explode('.', $fileName);
            $extension = array_pop($array);
            $extension = strtolower($extension);

            if (in_array($extension, ['pdf', 'doc', 'docx', 'xl', 'ppt', 'dll', 'txt', 'zip'])) {
                $documents[] = $item;
            }
        }

        return view('folder.documents', compact('documents'));
    }

    public function folderstore(Request $request){

        // return $request->folder_create;
        // File::mkdir(public_path() . '/folder');

        // File::makeDirectory(public_path(). 'new-folder');

        $result = file_exists(public_path('hello-world')) ?: File::makeDirectory('hello-world');
        $all =  scandir(public_path());

        $onlyFolders =  array_filter($all, function($item) {
            return is_dir($item) && !in_array($item, ['.', '..']);
        });

        // return $onlyFolders;
        return view('Testmultiple.index', compact('onlyFolders'));
    }
}

