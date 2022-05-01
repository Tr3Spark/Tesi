@extends('layouts.templatecorsi')
@section('title','Home')
@section('componentiNavbar')
    <a href="#" class="bg-gray-900 hover:bg-gray-700 text-white px-3 py-3 rounded-md text-sm font-medium">Servizio Uni</a>
    <a href="#" class="bg-gray-900 hover:bg-gray-700 text-white px-3 py-3 rounded-md text-sm font-medium">Vestiario</a>
    <a href="#" class="bg-gray-900 hover:bg-gray-700 text-white px-3 py-3 rounded-md text-sm font-medium">Corsi Sicurezza</a>
    <a href="#" class="bg-gray-900 hover:bg-gray-700 text-white px-3 py-3 rounded-md text-sm font-medium">Sezione Sportiva</a>
    @stop

@section('componentiDropdown')
    <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Servizio UNI</a></li>                    
    <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Vestiario</a></li>
    <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Corsi Sicurezza</a></li>
    <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-purple-800 transition duration-300 text-white">Sezione Sportiva</a></li>
@stop