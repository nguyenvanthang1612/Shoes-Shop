<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCreateRequest;
use App\Http\Requests\Admin\ProductEdit;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //all product table
    public function allIndex(Request $request)
    {
        $searchText = $request->query('search');
        $products = $searchText ? Product::with('category')->with('inventory')->where('name', 'LIKE', "%$searchText%")->paginate(10) : Product::with('category')->with('inventory')->paginate(10);
        return view('backend.product.all', [
            'products' => $products
        ]);
    }

    // man product table
    public function manIndex(Request $request)
    {
        $searchText = $request->query('search');
        $products = $searchText ? Product::whereHas('category', function ($query) {
            return $query->where('name_category', 'Men');
        })->with('inventory')->where('name', 'LIKE', "%$searchText%")->paginate(10) :
            Product::whereHas('category', function ($query) {
                return $query->where('name_category', 'Men');
            })->with('inventory')->paginate(10);

        return view('backend.product.man', [
            'products' => $products
        ]);
    }

    // woman product table
    public function womanIndex(Request $request)
    {
        $searchText = $request->query('search');
        $products = $searchText ?
            Product::whereHas('category', function ($query) {
                return $query->where('name_category', 'Women');
            })->with('inventory')->where('name', 'LIKE', "%$searchText%")->paginate(10)
            :
            Product::whereHas('category', function ($query) {
                return $query->where('name_category', 'Women');
            })->with('inventory')->paginate(10);

        return view('backend.product.woman', [
            'products' => $products
        ]);
    }

    // kid product table
    public function kidIndex(Request $request)
    {
        $searchText = $request->query('search');
        $products = $searchText ?
            Product::whereHas('category', function ($query) {
                return $query->where('name_category', 'Kid');
            })->with('inventory')->where('name', 'LIKE', "%$searchText%")->paginate(10)
            :
            Product::whereHas('category', function ($query) {
                return $query->where('name_category', 'Kid');
            })->with('inventory')->paginate(10);

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
    public function store(ProductCreateRequest $request)
    {
        // [$files, $fileNames] = $this->upload($request);
        $images = $request->file('img');
        $imageNames = [];
        foreach ($images as $image) {
            $imageNames[] = $image->getClientOriginalName();
        }
        $inventory = Inventory::create(['quantity' => $request->input('quantity')]);
        $product = Product::create(array_merge($request->except('quantity'), ['img' => $imageNames, 'inventory_id' => $inventory->id]));
        if ($product && $inventory) {
            foreach ($images as $image) {
                $image->storeAs('', $image->getClientOriginalName(), 'product');
            }
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
        $images = $request->file('img');
        $imageNames = [];
        foreach ($images as $image) {
            $imageNames[] = $image->getClientOriginalName();
        }
        $product = Product::findOrFail($id)->update(array_merge($request->except('quantity'), ['img' => $imageNames]));
        Inventory::findOrFail($product->inventory_id)->update(['quantity' => $request->input('quantity')]);
        if ($product) {
            foreach ($images as $image) {
                $image->storeAs('', $image->getClientOriginalName(), 'product');
            }
            return redirect('admin/product');
        }
    }

    // delete product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $result = $product->delete($id);
        return  redirect()->route('product.index');
    }
}
