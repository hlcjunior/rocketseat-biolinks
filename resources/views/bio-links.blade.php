<x-layout.app>
    <div>
        <x-img src="/storage/{{$user->photo}}" alt="{{$user->name}}" width="250px" />

        <h1>User {{$user->name}} :: {{$user->id}}</h1>
        <h2>{{$user->description}}</h2>

        <ul>
            @foreach($user->links as $link)
                <li>
                    <a href="{{$link->link}}" target="_blank">
                        {{ $link->id }}. {{ $link->name }}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
</x-layout.app>
