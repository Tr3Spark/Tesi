@extends('layouts.templatesanitario')
@section('title','Home')
@section('componentiNavbar')
    <a href="#" class="bg-gray-900 hover:bg-gray-700 text-white px-3 py-3 rounded-md text-sm font-medium">Idoneità Visite</a>
    <a href="#" class="bg-gray-900 hover:bg-gray-700 text-white px-3 py-3 rounded-md text-sm font-medium">Vaccinazioni di base</a>

    @stop

@section('componentiDropdown')
    <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Idoneità Visite</a></li>                    
    <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Vaccinazioni di base</a></li>
    
@stop