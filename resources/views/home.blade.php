@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url(http://localhost/class_patchwork/storage/app/public/7ba3a1ea-a543-4765-a51c-8bdf07edabd3.jpg); max-width: 100%; width:100%; height: 80%">
    <div class="row justify-content-center d-flex align-items-end" style="height: 45%">
        <div class="col-12 justify-content-center d-flex" >
            <h1 style = "color: blue; font-weight: bold; font-size: 10vh">Class Patchwork</h1>
        </div>
    </div>
    <div class = "row justify-content-center d-flex align-items-center">
        <div class="col-12 justify-content-center d-flex" >
            <h1 style = "color: #f77865; font-weight: bold; font-size: 4vh">Labor de Retazos</h1>
        </div>
    </div>
    <div class = "row justify-content-center d-flex align-items-center">
        <div class="col-12 justify-content-center d-flex" >
            <h1 style = "color: white; font-weight: bold; font-size: 2vh">Para una mejor educación y de fácil acceso</h1>
        </div>
    </div>
    @if(Auth::check())
        
    @else
        <form action = "{{ route('register') }}" method="GET">
            <div class = "row justify-content-center d-flex align-items-center">
                <div class="col-12 justify-content-center d-flex" >
                    <input style="text-align: center;background-color:blue;color:white;margin-top:5%"  type="submit"value="REGISTRARSE" class="btn" >
                </div>
            </div>
        </form>
    @endif
</div>
@endsection