<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;
use App\Models\Order;
use App\Models\Banner;

class IndexController extends Controller

{
    private $menu;
    private $category;
    public function __construct(Category $category, product $product, Order $order, Banner $banner)
    {
        $this->category = $category;
        $this->product = $product;
        $this->order = $order;
        $this->banner = $banner;
        $this->menu = $category->where('parent_id', 0)->where('status', 1)->get();
    }
    public function index()
    {
        $banners= $this->banner->orderBy('prioty','ASC')->where('status',1)->get();
        $menus = $this->menu;
        $category = Category::all();
        $productHot = $this->product->where('hot', 0)->where('status',1)->get();
        $productNew = $this->product->limit(4)->OrderbyRaw('rand()')->get();
        return View('Home.index', [
            'title' => 'Trang chủ',
            'menus' => $menus,
            'productHot' => $productHot,
            'productNew' => $productNew,
            'banners' => $banners,
            'categories' => $category
        ]);
    }
    public function math()
    {

    }
    public function search(Request $request)
    {

        $cate = $this->category->get();
        $html = $this->category->getCategory('', $cate);
        $products = $this->product->searchProduct()->bycategory()->max()->min()->paginate(24);
        $productQt = $this->product->orderByRaw('rand()')->limit(6)->get();
        $menus = $this->menu;
        return View('Home.search', [
            'title' => 'Tìm kiếm',
            'menus' => $menus,
            'products' => $products,
            'productQt' => $productQt,
            'html' => $html
        ]);
    }
    public function category($slug = "")
    {
        $cate = $this->category->get();
        $cateName = $this->category->where('categorySlug', $slug)->select('categoryName')->first();
        $html = $this->category->getCategory('', $cate);
        $products = $this->product->searchProduct()->bycategory()->max()->min()->paginate(24);
        $menus = $this->menu;
        return View('Home.category', [
            'title' => 'Category',
            'menus' => $menus,
            'products' => $products,
            'cateName' => $cateName,
            'html' => $html


        ]);
    }
    public function detail($slug = "")
    {
        $html = $this->category->getCategory('', $this->category->get());
        $product = $this->product->where('productSlug', $slug)->first();
        $menus = $this->menu;
        return View('Home.detail', [
            'title' => 'detail',
            'menus' => $menus,
            'product' => $product,
            'html' => $html
        ]);
    }
    public function cart()
    {
        $menus = $this->menu;
        return View('Home.cart', [
            'title' => 'Giỏ hàng',
            'menus' => $menus,

        ]);
    }


    public function pay()
    {
        $menus = $this->menu;
        return View('Home.pay', [
            'title' => 'Thanh toán',
            'menus' => $menus
        ]);
    }

    public function findOrder()
    {
        $menus = $this->menu;
        $order = "";
        if (!empty($codeId = request()->code)) {
            $order = $this->order->where('codeId', $codeId)->first();
        }
        return View('Home.find-cart', [
            'title' => 'Tra cứu thông tin',
            'menus' => $menus,
            'order' => $order
        ]);
    }
    public function test($a=null){

            if($a!=null){
                $dem=0;
                for($i=2; $i<=$a ; $i++){
                    if(
                        $a%$i==0
                    ){
                        $dem++;
                    }
                }
                if($dem==1){
                    dd('so nguyen to');
                }
            }
        return view('Home.learn',[
            'title' => 'Trang Test',
        ]);
    }
}
