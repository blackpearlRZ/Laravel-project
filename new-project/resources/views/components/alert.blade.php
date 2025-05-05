@props(['type','text'])
<div class="alert alert-{{$type}}" role='alert'>
    <strong>{{$text}}</strong>
    {{$slot}}
</div>