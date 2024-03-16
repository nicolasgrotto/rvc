<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('products', [ 'data' => [
                                        ['product' => "caneta", 'description' => "feita para escrever com tinta", 'price' => "R$5,00"],
                                        ['product' => "celular", 'description' => "última geração", 'price' => "R$1000,00"],
                                        ['product' => "tablet", 'description' => "feito com grafeno", 'price' => "R$2599,00"],
                                        ['product' => "bola de futebol", 'description' => "feita para jogar futebol", 'price' => "R$50,00"],
                                        ['product' => "chuteira", 'description' => "nike azul", 'price' => "R$225,00"],
                                        ['product' => "camisa", 'description' => "tecudi 100% algodão", 'price' => "R$99,99"]
                                    ]
                                ]);
    }
}
