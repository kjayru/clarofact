<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Page;
use App\CategoryPage;
use App\Position;
use App\Layer;
use App\InvoiceItem;
use App\Invoice;
use App\Configuration;

class PageLoaderController extends Controller
{
    public function index(Request $request){
          $path = $request->url();
          $categories = $request->segments();
          $countSeg   = count($categories);

          $fcategory  = null;
          $fpage      = null;

            if($countSeg>0 && $countSeg<4){
                for($i = 0; $i <= $countSeg; $i++)
                {
                    
                    
                    if($i==$countSeg){
                  
                        $parent = Category::where('slug',$categories[$i-1])->first();                
                        $parent_id = $parent->id;
                  
                        $categorias = Category::where('parent_id',$parent_id)->orderby('order','asc')->get();
                        
                        if(count($categorias)>0){

                            switch($countSeg){
                                case 1: 
                                 return view('landing.dudas',['categorias'=>$categorias,'path'=>$path]);
                                break;

                                case 2:
                                return view('landing.dudas2',['categorias'=>$categorias,'path'=>$path]);
                                break;

                                case 3:
                                return view('landing.dudas3',['categorias'=>$categorias,'path'=>$path]);
                                break;
                            }
                           
                         
                        }else{

                           
                            $datos = CategoryPage::where('category_id',$parent_id)->first();
                            $category_id = $datos->category_id;
                            $configure = Configuration::first();
                      
                            $recibo = Invoice::where('category_id',$category_id)->first();
                            $recibos = Invoice::where('category_id',$category_id)->get();
                            $invoices = InvoiceItem::where('invoice_id',$recibo->id)->with('positions','layers')->get();
                            $path = $categories[0].'/'.$categories[1].'/'.$categories[2];
                            $titulo = 'Hoja 1';
                            $pag= 'hoja-1';
                            return view('landing.'.$datos->template,['path'=>$path,'datos'=>$datos,'invoices'=>$invoices,'recibos'=>$recibos,'pag'=>$pag,'titulo'=>$titulo,'configure'=>$configure]);

                            
                        }
                    }
                }
            }else{


                $configure = Configuration::first();

                $parent = Category::where('slug',$categories[2])->first();  
                         
                $parent_id = $parent->id;

                $datos = CategoryPage::where('category_id',$parent_id)->first();
                $category_id = $datos->category_id;


                $categorias = Category::where('id',$parent_id)->orderby('order','asc')->get();

                
                $slugrecibo = $categories[3];
               
                $recibo = Invoice::where([['slug','=',$slugrecibo],['category_id','=',$category_id]])->first();
                
                $recibos = Invoice::where('category_id',$category_id)->get();
                $invoices = InvoiceItem::where('invoice_id',$recibo->id)->with('positions','layers')->get();
        
        $ppurl = explode("/",$_SERVER['REQUEST_URI']);
        $pag= $ppurl[2];
        $titulo = $recibo->name;

        $path = $categories[0].'/'.$categories[1].'/'.$categories[2];
        return view('landing.'.$datos->template,['path'=>$path,'invoices'=>$invoices,'recibos'=>$recibos,'pag'=>$pag,'titulo'=>$titulo,'configure'=>$configure]);
                
                
            }
          
    }
}