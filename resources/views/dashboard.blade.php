<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex justify-between flex-col">
            <x-button :href="route('links.create')" ghost>Create a new link</x-button>
            <x-button :href="route('profile')" ghost>Update Profile</x-button>
            <x-button :href="route('logout')" ghost>Logout</x-button>

        </div>
        <div class="text-center space-y-2 w-2/3">
            <x-img src="/storage/{{$user->photo}}" alt="{{$user->name}}" width="250px" />
            <div class="font-bold text-2xl tracking-wider">{{$user->name}}</div>
            <div class="text-sm opacity-80">{{$user->description}}</div>

            <ul class="space-y-2">
                @foreach($links as $link)
                    <li class="flex items-center justify-center gap-2">
                        @unless($loop->last)
                            <x-form :route="route('links.down',$link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-down class="w-4 h-4" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button ghost disabled>
                                <x-icons.arrow-down class="w-4 h-4" />
                            </x-button>
                        @endunless


                        @unless($loop->first)
                            <x-form :route="route('links.up',$link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-up class="w-4 h-4" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button ghost disabled>
                                <x-icons.arrow-up class="w-4 h-4" />
                            </x-button>
                        @endunless

                        <x-button href="{{route('links.edit',$link)}}" block outline info>
                            {{ $link->id }}. {{ $link->name }}
                        </x-button>

                        <x-form
                                :route="route('links.destroy',$link)" delete
                                onsubmit="return confirm('Tem certeza que deseja excluir o link?')"
                        >
                            <x-button ghost>
                                <x-icons.trash class="w-4 h-4" />
                            </x-button>
                        </x-form>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>