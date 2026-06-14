<x-layout>
    <h2>Currently available books</h2>

    <ul>
        @foreach ($books as $book)
            <li>
                <x-card :href="route('books.show', ['title' => $book->title, 'id' => $book->id])" :highlight="$book->percent == 100" >
                    <h3>{{ $book["title"] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
    {{ $books->links() }}
</x-layout>    
