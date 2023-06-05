@extends('layouts.adminNavbar')

@section('content')
    <div class="row">
        <div class="container col-3 shadow-sm p-2">
            <h2 class="text-center">Filtry</h2>
            <form method="post" action="" class="row">
                <div class="container mt-5 ms-4 row">
                    <h4>Rodzaj produktu</h4>
                    @foreach($products_types as $product_type)
                        <div class="container col-12 mb-2">
                            <input class="form-check-input" name="producer" type="checkbox"
                                   value="{{$product_type->product_type}}" id="{{$product_type->product_type}}">
                            <label class="form-check-label" for="{{$product_type->product_type}}">
                                {{$product_type->product_type}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-5 ms-4 row">
                    <h4>Producent</h4>
                    @foreach($producers as $producer)
                        <div class="container col-12 mb-2">
                            <input class="form-check-input" name="producer" type="checkbox"
                                   value="{{$producer->producer}}" id="{{$producer->producer}}">
                            <label class="form-check-label" for="{{$producer->producer}}">
                                {{$producer->producer}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-3 ms-4 row">
                    <h4 class="mb-3">Cena</h4>
                    <div class="col-5">
                        <input type="number" name="priceMax" placeholder="Od" class="form-control">
                    </div>
                    <div class="col-5">
                        <input type="number" name="priceMin" placeholder="Do" class="form-control">
                    </div>
                </div>
                <div class="container mt-5 ms-4 row">
                    <h4>Przekątna</h4>
                    @foreach($diagonals as $diagonal)
                        <div class="container col-12 mb-2 mt-2">
                            <input class="form-check-input" name="producer" type="checkbox" value="{{$diagonal->diagonal}}" id="{{$diagonal->diagonal}}">
                            <label class="form-check-label" for="{{$diagonal->diagonal}}">
                                {{$diagonal->diagonal}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-5 ms-4 row">
                    <h4>Procesor</h4>
                    @foreach($processors as $processor)
                        <div class="container col-12 mb-2">
                            <input class="form-check-input" name="producer" type="checkbox" value="" id="{{$processor->processor}}">
                            <label class="form-check-label" for="{{$processor->processor}}">
                                {{$processor->processor}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-5 ms-4 row">
                    <h4>Graphic card</h4>
                    @foreach($graphics as $graphic)
                        <div class="container col-12 mb-2 mt-2">
                            <input class="form-check-input" name="producer" type="checkbox" value="{{$graphic->graphic}}" id="{{$graphic->graphic}}">
                            <label class="form-check-label" for="{{$graphic->graphic}}">
                                {{$graphic->graphic}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-5 ms-4 row">
                    <h4>Ilość pamięci ram</h4>
                    @foreach($rams as $ram)
                        <div class="container col-12 mb-2 mt-2">
                            <input class="form-check-input" name="producer" type="checkbox" value="{{$ram->capacity}}" id="{{$ram->capacity}}">
                            <label class="form-check-label" for="{{$ram->capacity}}">
                                {{$ram->capacity}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-5 ms-4 row">
                    <h4>Kolor</h4>
                    @foreach($colors as $color)
                        <div class="container col-12 mb-2 mt-2">
                            <input class="form-check-input" name="producer" type="checkbox" value="{{$color->color}}" id="{{$color->color}}">
                            <label class="form-check-label" for="{{$color->color}}">
                                {{$color->color}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="container ps-5 mt-3">
                    <button type="submit" class="btn btn-success">Filtruj</button>
                </div>
            </form>
        </div>
        <div class="container col-9 text-center py-5 ps-5">
            <div class="row ps-5">
                <div class="col-3 mb-3">
                    <a href="{{ route('adminProducts.create') }}" class="btn btn-success">Dodaj produkt :)</a>
                </div>
                <hr>
                @foreach( $products as $product)
                    <div class="card mx-3 my-3 col-12 col-lg-4 border-0 text-center" style="background-color: #f8f9fa">
                        <img class="card-img-top rounded-3 mt-3" src="{{ asset("storage/Product/{$product->image}") }}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product['name']}}</h5>
                            <div class="container col-12 mb-4">
                                <div class="row">
                                    <div class="col-6">Producent</div>
                                    <div class="col-6">{{$product->producer->producer}}</div>
                                    <div class="col-6 mt-2">Procesor</div>
                                    <div class="col-6 mt-2">{{$product->processor->processor}}</div>
                                    <div class="col-6 mt-2">Przekątna ekranu</div>
                                    <div class="col-6 mt-2">{{$product->screenDiagonal->diagonal}}</div>
                                </div>
                            </div>
                            <a href="{{ route('adminProducts.show', $product->id) }}" class="btn btn-info">Sprawdź</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edytuj</a>
                            <a href="{{ url('products.destroy', $product->id) }}" class="btn btn-danger">Usuń</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
