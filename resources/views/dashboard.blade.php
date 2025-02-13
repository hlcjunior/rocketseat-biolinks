<div>
    <h1>Dashboard</h1>

    <ul>
        @foreach($links as $link)
            <li>
                <a href="/link/{{$link->id}}">{{ $link->name }}</a>
            </li>
        @endforeach
    </ul>

</div>
