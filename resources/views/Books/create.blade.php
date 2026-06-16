<x-layout>
    
    <form action="" method="post">
        <h2>Add a New Book</h2>
        <label for="title">Book Title: </label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author Name: </label>
        <input type="text" id="author" name="author" required>

        <label for="percent">Complete Percentage [0-100]: </label>
        <input type="number" min="0" max="100" id="percent" name="percent" required>

        <label for="desc">Book Description: </label>
        <textarea name="desc" id="desc" rows="5" required></textarea>

        <label for="library-id">Library: </label>
        <select name="library-id" id="library-id">
            <option value="" disabled selected>Select a library</option>
        </select>

        <button type="submit" class="btn mt-4">Add Book</button>

    </form>

</x-layout>
