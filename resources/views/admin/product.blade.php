@extends('layouts.adminNavbar')

@section('content')
    <div class="row shadow">
        <div class="container col-5 ms-5 my-5 text-center">
            <img src="{{ asset("storage/Product/{$product->image}") }}" class="img-fluid">
        </div>
        <div class="container col-6 mt-5">
            <div class="row">
                <div class="container col-12 row">
                    <h2>{{$product->producer->producer }} {{ $product->name}}</h2>
                    <div class="container col-6 text-center">
                        <p>Od: {{$product->producer->producer}}</p>
                    </div>
                    <div class="container col-6 text-start">
                        <p>Kod: {{$product->code }}</p>
                    </div>
                </div>
                <div class="container col-6">
                    <hr>
                    <p>Procesor: {{$product->processor->processor}}</p>
                    <p>Pamięć: {{$product->ram->capacity}} Gb</p>
                    <p>Grafika: RTX1660 M</p>
                    <p>Typ ekranu: Matowy,LED</p>
                </div>
                <div class="container col-6 border border-2 rounded-5 text-end pt-4 pe-5">
                    <h2 class="my-4">3999 zł</h2>
                    <form method="post" action="" class="row">
                        <div class="col-3">
                            <select class="form-select">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="container col-9">
                            <button type="submit" class="btn btn-lg btn-success">Dodaj do koszyka</button>
                        </div>
                    </form>
                    <hr>
                    <div class="container text-start my-4">
                        <div class="container">
                            <p>Dostępność: @if($product->stock >= 5)
                                    Dostępny
                                @elseif($product->stock <= 4 && $product->stock > 0)
                                    Produkt się kończy!!
                                @endif
                                @if($product->stock <= 0)
                                    Brak produktu
                                @endif</p>
                        </div>
                        <div class="container">
                            <p>@if($product->price > 2000)
                                    Darmowa dostawa ! !
                                @else
                                    Koszt dostawy : 20 zł
                                @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <h1 class="mb-4">Specyfikacja</h1>
        <div class="row h4">
            <div class="col-6 mb-3">Producent</div>
            <div class="col-6 mb-3">{{$product->producer->producer}}</div>
            <hr>
            <div class="col-6 mb-3">Seria</div>
            <div class="col-6 mb-3">{{$product->name}}</div>
            <hr>
            <div class="col-6 mb-3">Procesor</div>
            <div class="col-6 mb-3">{{$product->processor->processor}}</div>
            <hr>
            <div class="col-6 mb-3">Karta graficzna</div>
            <div class="col-6 mb-3">{{$product->graphic->graphic}}</div>
            <hr>
            <div class="col-6 mb-3">Ilość ram</div>
            <div class="col-6 mb-3">{{$product->ram->capacity}} Gb</div>
            <hr>
            <div class="col-6 mb-3">Przekątna ekranu</div>
            <div class="col-6 mb-3">{{$product->screenDiagonal->diagonal}} '</div>
            <hr>
            <div class="col-6 mb-3">Kolor</div>
            <div class="col-6 mb-3">{{$product->color->color}}</div>
            <hr>
            <div class="col-6 mb-3">Kod produktu shop</div>
            <div class="col-6 mb-3">{{$product->code}}</div>
            <hr>
        </div>
    </div>
@endsection
