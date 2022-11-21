{{-- 
# Need to write limiter for description strings and conditional "Read More" on char limit
# Organize Structure of list div better
# Make sure ID is set in href and leads to Post Type 'id' 
--}}
<head>
    <link rel="stylesheet" type="text/css" href={{asset('css/styles.css')}}>
</head>
<div style="display: flex; flex-direction: column;">
@foreach ($events as $event)
<div style="display: flex; flex-direction: row;">
    <a href={{"./events/".$event['id']}}><img aria-label="event-thumbnail" src={{asset($event['img'])}} style="max-width: 250px; max-height: 200px; object-fit: cover; width: auto; height: auto;"/></a>
    <div id="eventInfo" style="display: block;">
    @foreach($event['tag'] as $eventTag)
        @switch($eventTag)
            @case("Registration Required")
                <div class="light tag">{{$eventTag}}</div>
                @break
            @case("Paid")
                <div class="paid tag">{{$eventTag}}</div>
                @break
            @default
            <div class="dark tag">{{$eventTag}}</div>
        @endswitch
    @endforeach
    <p>{{$event['type']}}</p>
    <h1>
        {{$event['title']}}
    </h1>
    </div>
</div>
@endforeach
</div>