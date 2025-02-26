<x-layout.app>
    <x-container>
        <x-card title="Create a new link">
            <x-form :route="route('links.create')" post id="new-link-form">

                <x-input name="link" type="text" placeholder="Link" value="{{ old('link') }}" />

                <x-input name="name" type="text" placeholder="Name" value="{{old('name')}}" />

            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="new-link-form">Create a new link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
