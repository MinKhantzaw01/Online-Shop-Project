<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with('Category')->orderBy('id','Desc')->latest()->paginate(10);
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Category::all();
        return view('admin.product.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'cat_id'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);

        $file=$request->file('image');
        $file_name=uniqid().$file->getClientOriginalName();
        $file_path='image/'.$file_name;

        $file->storeAs('image',$file_name);

        Product::create([
            'slug'=>uniqid().Str::slug($request->name),
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->cat_id,
            'description'=>$request->description,
            'image'=>$file_path,
            'view_count'=>0,
        ]);
        return redirect(route('admin.product.index'))->with('success','Complete Product Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::where('id',$id)->with('Category')->first();
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Category::all();
        $product=Product::where('id',$id)->with('category')->first();
        return view('admin.product.edit',compact('product','cat'));
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
        $product=Product::find($id);

        if($request->file('image'))
        {
            $img_arr=explode('/',$product->image);
            Storage::disk('image')->delete($img_arr[1]);
            $file=$request->file('image');
            $file_name=uniqid(time()).$file->getClientOriginalName();
            $path='image/'.$file_name;

            $file->storeAs('image',$file_name);

        } else {
            $path=$product->image;
        }
        Product::where('id',$id)->update([
            'slug'=>uniqid().Str::slug($request->name),
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->cat_id,
            'description'=>$request->description,
            'image'=>$path,
        ]);

        return redirect()->back()->with('success','Complete Successfully Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $image_arr=explode('/',$product->first()->image);
        Storage::disk('image')->delete($image_arr[1]);
        $product->delete();

        return redirect(route('admin.product.index'))->with('success','Complete Successfully Delete!');
    }
}
