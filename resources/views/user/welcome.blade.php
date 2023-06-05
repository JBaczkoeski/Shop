@extends('layouts.navbar')

@section('content')
    <div class="row justify-content-center p-1">
        <img src="{{ url('storage/Images/banner.png') }}" alt="Computer image" class="rounded-5">
        <div class="container col-12 py-2">
            <hr>
            <h1 class="text-center">Polecamy</h1>
            <hr>
            <div class="row justify-content-center">
                @for($i = 1; $i <= 6; $i++)
                    <div class="card mx-5 my-3 col-12 col-lg-3 border-0 text-center" style="background-color: #f8f9fa">
                        <img class="card-img-top rounded-3 mt-3" src="{{ url('storage/Product/mac-book.jpg') }}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mac Book</h5>
                            <div class="container col-12 mb-4">
                                <div class="row">
                                    <div class="col-6">Producent</div>
                                    <div class="col-6">Apple</div>
                                    <div class="col-6">Rok produkcji</div>
                                    <div class="col-6">966</div>
                                    <div class="col-6">Nr seryjny</div>
                                    <div class="col-6">AH5252</div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success">Sprawdź</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container col-12 text-center">
            <hr>
            <h1>Wybrane promocje</h1>
            <hr>
            <div class="row justify-content-center">
                @for($i = 1; $i <= 4; $i++)
                    <div class="card mx-5 my-3 col-12 col-lg-2 border-0 text-center" style="background-color: #f8f9fa">
                        <img class="card-img-top rounded-3 mt-3" src="{{ url('storage/Product/mac-book.jpg') }}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mac Book</h5>
                            <div class="container col-12 mb-4">
                                <div class="row">
                                    <div class="col-6">Producent</div>
                                    <div class="col-6">Apple</div>
                                    <div class="col-6">Rok produkcji</div>
                                    <div class="col-6">966</div>
                                    <div class="col-6">Nr seryjny</div>
                                    <div class="col-6">AH5252</div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success">Sprawdź</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container col-12 justify-content-center text-center">
            <div class="container col-7 my-4 rounded-3 shadow p-5 ps-5">
                <h1>Newstseler</h1>
                <p>Nie przegap żadnej promocji,</p>
                <p>zdobywaj dodatkowe rabaty.</p>
                <form method="post" action="" class="col-12 row">
                    <div class="container col-8 ms-5">
                        <input type="email" placeholder="Wpisz swój e-mail" class="form-control">
                    </div>
                    <div class="container col-3">
                        <button type="submit" class="btn btn-success">Zapisz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
