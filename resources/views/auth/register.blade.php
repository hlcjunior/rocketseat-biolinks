<div>
    <h1>REGISTRAR</h1>

    @if(session('message'))
        <span>{{ session('message') }}</span>
    @endif

    <form action="{{route('register')}}" method="post">
        @csrf

        <div>
            <input name="name" type="text" placeholder="Nome" value="{{ old('name') }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="email" type="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="email_confirmation" type="email" placeholder="Confirme seu Email">
        </div>

        <br>

        <div>
            <input name="password" type="password" placeholder="Senha">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button type="submit">Registrar</button>
    </form>
</div>
