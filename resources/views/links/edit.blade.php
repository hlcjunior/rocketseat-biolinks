<div>
    <h1>Editar um Link :: {{$link->id}}</h1>

    @if(session('message'))
        <span>{{ session('message') }}</span>
    @endif

    <form action="{{route('links.edit',$link)}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <input name="link" type="text" placeholder="Link" value="{{ old('link',$link->link) }}">
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="name" type="text" placeholder="Nome" value="{{ old('name', $link->name) }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <a href="{{route('dashboard')}}">Cancelar</a>
        <button type="submit">Salvar</button>
    </form>
</div>
