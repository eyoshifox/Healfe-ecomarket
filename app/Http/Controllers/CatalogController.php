<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CatalogController extends Controller
{


    public function index($id = 0)
    {
        $categories = Category::all();

        if($id == 0) {
            $items = Item::all();
            $swiper1 = Item::where('swiper', 'товары недели')->get();
            $swiper2 = Item::where('swiper', 'акции')->get();
            $swiper3 = Item::where('swiper', 'рекомендованные')->get();
            return view('index', [
                'categories' => $categories,
                'swiper1' => $swiper1,
                'swiper2' => $swiper2,
                'swiper3' => $swiper3,
                'items' => $items
            ]);
        } else {
            $items = Item::where('category', $id)->get();
            $swiper1 = Item::where('swiper', 'товары недели')->get();
            $swiper2 = Item::where('swiper', 'акции')->get();
            $swiper3 = Item::where('swiper', 'рекомендованные')->get();
            $nameCategory = Category::find($id);

            return view('index', [
                'categories' => $categories,
                'items' => $items,
                'swiper1' => $swiper1,
                'swiper2' => $swiper2,
                'swiper3' => $swiper3,
                'nameCategory' => $nameCategory
            ]);
        }
    }
    public function catalog ($id = 0)
    {
        $categories = Category::all();
        if($id == 0) {
            $items = Item::all();
            return view('catalog', [
                'categories' => $categories,
                
                'items' => $items
            ]);
        } else {
            $items = Item::where('category', $id)->get();
            
            $nameCategory = Category::find($id);

            return view('catalog', [
                'categories' => $categories,
                'items' => $items,
                'nameCategory' => $nameCategory
            ]);
        }
    }
    public function sortItems(Request $r)
    {
        $items = Item::when($r->category, function ($query, $category) {
            $query->where('category', $category);
        })
        ->orderBy($r->sort, 'asc')
        ->get();

        return view('incl.item', [
            'items' => $items
        ]);
    }

    public function item($id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        return view('item', [
            'categories' => $categories,
            'item' => $item
        ]);
    }
    public function about ($id = 0)
    {
        $categories = Category::all();
        if($id == 0) {
            $items = Item::all();
            return view('about', [
                'categories' => $categories,
                'items' => $items,
                
            ]);
        } else {
            $items = Item::where('category', $id)->get();
            
            $nameCategory = Category::find($id);
            return view('about', [
                'categories' => $categories,
                'items' => $items,
                'nameCategory' => $nameCategory
            ]);
        
    }
    }
    public function contact ($id = 0)
    {
        $categories = Category::all();
        if($id == 0) {
            $items = Item::all();
            return view('contact', [
                'categories' => $categories,
                'items' => $items,
                
            ]);
        } else {
            $items = Item::where('category', $id)->get();
            
            $nameCategory = Category::find($id);
            return view('contact', [
                'categories' => $categories,
                'items' => $items,
                'nameCategory' => $nameCategory
            ]);
        
    }
  }
    public function news ($id = 0)
    {
        $categories = Category::all();
        if($id == 0) {
            $items = Item::all();
            return view('news', [
                'categories' => $categories,
                'items' => $items,
                
            ]);
        } else {
            $items = Item::where('category', $id)->get();
            
            $nameCategory = Category::find($id);
            return view('news', [
                'categories' => $categories,
                'items' => $items,
                'nameCategory' => $nameCategory
            ]);
        
    }
    }
    public function cart ($id = 0)
    {
        $categories = Category::all();
        if($id == 0) {
            $items = Item::all();
            return view('cart', [
                'categories' => $categories,
                'items' => $items,
                
            ]);
        } else {
            $items = Item::where('category', $id)->get();
            
            $nameCategory = Category::find($id);
            return view('cart', [
                'categories' => $categories,
                'items' => $items,
                'nameCategory' => $nameCategory
            ]);
        
    }
  }
  public function adminprofile ($id = 0)
    {
        $categories = Category::all();
        if($id == 0) {
            $items = Item::all();
            return view('adminprofile', [
                'categories' => $categories,
                'items' => $items,
                
            ]);
        } else {
            $items = Item::where('category', $id)->get();
            
            $nameCategory = Category::find($id);
            return view('adminprofile', [
                'categories' => $categories,
                'items' => $items,
                'nameCategory' => $nameCategory
            ]);
        
    }
    }
    
}
