<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('products', [ 'data' => [
                                        ['product' => "caneta", 'description' => "feita para escrever com tinta", 'category' => "Material", 'price' => "R$5,00"],
                                        ['product' => "celular", 'description' => "última geração", 'category' => "Eletrônicos", 'price' => "R$1000,00"],
                                        ['product' => "tablet", 'description' => "feito com grafeno", 'category' => "Eletrônicos", 'price' => "R$2599,00"],
                                        ['product' => "bola de futebol", 'description' => "feita para jogar futebol", 'category' => "Diversão", 'price' => "R$50,00"],
                                        ['product' => "chuteira", 'description' => "nike azul", 'category' => "Sapato", 'price' => "R$225,00"],
                                        ['product' => "camisa", 'description' => "tecido 100% algodão", 'category' => "Roupas", 'price' => "R$99,99"]
                                    ]
                                ]);
    }
}
