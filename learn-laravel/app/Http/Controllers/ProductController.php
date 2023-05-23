<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class ProductController extends Controller{

        // public function index(){
        //     // $title = "Welcome to Laravel";
        //     // $description ="Create by NMT";
        //     // $data=[
        //     //     'country1'=>"Vietnam",
        //     //     "country2"=>"Us",
        //     //     "country3"=>"Uk",
        //     // ];

        //     // return view('product.index' , compact('title','description'));
        //     print_r(route('products'));
        //     return view('product.index');
        // }

        public function about(){
            return 'About us page';
        }

        public function show($name){
            $data=[
                'countrya'=>"Vietnam",
                "countryb"=>"Us",
                "countryc"=>"Uk",
            ];
            return view('product/index',[
                'key'=> $data[$name] ?? 'not found' 
            ]);
        }
    }
?>