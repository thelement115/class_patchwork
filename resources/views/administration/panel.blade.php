@extends('layouts.app')

@section('content')
    <div class = "container">
        <div class = "row mt-4">
            <div class = "col-12">
                <div class ="row">
                    <div class = "col-12" style  ="font-weight: bold; font-size : 1.5vw">
                        Opciones de profesor
                    </div>
                </div>
                <hr>
                <div class = "row">
                    <div class = "col-12">
                        <a style = "color:blue" href= "{{ route('information') }}"> + Crear Horario Nuevo</a>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-12">
                        <a style = "color:blue" href= "{{ route('information') }}"> + Cambiar Horarios</a>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-12">
                        <a style = "color:blue" href= "{{ route('information') }}"> + Ver Clases Proximas</a>
                    </div>
                </div>
                <div class ="row mt-4">
                    <div class = "col-12" style  ="font-weight: bold; font-size : 1.5vw">
                        Opciones de Estudiante
                    </div>
                </div>
                <hr>
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
                                    <th style = "width: 10vw"><Input type= "submit" id = "delete" name = "delete" value = "Borrar"></th>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection