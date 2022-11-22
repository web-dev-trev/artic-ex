@extends('layout')

@section('content')
    <h1 style="border-bottom: solid grey 1px; padding: 24px 0px 24px 0px; text-transform: uppercase; font-size: 32px; letter-spacing: 7px; font-weight: 400; font-family: 'Open Sans', sans-serif">Exhibitions & Events</h1>
    <h2 style="color: grey; border-bottom: solid grey 1px; padding: 0px 0px 48px 0px; font-size: 28px; font-weight: 400; font-family: 'Times New Roman', Times, serif">Explore our wide-ranging exhibitions along with a variety of virtual and on-site programs.</h2>
    @foreach ($events as $event)
        <x-event-card :event="$event"/>
    @endforeach
@endsection
