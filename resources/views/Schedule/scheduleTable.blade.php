@extends('Schedule.searchBar')

@section('table')

<form method="POST" action="{{route('select')}}" id = "form2">
    @csrf
    <div class = "container" style = "background-color:  #0ec166">
        <table style="width:100%;background-color: white">
            <tr>
            <th>Materia</th>
            <th>Profesor</th>
            <th>Horario</th>
            <th> </th>
            </tr>
                @foreach ($data['days'] as $day)
                <tr>
                    <th style = "width: 14vw">{{$day->getSubject()->getName()}}</th>
                    <th style="width: 20vw">{{$day->getUser()->getName()}}</th>
                    <th>
                        <table style="width: 100%">
                            <tr>
                                <th>Dia</th>
                                <th>Hora inicio</th>
                                <th>Hora final</th>
                            </tr>
                            <tr>
                                <th>{{$day->getDay_name()}}</th>
                                <th>{{date('g:ia', strtotime($day->getInicio()))}}</th>
                                <th>{{date('g:ia', strtotime($day->getFinal()))}}</th>
                            </tr>
                        </table>
                    </th>
                    <th style = "width: 10vw"><Input type= "radio" id = "schedule" name = "schedule" value = {{$day->getId()}}></th>
                </tr>
                @endforeach
        </table>
        <div class ="row d-flex justify-content-center mt-3">
            <div class = "col d-flex justify-content-center">
                <button type="submit" value="Submit">Seleccionar</button>
            </div>
        </div>
    </div>
</form>
@endsection