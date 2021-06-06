<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;

class ProductController extends Controller
{
    public function showProductOfCategories ($id, Request $request) {
        $products = DB::table('products')->where('idCate', $id)->paginate(3);
        $categories = DB::table('categories')->get();
        $services = DB::table('services')->get();
        $category = DB::table('categories')->where('idCate', $id)->first(); // name cate
        $request->session()->put('idCate', $id); // to add product
        return view('_adminView.product.show_product')->with(['products'=> $products,
                                                            'categories'=> $categories,
                                                            'services' => $services,
                                                            'category' => $category]);
    }

    public function showFormToEdit ($idPro, Request $request) {
        $product = DB::table('products')->where('idPro', $idPro)->first();
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        $p = $request->session()->get('idCate');
        return view('_adminView.product.edit_product')->with(['services'=> $services,
                                                           'categories' => $categories,
                                                           'idCate' => $p,
                                                           'product' => $product]);
    }

    public function showFormToAdd (Request $request) {
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        $p = $request->session()->get('idCate');
        return view('_adminView.product.add_product')->with(['services'=> $services,
                                                           'categories' => $categories,
                                                           'idCate' => $p]);
    }

    public function postAdd(Request $request) {
        $this->validator($request->all())->validate();
        $this->addProduct($request->all());
        return redirect('admin/index');
    }

    public function postEdit (Request $request) {
        $this->validator($request->all())->validate();
        $this->updateProduct($request->all());
        return redirect('admin/index');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'price' => ['required', 'string'],
            'title' => ['required', 'string'],
            'thumbnail' => ['required', 'string'],
        ]);
    }

    protected function updateProduct(array $data)
    {
        return Products::where('idPro', $data['idPro'])->update(array('idCate' => $data['idCate'],
            'title' => $data['title'],
            'price' => $data['price'],
            'thumbnail' => $data['thumbnail'],
            'short_Description' => $data['short_Description'] . ' ',
            'detailed_description' => $data['detailed_description']));
    }

    protected function addProduct(array $data)
    {
        return Products::create([
            'idCate' => $data['idCate'],
            'title' => $data['title'],
            'price' => $data['price'],
            'thumbnail' => $data['thumbnail'],
            'short_Description' => $data['short_Description'],
            'detailed_description' => $data['detailed_description'],
        ]);
    }

    public function deleteProduct($idPro) {
        return Products::where('idPro', $idPro)->delete();
    }
}
