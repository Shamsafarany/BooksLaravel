<x-layout>
    <h2>Book {{ $book->title }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Author: </strong> {{ $book->author }}</p>
        <p><strong>Percent: </strong> {{ $book->percent. "%" }}</p>
        <p>Description: {{ $book->description}}</p>
    </div>
</x-layout>
    
