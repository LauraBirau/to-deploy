<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use App\Models\Post;
use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        //Get all the foos, order by published date
        $foos = Foo::paginate(15);

        return view('foos.index', compact('foos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $posts = Post::get()->all();
        return view('foos/create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Persist the new resource.
        $validatedData = $request->validate([
            'name' => 'required|unique:foos|min:15',
            'email' => 'required|string|email|max:255',
            'post_id' => 'required|exists:posts,id',
            'thud' => 'filled',
            'wombat' => 'required'
        ]);

        $foo = new Foo();
        $foo->name = $validatedData['name'];
        $foo->email = $validatedData['email'];
        $foo->post_id = $validatedData['post_id'];
        $foo->thud = $validatedData['thud'];
        $foo->wombat = $validatedData['wombat'];
        $foo->save();
        return redirect('/foos');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return one article
     */
    public function show($id)
    {
        $foo = Foo::find($id);
        return view('foos.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Foo $foo
     * @return Response
     */
    public function edit(Foo $foo)
    {
        $posts = Post::get()->all();
        return view('foos.edit', compact('foo', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Foo $foo
     * @return Request
     */
    public function update(Foo $foo, Request $request)
    {
        //Persist the edited resource.
        $foo->update($request->validate([
            'name' => 'required|unique:foos|min:15|not_regex:/^([^0-9]*)$/',
            'post_id' => 'required',
            'email' => 'required|string|email|max:255',
            'thud' => 'required',
            'wombat' => 'required'
        ]));
        return redirect('/foos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     */
    public function destroy($id)
    {
        //Delete the resource.
        $foo = Foo::find($id);
        $foo->delete();
        return redirect('/foos');
    }
}
