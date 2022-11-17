<?php


namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller
{

    public function getList(Request $request)
    {
        $count = (int) $request->input('count');
        if ($count == null || !is_int($count) || $count <=0 ) $count = 5;
        $category = $request->input('category');
        if ($category == null) return response()->json([], 200);
        $dau = "=";
        if ($category == -1) $dau = ">";
        $posts = Post::where('category', $dau ,$category)
                ->select('id', 'category', 'title', 'image', 'created_at', 'name_author', 'view')
                ->orderby('created_at', 'desc')
                ->paginate($count);
        foreach ($posts as $key => $post) {
            $post->image = "https://quandoannguhanhson.org.vn/uploads/images/posts/" . $post->image;
        }
        return response()->json($posts, 200);
                       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
