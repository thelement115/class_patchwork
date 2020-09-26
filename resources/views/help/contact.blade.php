@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #f47a62; max-width: 100%; width:100%; height: 80%">
    <div class = "row" style = "height: 100%">
        <div class = "col-6 d-flex align-items-center ">
            <div class = "row" style = "width: 100%">
                <div class = "col-12 d-flex justify-content-center" style = "color:white;font-weight:bold;font-size:2vh">
                    Institución Educativa
                </div>
                <div class = "col-12 d-flex justify-content-center" style = "color:#0ec166 ;font-weight:bold; font-size:3vh">
                    Alfredo Cock Arango
                </div>
                <div class = "col-12 d-flex justify-content-center" style = "color:white ;font-weight:bold; font-size:2vh">
                    Liderando procesos de formación y calidad humana
                </div>
                <div class = "col-12 d-flex justify-content-center mt-4" style = "color:white ;font-weight:bold; font-size:2vh">
                    www.ieaca.edu.co
                </div>
                <div class = "col-12 d-flex justify-content-center" style = "color:white ;font-weight:bold; font-size:2vh">
                    Barrio Castilla - Carrera 72 No 99 - 55
                </div>
                <div class = "col-12 d-flex justify-content-center" style = "color:white ;font-weight:bold; font-size:2vh">
                    Telefax: 267 11 90 - 267 75 52
                </div>
                <div class = "col-12 d-flex justify-content-center mt-4" style = "color:white ;font-weight:bold; font-size:2vh">
                    Medellin - Colombia - Suramérica
                </div>
            </div>
        </div>
        <div class = "col-6 d-flex align-items-center">
            <div class = "row" style = "width: 100%">
                <div class = "col-12">
                    <div class = "row d-flex justify-content-center mb-4" style="width: 100%;margin:unset">
                        <div class ="col-12 d-flex justify-content-center" style = "color:white;font-weight:bold;font-size:2.7vw">
                            Con que podemos ayudarte?
                        </div>
                    </div>
                    <div class = "row d-flex justify-content-center mb-4">
                        <div class = "col-6 d-flex justify-content-end">
                            <input type = "text" placeholder="Nombres" style = "background-color: transparent;border-width: 2px;border-color:white;width:80%;height:6vh">    
                        </div>
                        <div class = "col-6 d-flex" style="color:white">
                            <input type = "text" placeholder="Apellidos" style = "color:white;background-color: transparent;border-width: 2px;border-color:white;width:80%;height:6vh">    
                        </div>
                    </div>
                    <div class = "row d-flex justify-content-center mb-4">
                        <div class = "col-6 d-flex justify-content-end">
                            <input type = "text" placeholder="Telefono" style = "background-color: transparent;border-width: 2px;border-color:white;width:80%;height:6vh">    
                        </div>
                        <div class = "col-6 d-flex" style="color:white">
                            <input type = "text" placeholder="Email-Institucional" style = "color:white;background-color: transparent;border-width: 2px;border-color:white;width:80%;height:6vh">    
                        </div>
                    </div>
                    <div class = "row d-flex justify-content-center mb-4">
                        <div class = "col-12 d-flex justify-content-center">
                            <input type = "text" placeholder="Escribe tu mensaje aqui" style = "background-color: transparent;border-width: 2px;border-color:white;width:80%;height:11vh">
                        </div>
                    </div>
                    <div class = "row d-flex justify-content-end">
                        <div class = "col-10 d-flex justify-content-end mr-2" >
                            <button style="background-color:blue;border:none;color:white;height:6vh;width:6vw">Enviar</button>
                        </div>
                        <div class = "col-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

