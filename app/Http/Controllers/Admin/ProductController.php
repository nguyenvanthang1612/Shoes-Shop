<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCreate;
use App\Http\Requests\Admin\ProductEdit;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //all product table
    public function allIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
        ->paginate(10);
        return view('backend.product.all', [
            'products' => $products
        ]);
    }

    // man product table
    public function manIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name_category', '=', 'Men')
        ->paginate(10);
        return view('backend.product.man', [
            'products' => $products
        ]);
    }

    // woman product table
    public function womanIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name_category', '=', 'Women')
            ->paginate(10);
        return view('backend.product.woman', [
            'products' => $products
        ]);
    }

    // kid product table
    public function kidIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name_category', '=', 'Kid')
        ->paginate(10);
        return view('backend.product.kid', [
            'products' => $products
        ]);
    }

    // show create form
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create', [
            'categories' => $categories
        ]);

    }

    // action create form
    public function store(ProductCreate $request)
    {
        [$files, $fileName] = $this->upload($request);
        $inventory = Inventory::create(['quantity' => $request->input('quantity')]);
        $product = Product::create(array_merge($request->except('quantity'), ['img' => $fileName, 'inventory_id' => $inventory->id]));
        if ($product)
        {
            $files->storeAs('', $fileName, 'product');
            return redirect('/admin/product');
        }
    }

    // edit form
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::with('inventory')->where('id', $id)->first();
        return view('backend.product.edit', [
            'categories' => $categories,
            'product' => $product,
        ]);
    }

    // action edit form
    public function update(ProductEdit $request, $id)
    {
        [$files, $fileName] = $this->upload($request);
        $product = Product::findOrFail($id);
        $product->update(array_merge($request->except('quantity'), ['img' => $fileName]));
        Inventory::findOrFail($product->inventory_id)->update(['quantity' => $request->input('quantity')]);
        if ($product)
        {
            if ($request->hasFile('img')) {
                $files->storeAs('', $fileName, 'product');
            }
            return redirect('admin/product');
        }
    }

    // upload image
    public function upload(Request $request)
    {
        $fileName = "";
        if ($request->hasFile('img')) {
            $files = $request->file('img');
            foreach ($files as $file) {
                $fileName = $file->getClientOriginalName();
            }
            return [$files, $fileName];
        }
        return [null, $request->input('img')];
    }

    // delete product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $result = $product->delete($id);
        return  redirect()->route('product.index');
    }

    // search all product
    public function searchAll(Request $request)
    {
        $searchText = $request->input('search');
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name', 'LIKE', '%'.$searchText.'%')
            ->paginate(10);
        return view('backend.product.all', [
            'products' => $products
        ]);
    }

     // search man product
    public function searchMan(Request $request)
    {
        $searchText = $request->input('search');
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name', 'LIKE', '%'.$searchText.'%')
            ->where('name_category', '=', 'Men')
            ->paginate(10);
        return view('backend.product.man', [
            'products' => $products
        ]);
    }

     // search woman product
    public function searchWoman(Request $request)
    {
        $searchText = $request->input('search');
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name', 'LIKE', '%'.$searchText.'%')
            ->where('name_category', '=', 'Women')
            ->paginate(10);
        return view('backend.product.woman', [
            'products' => $products
        ]);
    }

     // search kid product
    public function searchKid(Request $request)
    {
        $searchText = $request->input('search');
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name', 'LIKE', '%'.$searchText.'%')
            ->where('name_category', '=', 'Kid')
            ->paginate(10);
        return view('backend.product.kid', [
            'products' => $products
        ]);
    }
}
