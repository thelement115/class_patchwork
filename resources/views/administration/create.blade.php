@extends('layouts.app')

@section('content')
    <div class = "row" style = "width: 100%">
        <div class = "col-12 d-flex justify-content-center" style = "font-weight: 20vw">
            <h1>{{$data['msg']}}</h1>
        </div>
    </div>
    <div class = "container" style = "height: 80%">
        <form method="POST" action = "{{route('create')}}" style = "height: 100%">
            @csrf
            <div class = "row" style = "height: 100%;width: 100%">
                <div class = "col-12 d-flex align-items-center" style = "height: 100%;">
                    <div class ="row" style = "width: 100%">
                        <div class= "col-5">
                            <div class = "row">
                                <div class = "col-12 d-flex justify-content-center">
                                    Seleccionar Dia
                                </div>
                            </div>
                            <div class = "row mt-2 no-gutters">
                                <div class = "col" style = "height: 100%">  
                                    <label for="lunes">L</label>
                                    <input type="checkbox" name='checkboxvar[]' id = "lunes" value = "L">
                                </div>
                                <div class = "col">
                                    <label for="martes">M</label>
                                    <input type="checkbox" name='checkboxvar[]' id = "martes" value = "M">
                                </div>
                                <div class = "col">
                                    <label class = "ml-2" for="miercoles">W</label>
                                    <input type="checkbox" name='checkboxvar[]' id = "miercoles" class = "ml-1" value = "W">
                                </div>
                                <div class = "col">
                                    <label for="jueves">J</label>
                                    <input type="checkbox" name='checkboxvar[]' id = "jueves" value = "J">
                                </div>
                                <div class = "col">
                                    <label for="viernes">V</label>
                                    <input type="checkbox" name='checkboxvar[]' id = "viernes" value = "V">
                                </div>
                            </div>
                        </div>
                        <div class = "col-2">
                            <div class = "row">
                                <div class = "col-12 d-flex justify-content-center">
                                    Hora de inicio
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col-12 d-flex justify-content-center">
                                    <input type="time" id="appt" name="appt" min="07:00" max="20:00" required>
                                </div>
                            </div>
                        </div>
                        <div class = "col-2">
                            <div class = "row">
                                <div class = "col-12 d-flex justify-content-center">
                                    Hora Final
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col-12 d-flex justify-content-center">
                                    <input type="time" id="appt2" name="appt2" min="08:00" max="21:00" required>
                                </div>
                            </div>
                        </div>
                        <div class = "col-2">
                            <div class = "row">
                                <div class = "col-12 d-flex justify-content-center">
                                    Materia
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col-12 d-flex justify-content-center">
                                    <select name="subjects" id="subjects">
                                        @foreach ($data['subjects'] as $subject)
                                            <option value="{{$subject->getId()}}">{{$subject->getName()}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-12">
                            <button type="submit" value="Submit">Crear</button>
                        </div>
                    </div>
                </div>
            <div>  
        </form>
    </div>
@endsection

{{-- 
<div class = "row" style = "width: 100%">
    --}}