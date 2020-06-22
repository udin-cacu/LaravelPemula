<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'judul' => 'required',
        'kd_book' => 'required',
        'pengarang' => 'required',
        'stock'=>'required'
        ]);

        Book::create($request->all());

        return redirect('/books')->with('status','Data Buku Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
        'judul' => 'required',
        'kd_book' => 'required',
        'pengarang' => 'required',
        'stock'=>'required'
        ]);
        
         Book::where('id',$book->id)
                ->update([
                    'judul' => $request->judul,
                    'pengarang' => $request->pengarang,
                    'kd_book' => $request->kd_book,
                    'th_terbit'=> $request->th_terbit,
                    'stock'=> $request->stock
                   
                ]);
        return redirect('/books')->with('status','Data Buku Berhasil DiUpdate!');
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/books')->with('status','Data Buku Berhasil DiHapus!');
    }

    public function laporan()
    {
        $books = Book::all();
        return view('books.laporan',compact('books'));
    }

    public function pdf()
    {
        $books = Book::all();
        $pdf = \PDF::loadView('books.laporan', compact('books'));
        return $pdf->download('invoice.pdf');
    }
}
