<x-layout.app>
    <x-container>
        <x-card title="Editing link :: {{$link->id}}">
            <x-form :route="route('links.edit',$link)" put id="edit-link-form">

                <x-input name="link" type="text" placeholder="Link" value="{{ old('link',$link->link) }}" />

                <x-input name="name" type="text" placeholder="Name" value="{{old('name',$link->name)}}" />

            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="edit-link-form">Update link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>