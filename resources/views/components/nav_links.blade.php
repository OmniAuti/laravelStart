@props(['active' => false])

<a {{$attributes}} class="{{$active ? 'active-link' : ''}}">{{$slot}}</a>