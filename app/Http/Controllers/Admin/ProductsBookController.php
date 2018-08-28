<?php

namespace App\Http\Controllers\Admin;

use App\ProductBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductsBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ProductBook::paginate(4);
        return view('admin.listItem.ProductBook.listBook')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listItem.ProductBook.FormBook')->with([
            "product"=> new ProductBook(),
            "action"=>"/AdminProductBook",
            "method"=>"POST"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'bail|required|unique:product_books|max:50',
            'description' => 'required',
            'price' => 'required',
            'author'=>'required'

        ]);
        if ($validator->fails()) {
            return redirect('AdminProductBook/create')
                ->withErrors($validator->errors())
                ->withInput();
        }

        $product = new ProductBook();
        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->image = $request->get('avatar2');
        $product->author = $request->get('author');
        $product->categoryId = 1;
        $product->save();
        return redirect('/AdminProductBook');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = ProductBook::find($id);
        if ($product==null){
            return redirect("errors");
        }
        return view('admin.listItem.ProductBook.FormBook')->with([
            "product"=> $product,
            "action"=>"/AdminProductBook/" . $product->id,
            "method"=>"PUT"
        ]) ;
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
        $product = ProductBook::find($id);
        if ($product == null) {
            return view("errors.404");
        }

        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->image = "123.png";
        $product->save();
        if ($request->get("isAjax")) {
            return $product;
        } else {
            return redirect("AdminProductBook");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductBook::find($id);
        $item->delete();
        return redirect('AdminProductBook');
    }
}
