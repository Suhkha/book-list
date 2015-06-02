<?php 
class BookController extends BaseController
{
    //Display all books in the list
    public function index(){

        //Add dinamic data an a var $books
        $books = Book::all(); //Get the collection of books

        //Compact we send the collection to the view
        return View::make('index', compact('books'));
    }

    //Display form to add a new book
    public function create(){
        return View::make('create');
    }

    //Manage the form: create
    public function manageCreateBook(){

        //Rules to validate
        $validation = Validator::make(Input::all(), Book::$rules);
        
        if($validation->fails()){
            return Redirect::to('/create')
            ->withInput()
            ->withErrors($validation);
        }else{
            $book = new Book;
            $book->title = Input::get('title');
            $book->author = Input::get('author');
            $book->available = Input::has('available');
            $book->save();

            //If everything is ok...
            return Redirect::action('BookController@index');
        }
    }

    //Display form to edit data
    public function edit(Book $book){
        return View::make('edit', compact('book'));
    }

    //Manage the form: edit
    public function manageEditBook(){
        $book = Book::findOrFail(Input::get('id'));
        $book->title = Input::get('title');
        $book->author = Input::get('author');
        $book->available = Input::has('available');
        $book->save();

        //If everything is ok...
        return Redirect::action('BookController@index');

    }

    //Delete book and display a confirmation's page
    public function delete(Book $book){
        return View::make('delete', compact('book'));
    }

    //Manage delete's confirmation
    public function manageDeleteBook(){
        $id = Input::get('book');
        $book = Book::findOrFail($id);
        $book->delete();

        //If everything is ok...
        return Redirect::action('BookController@index');

    }
}

?>