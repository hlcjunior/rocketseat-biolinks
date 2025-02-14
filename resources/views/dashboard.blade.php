<div>
    <h1>Dashboard</h1>

    @if(session('message'))
        <span>{{ session('message') }}</span>
    @endif

    <a href="{{route('links.create')}}">Criar um novo link</a>

    <ul>
        @foreach($links as $link)
            <li style="display: flex">
                @unless($loop->last)
                    <form action="{{route('links.down',$link)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <button type="submit">⬇️</button>
                    </form>
                @endunless

                @unless($loop->first)
                    <form action="{{route('links.up',$link)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <button type="submit">⬆️</button>
                    </form>
                @endunless

                <a href="{{route('links.edit',$link)}}">
                    {{ $link->id }}. {{ $link->name }}
                </a>
                <form
                        action="{{route('links.destroy',$link)}}" method="post"
                        onsubmit="return confirm('Tem certeza que deseja excluir o link?')"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>

</div>
