<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function viewCategory($id){
        $category= Category::find($id);
        $books = $category->books;
        return view('viewcategory')->with(['books'=> $books,'category'=>$category]);
    }
    public function index(){
        $books= Book::latest()->get();
        return view('welcome')->with('books',$books);
    }
    public function viewBook($id){
        $book =Book::find($id);
        return view('book')->with('book',$book);
    }

    public function addComment(Request $request, $id){
        $this->validate($request,[
            'comment'=>'required|max:200'
        ]);

        $book = Book::find($id);
        $coment = new Comment();
        $coment->user_id = auth()->user()->id;
        $coment->book_id = $book->id;
        $coment->comment = $request->input('comment');
        $coment->save();
        return redirect()->back();

    }

}
