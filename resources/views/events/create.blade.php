@extends('adminlte::page')
@section('title', 'Create and Event')

@section('content_header')
    <h1>Create an Event</h1>
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
        <form action="{{ route('events.store') }}" method="post">
            @csrf
            @method('post')
            <div class="row">
                <x-adminlte-input name="title" label="Title" placeholder="title" fgroup-class="col-md-6" disable-feedback />
                <x-adminlte-input name="booking_url" label="booking link" placeholder="booking link" fgroup-class="col-md-6"
                    disable-feedback />
                <x-adminlte-input name="start_date" label="Start Date" type='date' placeholder="start date"
                    fgroup-class="col-md-6" disable-feedback />
                <x-adminlte-input name="end_date" label="End Date" type='date' placeholder="End date"
                    fgroup-class="col-md-6" disable-feedback />
                <x-adminlte-input name="location" label="Location" fgroup-class="col-md-6">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-purple">
                            <i class="fas fa-address-card"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-textarea name="description" label="description" placeholder="description"
                    fgroup-class="col-md-6" disable-feedback />
                {{-- <x-adminlte-input-file name="image_url" igroup-size="sm" placeholder="Choose an image...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                            <i class="fas fa-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file> --}}

            </div>
            <x-adminlte-button label="Submit" theme="primary" type="submit" />
        </form>
    </div>
@stop
