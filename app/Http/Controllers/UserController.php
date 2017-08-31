<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Posts;
use App\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class UserController extends Controller
{

    public function index(Request $request)

    {

        $posts = Post::latest()->paginate(10);

        return view('user.user',compact('posts'))

            ->with('i', ($request->input('page', 1) - 1) * 10);

    }

    public function create()

    {

        return view('user.create');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }

    public function store(Request $request)

    {
      //$this->validate($request, [

            //'id' => 'required',
            //'name' => 'required',
           // 'email' => 'required',
            //'password' => 'required',
        //]);

        Post::create($request->all());

        return redirect()->route('user.index')

                        ->with('success','Post created successfully');

    }

    public function show($id)

    {

        $post = Post::find($id);

        return view('user.show',compact('post'));

    }

    public function edit($id)

    {
        $post = Post::find($id);

        return view('user.edit',compact('post'));

    }

    public function update(Request $request, $id)

    {

        $this->validate($request, [

            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Post::find($id)->update($request->all());

        return redirect()->route('user.index')

                        ->with('success','Post updated successfully');

    }

    public function destroy($id)

    {

        Post::find($id)->delete();

        return redirect()->route('user.index')

                        ->with('success','Post deleted successfully');

    }

}
