<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Library;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        Book::truncate();
        
        $books = [
    // Classic Literature (100% - Classic must-reads)
    ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'percent' => 100, 'description' => 'A story of wealth, love, and the American Dream in the roaring 1920s.'],
    ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'percent' => 100, 'description' => 'A gripping tale of racial injustice and moral growth in the Deep South.'],
    ['title' => '1984', 'author' => 'George Orwell', 'percent' => 100, 'description' => 'A dystopian masterpiece about surveillance, control, and individual freedom.'],
    ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'percent' => 85, 'description' => 'A romantic novel about love, class, and social expectations in Georgian England.'],
    ['title' => 'Moby Dick', 'author' => 'Herman Melville', 'percent' => 45, 'description' => 'The epic tale of Captain Ahab obsessive quest for the white whale.'],
    ['title' => 'Wuthering Heights', 'author' => 'Emily Brontë', 'percent' => 70, 'description' => 'A dark tale of passionate and destructive love on the Yorkshire moors.'],
    ['title' => 'Jane Eyre', 'author' => 'Charlotte Brontë', 'percent' => 90, 'description' => 'An orphaned girl overcomes hardship to find love and independence.'],
    ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'percent' => 100, 'description' => 'A disillusioned teenager navigates the phoniness of adult society.'],
    ['title' => 'Great Expectations', 'author' => 'Charles Dickens', 'percent' => 60, 'description' => "An orphan's rise through society and the unexpected source of his fortune."],
    ['title' => 'Little Women', 'author' => 'Louisa May Alcott', 'percent' => 95, 'description' => 'The lives of four sisters growing up during the American Civil War.'],
    
    // Fantasy (Mixed completion)
    ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'percent' => 100, 'description' => 'A hobbit unexpected journey to reclaim a stolen treasure from a dragon.'],
    ['title' => 'Harry Potter and the Sorcerers Stone', 'author' => 'J.K. Rowling', 'percent' => 100, 'description' => 'A young wizard discovers his magical heritage and battles dark forces.'],
    ['title' => 'The Fellowship of the Ring', 'author' => 'J.R.R. Tolkien', 'percent' => 80, 'description' => 'The first part of an epic quest to destroy a powerful ring.'],
    ['title' => 'The Name of the Wind', 'author' => 'Patrick Rothfuss', 'percent' => 65, 'description' => 'The life story of a legendary wizard told over three days.'],
    ['title' => 'Mistborn', 'author' => 'Brandon Sanderson', 'percent' => 90, 'description' => 'A heist story set in a world where the Dark Lord has already won.'],
    ['title' => 'The Way of Kings', 'author' => 'Brandon Sanderson', 'percent' => 55, 'description' => 'An epic fantasy about knights, oaths, and a world in turmoil.'],
    ['title' => 'A Game of Thrones', 'author' => 'George R.R. Martin', 'percent' => 75, 'description' => 'Noble families battle for control of the Iron Throne.'],
    ['title' => 'The Lion, the Witch and the Wardrobe', 'author' => 'C.S. Lewis', 'percent' => 100, 'description' => 'Four siblings discover a magical world through an old wardrobe.'],
    ['title' => 'The Princess Bride', 'author' => 'William Goldman', 'percent' => 95, 'description' => 'A hilarious tale of true love, adventure, and revenge.'],
    ['title' => 'Good Omens', 'author' => 'Neil Gaiman', 'percent' => 70, 'description' => 'An angel and demon team up to prevent the apocalypse.'],
    
    // Science Fiction
    ['title' => 'Dune', 'author' => 'Frank Herbert', 'percent' => 85, 'description' => 'An epic space opera about politics, religion, and the spice melange.'],
    ['title' => 'Foundation', 'author' => 'Isaac Asimov', 'percent' => 100, 'description' => 'The fall of a galactic empire and the science of psychohistory.'],
    ['title' => 'Neuromancer', 'author' => 'William Gibson', 'percent' => 50, 'description' => 'The pioneering cyberpunk novel about hackers and artificial intelligence.'],
    ['title' => "Ender's Game", 'author' => 'Orson Scott Card', 'percent' => 100, 'description' => 'A gifted child trains to fight in an interstellar war.'],
    ['title' => 'The Martian', 'author' => 'Andy Weir', 'percent' => 100, 'description' => 'An astronaut stranded on Mars uses science to survive.'],
    ['title' => 'Brave New World', 'author' => 'Aldous Huxley', 'percent' => 80, 'description' => 'A dystopian future where happiness is manufactured.'],
    ['title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury', 'percent' => 95, 'description' => 'A fireman questions his job of burning books.'],
    ['title' => 'The Hitchhikers Guide to the Galaxy', 'author' => 'Douglas Adams', 'percent' => 100, 'description' => 'A hilarious cosmic adventure after Earth is destroyed.'],
    ['title' => 'Snow Crash', 'author' => 'Neal Stephenson', 'percent' => 60, 'description' => 'A futuristic metaverse thriller about viruses and language.'],
    ['title' => 'Ready Player One', 'author' => 'Ernest Cline', 'percent' => 90, 'description' => 'A treasure hunt in a virtual reality world.'],
    
    // Mystery/Thriller
    ['title' => 'The Girl with the Dragon Tattoo', 'author' => 'Stieg Larsson', 'percent' => 75, 'description' => 'A journalist and hacker investigate a wealthy family dark secrets.'],
    ['title' => 'Gone Girl', 'author' => 'Gillian Flynn', 'percent' => 100, 'description' => 'A twisted tale of marriage, betrayal, and a mysterious disappearance.'],
    ['title' => 'The Da Vinci Code', 'author' => 'Dan Brown', 'percent' => 100, 'description' => 'A symbologist uncovers secrets hidden in Leonardo da Vinci art.'],
    ['title' => 'And Then There Were None', 'author' => 'Agatha Christie', 'percent' => 100, 'description' => 'Ten strangers are invited to an island where each meets their fate.'],
    ['title' => 'The Silence of the Lambs', 'author' => 'Thomas Harris', 'percent' => 60, 'description' => 'An FBI trainee seeks help from a brilliant cannibalistic psychiatrist.'],
    ['title' => 'The Shining', 'author' => 'Stephen King', 'percent' => 100, 'description' => 'A writer family becomes trapped in an isolated hotel with dark powers.'],
    ['title' => 'The Hound of the Baskervilles', 'author' => 'Arthur Conan Doyle', 'percent' => 85, 'description' => 'Sherlock Holmes investigates a legendary ghostly hound.'],
    ['title' => 'Murder on the Orient Express', 'author' => 'Agatha Christie', 'percent' => 95, 'description' => 'A murder on a train requires Poirot brilliant deduction.'],
    ['title' => 'The Godfather', 'author' => 'Mario Puzo', 'percent' => 70, 'description' => 'The epic story of a powerful Italian-American crime family.'],
    ['title' => 'The Bourne Identity', 'author' => 'Robert Ludlum', 'percent' => 80, 'description' => 'A man with amnesia discovers he is a deadly assassin.'],
    
    // Contemporary & Literary
    ['title' => 'The Kite Runner', 'author' => 'Khaled Hosseini', 'percent' => 100, 'description' => 'A story of friendship, betrayal, and redemption in Afghanistan.'],
    ['title' => 'The Help', 'author' => 'Kathryn Stockett', 'percent' => 90, 'description' => 'Black maids share their stories in 1960s Mississippi.'],
    ['title' => 'Life of Pi', 'author' => 'Yann Martel', 'percent' => 70, 'description' => 'A boy survives 227 days on a lifeboat with a Bengal tiger.'],
    ['title' => 'The Alchemist', 'author' => 'Paulo Coelho', 'percent' => 100, 'description' => 'A shepherd boy travels from Spain to Egypt in search of treasure.'],
    ['title' => 'Where the Crawdads Sing', 'author' => 'Delia Owens', 'percent' => 85, 'description' => 'A young woman raised in the marsh becomes a murder suspect.'],
    ['title' => 'The Book Thief', 'author' => 'Markus Zusak', 'percent' => 95, 'description' => 'A young girl in Nazi Germany finds solace in stolen books.'],
    ['title' => 'All the Light We Cannot See', 'author' => 'Anthony Doerr', 'percent' => 75, 'description' => 'A blind French girl and a German boy paths collide in WWII.'],
    ['title' => 'The Underground Railroad', 'author' => 'Colson Whitehead', 'percent' => 60, 'description' => 'A slave escapes using a literal underground railroad.'],
    ['title' => 'A Man Called Ove', 'author' => 'Fredrik Backman', 'percent' => 90, 'description' => 'A grumpy widower finds unexpected friendship with new neighbors.'],
    ['title' => 'Eleanor Oliphant Is Completely Fine', 'author' => 'Gail Honeyman', 'percent' => 80, 'description' => 'A lonely woman learns to confront her past and embrace life.'],
];

        $libraries = Library::all();

        
        // Insert all books
        foreach ($books as $book) {
            $book['library_id'] = $libraries->random()->id;
            Book::create($book);
        }
    }
}
