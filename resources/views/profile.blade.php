<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put enctype="multipart/form-data" id="profile-form">

                <div class="flex gap-2 items-center">
                    <x-img src="{{ asset('storage/'.$user->photo) }}" alt="{{ $user->name }}"/>
                    <x-file-input name="photo" />
                </div>

                <x-input name="name" type="text" placeholder="Name" value="{{old('name',$user->name)}}" />

                <x-textarea name="description" value="{{old('description',$user->description)}}"/>

                <x-input name="handler" prefix="biolinks.com.br/" type="text" placeholder="Handler" value="{{old('handler',$user->handler)
                }}" />

            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="profile-form">Update link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>