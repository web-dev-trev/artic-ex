@props(['event'])
<?php
    $date = new DateTimeImmutable($event->datetime);
    $day = $date->format('j');
    $weekday = $date->format('D');
    $month = $date->format('M');
?>
<div class="wrapper">
<div class="event-block">
    <div class="date-block">
        <div class="event-date">
            <span class="day-date">{{$day}}</span>
            <div style="align-self: center; padding-left: 16px; line-height: 12px;">
                <span class="day-weekday">{{$weekday}}</span><br>
                <span class="day-month">{{$month}}</span>
            </div>
        </div>
    </div>
    <a href={{"./events/".$event->id}}><img src={{asset($event->img)}} alt="event-image" style="max-width: 200px;"/></a>
    <div class="event-details">
        <span class="event-type">{{$event->type}}</span>
        <span class="event-title">{{$event->title}}</span>
        <span class="event-description">{{$event->description}}</span>
    </div>
    <div class="add-details">
        <span class="event-time"></span>
        @switch($event->tag)
            @case("Paid")
            <span tag={{$event->tag}} class="tag paid">{{$event->tag}}</span>
                @break
            @case("Registration Required")
            <span tag={{$event->tag}} class="tag light">{{$event->tag}}</span>
                @break
            @default
            <span tag={{$event->tag}} class="tag dark">{{$event->tag}}</span>
        @endswitch
    </div>
</div>
</div>
