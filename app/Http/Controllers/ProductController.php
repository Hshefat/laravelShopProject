<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller



{
    //
    public function createProduct()
    {

        $categories = Category::where('publicationStatus', 1)->get();
        $manufacturers = Manufacturer::where('publicationStatus', 1)->get();
        return view('admin.product.createProduct', ['categories' => $categories, 'manufacturers' => $manufacturers]);
    }

    public function storeProduct(Request $request)
    {
        //return $request->all();

        $this->validate($request, [

            'productName' => 'required',
            'productPrice' => 'required',
            'productQuantity' => 'required',
            'productImage' => 'required',

        ]);

        $productImage =  $request->file('productImage');
        /*  echo '<pre>';
        print_r($productImage); */

        $imageName = $productImage->getClientOriginalName();
        // echo $imageName;
        $uploadPath = 'productImage/';
        $productImage->move($uploadPath, $imageName);
        $imageUrl = $uploadPath . $imageName;
        $this->saveProductInfo($request, $imageUrl);
        return redirect('/product/add')->with('message', 'Product info save successfully');
    }


    public function saveProductInfo($request, $imageUrl)
    {

        $product = new Product();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
    }

    public function manageProduct()
    {

        /*  $products = Product::all();
        echo '<pre>';
        print_r($products);
        exit(); */

        $products = DB::table('products')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
            ->join('manufacturers', 'products.manufacturerId', '=', 'manufacturers.id')
            ->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuantity', 'products.publicationStatus', 'categories.categoryName', 'categories.categoryDescription', 'manufacturers.manufacturerName')
            ->get();
        return view('admin.product.manageProduct', ['products' => $products]);
    }

    public function viewProduct($id)
    {
        $productById = DB::table('products')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
            ->join('manufacturers', 'products.manufacturerId', '=', 'manufacturers.id')

            ->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuantity', 'products.publicationStatus', 'categories.categoryName', 'categories.categoryDescription', 'manufacturers.manufacturerName')
            ->where('products.id', $id)
            ->first();

        /* echo '<pre>';
        print_r($productById);
        exit(); */

        return view('admin.product.viewProduct', ['product' => $productById]);
    }

    public function editProduct($id)
    {
        $categories = Category::where('publicationStatus', 1)->get();
        $manufacturers = Manufacturer::where('publicationStatus', 1)->get();
        $productById = Product::where('id', $id)->first();
        return view('admin.product.editProduct', ['productById' => $productById, 'categories' => $categories, 'manufacturers' => $manufacturers]);
    }

    public function updateProduct(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        /* echo $imageUrl;
        exit(); */
    }

    private function imageExistStatus($request)
    {
        $productById = Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {

            $oldImageUrl = $productById->productImage;
            unlink($oldImageUrl);


            /*  echo '<pre>';
        print_r($productImage); */

            $imageName = $productImage->getClientOriginalName();
            // echo $imageName;
            $uploadPath = 'productImage/';
            $productImage->move($uploadPath, $imageName);
            $imageUrl = $uploadPath . $imageName;
        } else {

            $imageUrl = $productById->productImage;
        }
        return $imageUrl;
    }
}