<x-layout.app>
    <x-container>
        <div class="text-center space-y-2">
            <x-img src="/storage/{{$user->photo}}" alt="{{$user->name}}" width="250px" />
            <div class="font-bold text-2xl tracking-wider">{{$user->name}}</div>
            <div class="text-sm opacity-80">{{$user->description}}</div>

            <ul>
                @foreach($links as $link)
                    <li>
                        <x-button href="{{route('links.edit',$link)}}" block outline info>
                            {{ $link->id }}. {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>

<x-layout.app>
    <div>
        <h1>Dashboard</h1>

        <h2>User {{auth()->user()->name}} :: {{auth()->id()}}</h2>
        <a href="{{route('profile')}}">Atualizar Profile</a>

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
</x-layout.app>