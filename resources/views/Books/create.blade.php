<x-layout>
    
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <h2>Add a New Book</h2>
        <label for="title">Book Title: </label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author Name: </label>
        <input type="text" id="author" name="author" required>

        <label for="percent">Complete Percentage [0-100]: </label>
        <input type="number" id="percent" name="percent" required>

        <label for="description">Book Description: </label>
        <textarea name="description" id="description" rows="5" required></textarea>

        <label for="library_id">Library: </label>
        <select name="library_id" id="library_id">
            <option value="" disabled selected>Select a library</option>
            @foreach ($libraries as $library )
                <option value="{{ $library->id }}">{{ $library->name }}</option>    
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Add Book</button>

        <!--Validate Errors-->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif


    </form>

</x-layout>
