<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class FrontController extends Controller
{
   public function index(){
      $result['home_categories']=DB::table('categories')
      ->where(['status'=>1])
      ->get();

      $result['home_banners']=DB::table('home_banners')
      ->where(['status'=>1])
      ->get();

      $result['home_brand']=DB::table('brands')
      ->where(['status'=>1])
      ->get();
      foreach($result['home_categories'] as $lits){
         $result['home_categories_product'][$lits->id]=DB::table('products')
         ->where(['status'=>1])
         ->where(['category_id'=>$lits->id])
         ->get();
         foreach($result['home_categories_product'][$lits->id] as $lits1){
            $result['home_product_attr'][$lits1->id]=DB::table('product_attr')
            ->leftjoin('sizes','sizes.id','=','product_attr.size_id')
            ->leftjoin('colores','colores.id','=','product_attr.color_id')
            ->where(['product_id'=>$lits1->id])
            ->get();
         }
      }

      $result['home_featured_product'][$lits->id]=DB::table('products')
         ->where(['is_featured'=>1])
         ->where(['status'=>1])
         ->get();
         foreach($result['home_featured_product'][$lits->id] as $lits1){
            $result['home_featured_product_attr'][$lits1->id]=DB::table('product_attr')
            ->leftjoin('sizes','sizes.id','=','product_attr.size_id')
            ->leftjoin('colores','colores.id','=','product_attr.color_id')
            ->where(['product_id'=>$lits1->id])
            ->get();
         }

         $result['home_trending_product'][$lits->id]=DB::table('products')
         ->where(['is_trending'=>1])
         ->where(['status'=>1])
         ->get();
         foreach($result['home_trending_product'][$lits->id] as $lits1){
            $result['home_trending_product_attr'][$lits1->id]=DB::table('product_attr')
            ->leftjoin('sizes','sizes.id','=','product_attr.size_id')
            ->leftjoin('colores','colores.id','=','product_attr.color_id')
            ->where(['product_id'=>$lits1->id])
            ->get();
         }

         $result['home_descounted_product'][$lits->id]=DB::table('products')
         ->where(['is_descounted'=>1])
         ->where(['status'=>1])
         ->get();
         foreach($result['home_descounted_product'][$lits->id] as $lits1){
            $result['home_descounted_product_attr'][$lits1->id]=DB::table('product_attr')
            ->leftjoin('sizes','sizes.id','=','product_attr.size_id')
            ->leftjoin('colores','colores.id','=','product_attr.color_id')
            ->where(['product_id'=>$lits1->id])
            ->get();
         }
         // echo "<pre>";
         // print_r($result);
         // echo "</pre>";
    return view('front.index', $result);
   }
   public function product(Request $request, $slug){
      $result['product']=DB::table('products')
         ->where(['slug'=>$slug])
         ->where(['status'=>1])
         ->get();
         foreach($result['product'] as $lits1){
            $result['product_attr'][$lits1->id]=DB::table('product_attr')
            ->leftjoin('sizes','sizes.id','=','product_attr.size_id')
            ->leftjoin('colores','colores.id','=','product_attr.color_id')
            ->where(['product_id'=>$lits1->id])
            ->get();
         }
         // echo "<pre>";
         // print_r($result);

         $result['related_product']=DB::table('products')
         ->where('slug','!=',$slug)
         ->where(['status'=>1])
         ->where(['category_id'=>$result['product'][0]->category_id])
         ->get();

         foreach($result['related_product'] as $lits1){
            $result['related_product_attr'][$lits1->id]=DB::table('product_attr')
            ->leftjoin('sizes','sizes.id','=','product_attr.size_id')
            ->leftjoin('colores','colores.id','=','product_attr.color_id')
            ->where(['product_id'=>$lits1->id])
            ->get();
         }

         foreach($result['product'] as $lits1){
            $result['product_images'][$lits1->id]=DB::table('product_images')
            ->where(['product_id'=>$lits1->id])
            ->get();
         }

      return view("front.product", $result);
   }
}
