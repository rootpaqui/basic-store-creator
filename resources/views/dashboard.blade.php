<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome back !') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-center align-center">
                        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white border shadow-md overflow-hidden sm:rounded-lg">
                            <form method="POST" action="{{ route('store.create') }}">
                                @csrf
                        
                                <!-- Store name -->
                                <div>
                                    <x-input-label for="store-name" :value="__('Nom de la boutique')" />
                                    <x-text-input id="store-name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                        
                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-3">
                                        {{ __('Créer la boutique') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
