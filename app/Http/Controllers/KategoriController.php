<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Posts;
use App\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)

    {

        $posts = Post::latest()->paginate(10);

        return view('kategori.kategori',compact('posts'))

            ->with('i', ($request->input('page', 1) - 1) * 10);

    }

    public function create()

    {

        return view('kategori.create');

    }

    public function store(Request $request)

    {

        $this->validate($request, [

            'id' => 'required',

            'name' => 'required',

        ]);

        Post::create($request->all());

        return redirect()->route('kategori.index')

                        ->with('success','Post created successfully');

    }

    public function show($id)

    {

        $post = Post::find($id);

        return view('kategori.show',compact('post'));

    }

    public function edit($id)

    {

        $post = Post::find($id);

        return view('kategori.edit',compact('post'));

    }

    public function update(Request $request, $id)

    {

        $this->validate($request, [

            'title' => 'required',

            'content' => 'required',

        ]);

        Post::find($id)->update($request->all());

        return redirect()->route('kategori.index')

                        ->with('success','Post updated successfully');

    }

    public function destroy($id)

    {

        Post::find($id)->delete();

        return redirect()->route('kategori.index')

                        ->with('success','Post deleted successfully');

    }
}
