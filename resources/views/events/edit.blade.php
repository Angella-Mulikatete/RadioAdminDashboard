@extends('adminlte::page')
@section('title', 'Edit an Event')

@section('content_header')
    <h1>Edit an Event</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@stop

@section('content')

    <div>
        <form action="{{route('events.update', ['event'=> $event])}}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <x-adminlte-input name="title" label="Title" placeholder="title" value='{{$event -> title}}' fgroup-class="col-md-6"  />
                <x-adminlte-input name="booking_url" label="booking link" placeholder="booking link" value='{{$event ->booking_url}}' fgroup-class="col-md-6"/>
                <x-adminlte-input name="start_date" label="Start Date" type='date' placeholder="start date" value='{{$event -> start_date}}'
                    fgroup-class="col-md-6"  />
                <x-adminlte-input name="end_date" label="End Date" type='date' placeholder="End date" value='{{$event -> end_date}}' fgroup-class="col-md-6" disable-feedback />
                <x-adminlte-input name="location" label="Location" value='{{$event -> location}}' fgroup-class="col-md-6">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-purple">
                            <i class="fas fa-address-card"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-textarea name="description" label="description" placeholder="description" value='{{$event-> description}}' fgroup-class="col-md-6"  />
                {{-- <x-adminlte-input-file name="image_url" igroup-size="sm" placeholder="Choose an image...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file> --}}

            </div>
            <x-adminlte-button label="Edit" theme="Success" type="submit" />
            <a href="{{route('events.index')}}">back</a>
        </form>
    </div>
@stop
