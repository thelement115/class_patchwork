@extends('layouts.app')

@section('content')
    <div class = "container d-flex justify-content-center mt-4">
        <form method = "POST" action={{route('reservations_result')}}>
            @csrf
            <div class ="row d-flex justify-content-center">
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
    @yield('table')
@endsection
