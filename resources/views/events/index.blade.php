{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Events</h1>
    <div>Index</div>
</body>
</html> --}}

@extends('adminlte::page')


@section('title', 'Events')

@section('content_header')
    <h1>Events</h1>
    @if (session()->has('success'))
        {{session('success')}}     
     
    @endif

@stop

@section('content')
    <div>
        <a href="{{route('events.create')}}">Add an Event</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Location</th>
                <th>Description</th>
                <th>Booking</th>
                <th>StartDate</th>
                <th>EndDate</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($events as $event) 
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->title}}</td>
                    <td>{{$event->location}}</td>
                    <td>{{$event->description}}</td>
                    <td>{{$event->booking_url}}</td>
                    <td>{{$event->start_date}}</td>
                    <td>{{$event->end_date}}</td>
                    <td>
                        <a href="{{route('events.edit' , ['event' => $event])}}">Edit</a>
                         {{-- <x-adminlte-button label="Edit" theme="success" type="submit"  href="{{route('events.edit' , ['event' => $event])}}" /> --}}
                    </td>
                    <td>
                        <form action="{{route('events.delete', ['event'=> $event])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                        {{-- <a href="{{route('events.delete', ['event' =>$event])}}">Delete</a> --}}
                    </td>
                </tr>
                
            @endforeach
           
        </table>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop