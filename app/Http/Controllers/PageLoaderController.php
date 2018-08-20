<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Page;
use App\CategoryPage;

class PageLoaderController extends Controller
{
    public function index(Request $request){
           $path = $request->url();
        $categories = $request->segments();
          $countSeg   = count($categories);
           
          
          $fcategory  = null;
          $fpage      = null;
            if($countSeg>0){
                for($i = 0; $i <= $countSeg; $i++)
                {
                    
                    /*echo '<br>indice '.$i."<br>";
                    if(($i + 1) == $countSeg)
                    {
                    echo 'si 1 igual a contador';
                    //$fpage = $fcategory->Page()->where('slug', $categories[$i])->firstOrFail();
                    }
                    elseif($i == 0)
                    {
                        echo 'si 0 es igual 0';
                        
                    $fcategory = Category::where('slug', $categories[0])->firstOrFail();
                    print_r($fcategory);
                    }
                    else
                    {
                    echo 'b4'; 
                    //$fcategory = $fcategory->SubCategories()->where('slug', $categories[$i])->firstOrFail();
                    }*/
                    if($i==$countSeg){
                       
                    //$fcategory = Category::where('slug', $categories[0])->firstOrFail();
                        $parent = Category::where('slug',$categories[$i-1])->first();
                      
                        //parent id
                        $parent_id = $parent->id;
                        //gat
                         $categorias = Category::where('parent_id',$parent_id)->orderby('order','asc')->get();
                        
                        if(count($categorias)>0){
                         return view('landing.dudas',['categorias'=>$categorias,'path'=>$path]);
                        }else{
                            $datos = CategoryPage::where('category_id',$parent_id)->first();
                            
                            return view('landing.'.$datos->template,['datos']);
                        }
                    }
                }
            }else{
                return 'vista home';
            }
          
    }
}