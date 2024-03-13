<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    
    /**
     * Index
     */
    public function index()
    {
        $category = Category::findOrFail(1);
        $products = $category->products()->orderByDesc('price')->get();

        $expensiveProducts = Product::priceGreaterThan(80)->get();

        $primeNumbers = [];
        for ($i = 0; $i < 100; $i++) {
            if($this->isPrime($i)) {
                $primeNumbers[] = $i;
            }
        }

        return view('index', [
            'products'=> $products,
            'category'=> $category,
            'expensiveProducts'=> $expensiveProducts,
            'primeNumbersList'=> implode(', ', $primeNumbers),
        ]);
    }

    /**
     * Verifica se um dado número é primo
     *
     * @param  int  $number
     * @return bool
     */
    public function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    } 
}
