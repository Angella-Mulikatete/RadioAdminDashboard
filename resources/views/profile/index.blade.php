@extends('adminlte::page')
@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
   <form action="" >
      <x-adminlte-input name="iUser" label="User" placeholder="username" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="iMail" label='Email' type="email" placeholder="mail@example.com" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-envelope text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="iPassword" label='Password' type="password" placeholder="***" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-lock text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-button label="Submit" theme="primary" />
   </form>
@stop