<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Slider;
use App\SliderItems;
use App\Configuration;

class LugaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configure = Configuration::first();
        $lugares = Category::Where('parent_id',2)->with('posts')->get();
        
        return view('landing/lugares',['lugares'=>$lugares,'configure'=>$configure]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $configure = Configuration::first();
        $post = Post::where('slug',$slug)->first();

        $sliders = Slider::where('slug',$slug)->with('slideritems')->get();
       
      

        return view('landing/bancos',['post'=>$post,'sliders'=>$sliders,'configure'=>$configure]);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function bancos($slug)
    {
        $configure = Configuration::first();
        $post = Post::where('slug',$slug)->first();
       
        $sliders = Slider::where('slug',$slug)->with('slideritems')->get();

        //dd($post);

        if($slug == 'puntos-autorizados'){
            $post = Category::Where('id',7)->with('posts')->get();
            //dd($post);
            return view('landing/puntos',['post'=>$post,'configure'=>$configure]);
          }else{
           return view('landing/cajeros',['post'=>$post,'sliders'=>$sliders,'configure'=>$configure]);
          }
    }

    public function puntos()
    {
        $post = Post::where('slug','puntos-autorizados')->first();

       
         

        return view('landing/puntos',['post'=>$post,'configure'=>$configure]);

    }

    
}
