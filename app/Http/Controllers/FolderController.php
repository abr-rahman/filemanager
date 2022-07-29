<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestmultipleUpload;

class FolderController extends Controller
{
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
        return view('Testmultiple.photo', compact('images'));
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

            if (in_array($extension, ['mp4', 'mkv', 'avi'])) {
                $videos[] = $item;
            }

        }
        return view('Testmultiple.video', compact('videos'));
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
        return view('Testmultiple.odio', compact('audios'));
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

        return view('Testmultiple.documents', compact('documents'));
    }

    public function testmultipleedit(){
        return ('hi');
    }

}
