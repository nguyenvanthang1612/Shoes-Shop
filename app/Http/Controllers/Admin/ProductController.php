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
    public function allIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->get();
        return view('backend.product.all', [
            'products' => $products
        ]);
    }

    public function manIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name_category', '=', 'Men')
            ->get();
        return view('backend.product.man', [
            'products' => $products
        ]);
    }

    public function womanIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name_category', '=', 'Women')
            ->get();
        return view('backend.product.all', [
            'products' => $products
        ]);
    }

    public function kidIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->orderBy('id', 'asc')
            ->where('name_category', '=', 'Kid')
            ->get();
        return view('backend.product.all', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create', [
            'categories' => $categories
        ]);

    }

    public function store(ProductCreate $request)
    {
        [$file, $fileName] = $this->upload($request);
        $inventory = Inventory::create(['quantity' => $request->input('quantity')]);
        $product = Product::create(array_merge($request->except('quantity'), ['img' => $fileName, 'inventory_id' => $inventory->id]));
        if ($product)
        {
            $file->storeAs('', $fileName, 'product');
            return redirect('/admin/product');
        }
    }

    public function edit($id)
    {
        $categories = Category::all();
        // $inventories = Inventory::all();
        $product = Product::with('inventory')->where('id', $id)->first();
        return view('backend.product.edit', [
            'categories' => $categories,
            'product' => $product,
            // 'inventories' => $inventories
        ]);
    }

    public function update(ProductEdit $request, $id)
    {
        [$file, $fileName] = $this->upload($request);
        $product = Product::findOrFail($id);
        $product->update(array_merge($request->except('quantity'), ['img' => $fileName]));
        Inventory::findOrFail($product->inventory_id)->update(['quantity' => $request->input('quantity')]);
        // $product = Product::findOrFail($id)->update($request->all());
        if ($product)
        {
            if ($request->hasFile('img')) {
                $file->storeAs('', $fileName, 'product');
            }
            return redirect('admin/product');
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = $file->getClientOriginalName();
            return [$file, $fileName];
        }
        return [null, $request->input('img')];
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $result = $product->delete($id);
        return  redirect()->route('product.index');
    } 
}
