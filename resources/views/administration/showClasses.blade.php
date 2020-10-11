@extends('layouts.app')

@section('content')
    <div class = "container mb-2" style = "min-height: 80%">
        <div class = "row mt-4">
            <div class = "col-12">
                <div class = "row">
                    <div class = "col-12">
                        <table style="width:100%;background-color: white">
                            <tr>
                            <th>Materia</th>
                            <th>Profesor</th>
                            <th>Horario</th>
                            <th> </th>
                            </tr>
                                @foreach ($data['days'] as $day)
                                <tr>
                                <th >{{$day->getSubject()->getName()}}</th>
                                <th >{{$day->getUser()->getName()}}</th>
                                <th>
                                    <table style="width: 100%">
                                        <tr>
                                            <th>Dia</th>
                                            <th>Hora inicio</th>
                                            <th>Hora final</th>
                                        </tr>
                                        <tr>
                                            <th>{{$day->getDay_name()}}</th>
                                            <th>{{date('g:ia', strtotime($day->getInicio()))}}</th>                                                <th>{{date('g:ia', strtotime($day->getFinal()))}}</th>
                                            </tr>
                                    </table>
                                    </th>    
                                    <th style = "width: 10vw">
                                        <form method="POST" action="{{ route('delete_Schedule',$day->getId()) }}">
                                        @csrf
                                            <Input type= "submit" id = "delete" name = "delete" value = "Borrar">
                                        </form>
                                    </th>        
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection