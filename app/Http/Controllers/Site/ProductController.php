<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;
use Cart;

class ProductController extends Controller
{
    protected $productRepository;
    protected $attributeRepository;

    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
    }

    public function show($slug)
    {
        $product = $this->productRepository->findProductBySlug($slug);
        $attributes = $this->attributeRepository->listAttributes();
        return view('site.pages.product', compact('product', 'attributes'));

        // dd($product);
    }
    

    public function addToCart(Request $request)
    {
        // dd($request);
        // echo ($request);
        $product = $this->productRepository->findProductById($request->input('productId'));
        $options = $request->except('_token', 'productId', 'price', 'qty');
        $p_id = $request->input('productId');
    
        Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options,  $p_id);
        
        // sdd(\Cart::getContent());
        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }
}