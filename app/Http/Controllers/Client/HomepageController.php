<?php

namespace App\Http\Controllers\Client;

use App\ProductBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function Homepage(){
        $book = ProductBook::paginate(8);
        return view('client.listItem.listHomepage') ->with('book',$book);
    }
    public function demo(){
        $book = ProductBook::paginate(4);
        return view('client.listItem.demo') ->with('book',$book);
    }
    public function ProductDetail($id){
//        $book = DB::table('product_books')->select('product_books.*')
//            ->where('product_books.id','=',$id)->get();
        $book = ProductBook::find($id);
        return view('client.listItem.productDetail') ->with('book',$book);
    }
}
