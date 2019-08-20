<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListProducts extends Controller
{
    public function getList() {
        $products = DB::table('products')
        ->select('alim_ssgrp_nom_fr')
        ->groupBy('alim_ssgrp_nom_fr')
        ->get();
        $title = "Liste des produits";

        return view('products/listProducts', ['title' => $title, 'products' => $products]);
    }
    // public function list() {
     
    //     $title = "Liste des produits";
    //     return view('products/listProducts', ['title' => $title, 'products' => $products]);
    // }
    public function postList(Request $request) {
        $columnNames = DB::getSchemaBuilder()->getColumnListing('products');
        $post = $request->all();
        $familyProducts = DB::table('products')
            ->select('alim_nom_fr')
            ->where('alim_ssgrp_nom_fr', '=', $post['inputFamilyName'])
            ->get();
        $products = DB::table('products')
            ->select('alim_ssgrp_nom_fr')
            ->groupBy('alim_ssgrp_nom_fr')
            ->get();
        $title = "Liste des produits";
        return view('products/listProducts', ['familyProducts' => $familyProducts, 'title' => $title, 'products' => $products, 'columnNames' => $columnNames]);
    }
}
