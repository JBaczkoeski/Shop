@extends('layouts.navbar')

@section('content')
    <div class="row">
        <div class="container col-3 shadow-sm p-2">
            <h2 class="text-center">Filtry</h2>
            <form method="post" action="" class="row">
                <div class="container mt-5 ms-4 row">
                    <h4>Producent</h4>
                    @for($i=0; $i < 4; $i++)
                        <div class="container col-12 mb-2">
                            <input class="form-check-input" name="producer" type="checkbox" value="" id="{{$i}}">
                            <label class="form-check-label" for="{{$i}}">
                                Dell
                            </label>
                        </div>
                    @endfor
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
                    <div class="container col-12 mb-2 mt-2">
                        <input class="form-check-input" name="producer" type="checkbox" value="" id="diagonal1">
                        <label class="form-check-label" for="diagonal1">
                            13,4" i mniejsze
                        </label>
                    </div>
                    <div class="container col-12 mb-2">
                        <input class="form-check-input" name="producer" type="checkbox" value="" id="diagonal1">
                        <label class="form-check-label" for="diagonal1">
                            14" - 16,1"
                        </label>
                    </div>
                    <div class="container col-12 mb-2">
                        <input class="form-check-input" name="producer" type="checkbox" value="" id="diagonal1">
                        <label class="form-check-label" for="diagonal1">
                            17" i większe
                        </label>
                    </div>
                </div>
                <div class="container mt-5 ms-4 row">
                    <h4>Procesor</h4>
                    @for($i=0; $i < 4; $i++)
                        <div class="container col-12 mb-2">
                            <input class="form-check-input" name="producer" type="checkbox" value="" id="{{$i}}">
                            <label class="form-check-label" for="{{$i}}">
                                I7-7460
                            </label>
                        </div>
                    @endfor
                </div>
                <div class="container ps-5 mt-3">
                    <button type="submit" class="btn btn-success">Filtruj</button>
                </div>
            </form>
        </div>
        <div class="container col-9 text-center py-5 ps-5">
            <div class="row ps-5">
                <hr>
                @for($i = 1; $i <= 6; $i++)
                    <div class="card mx-3 my-3 col-12 col-lg-3 border-0 text-center" style="background-color: #f8f9fa">
                        <img class="card-img-top rounded-3 mt-3" src="{{ url('storage/Product/mac-book.jpg') }}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mac Book</h5>
                            <div class="container col-12 mb-4">
                                <div class="row">
                                    <div class="col-6">Producent</div>
                                    <div class="col-6">Apple</div>
                                    <div class="col-6 mt-2">Procesor</div>
                                    <div class="col-6 mt-2">M2</div>
                                    <div class="col-6 mt-2">Przekątna ekranu</div>
                                    <div class="col-6 mt-2">17"</div>
                                </div>
                            </div>
                            <a href="/product" class="btn btn-success">Sprawdź</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
