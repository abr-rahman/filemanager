<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestmultipleUpload;

class LayeoutController extends Controller
{
    public function gridlayet(){
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

        return view('grid.index', compact('testmultiples', 'audios', 'videos', 'images', 'documents'));
    }

    public function listvideo(){
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

        return view('grid.video', compact('testmultiples', 'audios', 'videos', 'images', 'documents'));
    }
    public function listaudio(){
        $testmultiples = TestmultipleUpload::all();

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

        return view('grid.audio', compact('testmultiples', 'audios', 'videos', 'images', 'documents'));
    }
}











