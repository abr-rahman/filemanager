<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Response;
use File;

use function PHPUnit\Framework\directoryExists;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     '*' => 'required'
        // ]);

        if($request->hasfile('product_photo'))
        {

           foreach($request->file('product_photo') as $file)
           {
               $name=$file->getClientOriginalName();
               $file->move(public_path().'/uploads/', $name);
               $data[] = $name;
           }
        }

        $file= new Category();
        // $file->product_photo=json_encode($data);


       $file->save();


        // photo uploated code start
        // $new_name ="file-name ".Str::random(6).".". $request->file('product_photo')->getClientOriginalExtension();
        // $save_link = base_path('public/uploads/product_photo/') . $new_name;
        // Image::make($request->file('product_photo'))->resize(280,328)->save($save_link);

        // $file = $request->product_photo;
        // $new_name = time().'.'.$file->getClientOriginalExtension();
        // $request->product_photo->move('uploads', $new_name);

        // Category::insert([
        //     'created_by' => auth()->id(),
        //     'product_photo' => $new_name,
        //     'created_at' => Carbon::now()
        // ]);


    // photo uploated code end

    return back()->with('success', 'Category added Successfully');

        // return response()->json([
        //     'error' => 'This Coupon Name is not exists'
        // ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            '*' => 'required'
        ]);

        $category->category_name = $request->category_name;
        $category->save();
        // return back()->withErrors([
        //     'errors'=> 'Discounted Price too long!'
        //    ]);
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('delete', 'Category Deleted Successfully');
    }

    public function openfile(Category $category)
    {
        return view('category.open');
    }

    public function testfile(Category $category)
    {
        return view('category.test');
    }



    public function applyfile(Request $request)
    {
            // $this->validate($request, [
            // 'product_photo' => 'required',
            // 'product_photo.*' => 'mimes:doc,pdf,docx,zip'
            // ]);

            if($request->hasfile('product_photo')){

            foreach($request->file('product_photo') as $file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);
                $data[] = $name;
            }
        }

         $file= new Category();
         $file->product_photo=json_encode($data);


        $file->save();

        return back()->with('success', 'Your files has been successfully added');

    }
}
