@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>{{$title}}</h1>
        {{-- <h1>{{$familyProducts}}</h1> --}}
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Sélection
            </div>
            <div class="card-body">
                <h5 class="card-title">Indiquez votre produit</h5>
                <p class="card-text">Espace de recherche de produits.</p>
            <form method="POST" action="{{ route('list-products') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputProductName">Nom</label>
                        <input type="text" class="form-control" id="inputProductName" aria-describedby="nomDuProduit" placeholder="Nom du produit">
                        <small id="productNameHelp" class="form-text text-muted">Ex: "Poulet", "Tomate", "Courgette"...</small>
                    </div>
                    <div class="form-group">
                        <label for="inputFamilyName">Famille</label>
                        <select class="form-control" id="inputFamilyName" name="inputFamilyName">
                            @if(isset($products))
                                @foreach ($products as $product)
                                    <option> {{$product->alim_ssgrp_nom_fr}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="columnCheckBoxes">Sélectionnez les informations voulues</label>
                    </div>
                        @if(isset($columnNames))
                            @foreach ($columnNames as $columnName)            
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox-{{$columnName}}" id="checkbox-{{$columnName}}" value="option-{{$columnName}}">
                                <label class="form-check-label" for="checkbox-{{$columnName}}">{{str_replace('_', ' ',$columnName)}}</label>
                                </div>
                            @endforeach
                        @endif
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <ul>
                @if(isset($familyProducts))
                    @foreach ($familyProducts as $familyProduct)
                    <li> {{$familyProduct->alim_nom_fr}} </li>
                    @endforeach    
                @endif
                
            </ul> 
        </div>
    </div>
</div>
@endsection
