@props(['src','alt'])
<div class="avatar">
    <div class="w-24 rounded-xl bg-white">
        <img {{$attributes}} alt="{{$alt}}" src="{{$src}}"/>
    </div>
</div>