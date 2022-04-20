<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PostResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Builder\Property;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $comments=Comment::all()->where('postId');
        // return $comments;
        return CommentResource::collection(Comment::all());
    }

    // public function comments(CommentRequest $request)
    // {
    //     if($request('comments')){
    //         return Comment::where
    //     }
    // }

    // public function getComment($id)
    // {

    //     $comments = Comment::where('postId', $id )->get();
    //     return $comments;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $comment = Comment::create($request->validated());
        return new CommentResource($comment);
        
    }

    public function postComment(Comment $request)
    {
        if($request->has('postId')){
           $comments=Comment::get()->where('postId', $request->postId);
              return $comments;

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {

        // return new CommentResource($comment);
        $comment=Comment::all()->where('postId', $comment->postId);
        return $comment;
        // $comments = Post::find(1)->comments;
        // return PostResource::collection($comments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        $comment->update($request->validated());
        return new CommentResource($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->noContent();
    }
}
