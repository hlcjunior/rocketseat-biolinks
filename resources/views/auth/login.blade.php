<div>
    <h1>LOGIN</h1>

    @if(session('message'))
        <span>{{ session('message') }}</span>
    @endif

    <form action="{{route('login')}}" method="post">
        @csrf

        <div>
            <input name="email" type="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="password" type="password" placeholder="Senha">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button type="submit">Entrar</button>
    </form>
</div>
