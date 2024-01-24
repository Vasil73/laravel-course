<?php

namespace App\Http\Controllers;

use App\Http\Requests\BooksRequest;
use App\Models\Book;

    class BookController extends Controller
    {
        public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            $booksData = new Book();
            return view ('books.index', ['data' => $booksData -> all()]);
          //  return view('books.index');
        }

        public function store(BooksRequest $request): \Illuminate\Http\JsonResponse
        {
            $request->validate ([
                'book_title' => 'required|not_only_whitespace|min:3|max:255|unique:books,title',
                'author_name' => 'required|not_only_whitespace|min:2|max:100'
            ]);

            $booksData = new Book();
            $booksData->book_title = $request->input ('book_title');
            $booksData->author_name = $request->input ('author_name');
            $booksData->save ();

           // return redirect ()->route ( 'books.index' )->with ( 'success', 'Вы все сделали правильно' );
            return response ()->json ('Вы все сделали правильно');
        }
    }
