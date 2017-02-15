<?php
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 2/8/2017
 * Time: 6:01 PM
 */

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {
        // Validation
        $post = new Post();
        $post->body = $request['body'];
        $request->user()->posts()->save($post);
        return redirect()->route('dashboard');
    }

}