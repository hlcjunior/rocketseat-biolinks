<div>
    <h1>Criar um Link</h1>

    @if(session('message'))
        <span>{{ session('message') }}</span>
    @endif

    <form action="{{route('links.create')}}" method="post">
        @csrf

        <div>
            <input name="link" type="text" placeholder="Link" value="{{ old('link') }}">
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="name" type="text" placeholder="Nome" value="{{ old('name') }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Salvar</button>
    </form>
</div>
