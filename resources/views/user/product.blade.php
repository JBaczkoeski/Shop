@extends('layouts.navbar')

@section('content')
    <div class="row shadow">
        <div class="container col-5 ms-5 my-5">
            <img src="{{url('storage/Product/mac-book.jpg')}}" class="img-fluid">
        </div>
        <div class="container col-6 mt-5">
            <div class="row">
                <div class="container col-12 row">
                    <h2>Dell Inspiron 5510 i5-11300H/16GB/512/Win11</h2>
                    <div class="container col-6 text-center">
                        <p>Od: DELL</p>
                    </div>
                    <div class="container col-6 text-start">
                        <p>Kod: 2132131</p>
                    </div>
                </div>
                <div class="container col-6">
                    <hr>
                    <p>Procesor: I7-74400</p>
                    <p>Pamięć: 16GB</p>
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
                            <p>Dostępność: Dostępny {{--if >5 if<5 się kończy if =< ostatnie sztuki--}}</p>
                        </div>
                        <div class="container">
                            <p>Darmowa dostawa {{--if price>1500 darmowa else 25 zł --}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <h1 class="mb-4">Specyfikacja</h1>
        <div class="row h4">
            @for($i = 0; $i < 10; $i++)
                <div class="col-6 mb-3">Procesor</div>
                <div class="col-6 mb-3">I7-123213</div>
                <hr>
            @endfor
        </div>
    </div>
@endsection
