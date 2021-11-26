<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome home :D Let's get to work!
                    <div class="dashboardWelcome">
                        <br><br><br>
                        ↑ Check your To-Do-List and Calendar ↑
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
