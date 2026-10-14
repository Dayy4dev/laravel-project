<x-admin.layout>
    
    <div class="mx-auto max-w-4xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <h1 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>
        <div class="space-y-2 text-gray-600 dark:text-gray-300">
            <p>Name: {{ $name }}</p>
            <p>Hobby: {{ $hobby }}</p>
            <p>Github: <a href="https://github.com/{{ $github }}" target="_blank" class="text-blue-500 hover:underline">{{ $github }}</a></p>
        </div>
    </div>
    
</x-admin.layout>