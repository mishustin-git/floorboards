<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Record create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="/dashboard/record/store">
                        @csrf
                        <div>
                            <label for="english">english</label>
                            <input type="text" name="english">
                        </div>
                        <div>
                            <label for="russian">russian</label>
                            <input type="text" name="russian">
                        </div>
                        <div>
                            <label for="description">description</label>
                            <input type="text" name="description">
                        </div>
                        <div>
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>