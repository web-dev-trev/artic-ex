<head>
    <link rel="stylesheet" type="text/css" href={{asset('css/styles.css')}}>
</head>
<div style="display: flex; flex-direction: column;">
<div style="display: flex; flex-direction: row;">
    <img aria-label="event-thumbnail" src={{asset($event['img'])}} style="max-width: 250px; max-height: 200px; object-fit: cover; width: auto; height: auto;"/>
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
    <p>{{$event['type']}}</p>
    <h1>
        {{$event['title']}}
    </h1>
    </div>
</div>
@endforeach
</div>