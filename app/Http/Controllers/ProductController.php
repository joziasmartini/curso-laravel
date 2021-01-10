<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = ['Produto 1', 'Produto 2', 'Produto 3'];

        return $products;
    }

    public function show($id) {
        return "Exibir o produto de id: {$id}";
    }

    public function create() {
        return "Exibir o formulário de cadastrar produto";
    }

    public function edit($id) {
        return "Exibir o formulário de editar produto de id: {$id}";
    }

    public function store() {
        return "Cadastrar um produto";
    }

    public function update($id) {
        return "Editar um produto";
    }

    public function delete($id) {
        return "Deletar um produto";
    }
}
