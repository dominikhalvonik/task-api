<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 14.05.2016
 * Time: 13:42
 */

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function show($isbn)
    {
        $book = Book::where('isbn', '=', $isbn)->first();

        if(!$book)
        {
            return response()->json(['status' => false, 'content' => "Book not found"], 404);
        }
        else
        {
            return response()->json(['status' => true, 'content' => $book->toArray()]);
        }
    }

    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), ['isbn' => 'required||unique:book|max:20',
            'author'        => "required|max:200",
            "title"         => "required|max:255",
            'published_at'  => 'required|date',
            'rating'        => 'numeric']);

        if($validation->fails())
        {
            return response()->json(['status' => false, 'content' => $validation->messages()->all()], 500);
        }
        else
        {
            $book = Book::create($request->all());

            if(!$book)
            {
                return response()->json(['status' => false, 'content' => "Cannot add book to database"], 500);
            }
            else
            {
                return response()->json(['status' => true, 'content' => $book->toArray()]);
            }
        }
    }
}