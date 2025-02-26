@props(['name','prefix'=>null])

<label class="input input-bordered text-slate-900 flex items-center gap-2 w-full">
    @if($prefix)
        <span>{{$prefix}}</span>
    @endif

    <input class="grow" name="{{$name}}" {{$attributes}}>
    @error($name)
    <div class="text-sm text-error">{{ $message }}</div>
    @enderror
</label>