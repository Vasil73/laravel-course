<?php

namespace App\Http\Controllers;

use App\Http\Requests\BooksRequest;
use App\Models\Book;
use Illuminate\Http\Client\Request;

class BookController extends Controller
    {
        public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            $booksData = new Book();
          //  return view ('form', ['data' => $booksData -> all()]);
            return view('form');
        }

        public function store(BooksRequest $request): \Illuminate\Http\JsonResponse
        {
           // var_dump ($request->all ());
            $booksData = new Book();
            $booksData->title = $request->input ('title');
            $booksData->author = $request->input ('author');
            $booksData->genre = $request->input ('genre');

            $booksData->save ();

          //  return redirect ()->route ( 'books-index' )->with ( 'success', 'Вы все сделали правильно' );
            return response ()->json ( 'Вы все правильно сделали, книга добавлена');
        }
    }
