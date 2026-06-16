<x-layout>
    <h2>Book {{ $book->title }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Author: </strong> {{ $book->author }}</p>
        <p><strong>Percent: </strong> {{ $book->percent. "%" }}</p>
        <p>Description: {{ $book->description}}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Library Info</h3>
        <p><strong>Library Name: </strong> {{ $book->library->name }}
        </p>
        <p><strong>Location: </strong> {{ $book->library->location }}
        </p>
        <p><strong>About Library: </strong> {{ $book->library->description }}
        </p>
    </div>
</x-layout>
    


