<x-layout>
    <h2>Currently available books</h2>

    <ul>
        @foreach ($books as $book)
            <li>
                <x-card :href="route('books.show', ['title' => $book->title, 'id' => $book->id])" :highlight="$book->percent == 100" >
                    <div>
                        <h3>{{ $book->title }}</h3>
                        <p>{{ $book->library->name }}</p>
                        <p>{{ $book->library->location }}</p>
                    </div>
                    
                </x-card>
            </li>
        @endforeach
    </ul>
    {{ $books->links() }}
</x-layout>    
