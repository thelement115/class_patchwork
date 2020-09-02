@extends('layouts.app')

@section('content')
    <div class = "d-flex justify-content-center" style= "background-color: #0ec166">
        <form method = "POST" action={{route('reservations_result')}} style = "margin-bottom: 2%">
            @csrf
            <div class ="row d-flex justify-content-center mt-4">
                <div class = "col d-flex justify-content-center">
                    <select name="subjects" id="subjects">
                        @foreach ($data['subjects'] as $subject)
                            <option value="{{$subject->getId()}}">{{$subject->getName()}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class ="row d-flex justify-content-center mt-3">
                <div class = "col d-flex justify-content-center">
                    <button type="submit" value="Submit">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <div class = "" style = "min-height: 60vh; background-color: #0ec166">
        @yield('table')
    </div>
@endsection
