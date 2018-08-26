<?php

namespace App\Http\Controllers\Api\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Clients\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
     /**
     * @param CommentRequest $request
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(CommentRequest $request)
    {
        $this->authorize('create', Comment::class);
        $comment = new Comment();
        $data = $request->input();
        $data ['client_id'] = auth()->user()->id;
        $comment->fill($data);
        if($comment->save()){
            return response()->json([
                'message'=> trans('api.Added successfully')
            ],201);
        }else{
            return response()->json([
                'message'=> trans('api.Unexpected error')
            ],500);
        }
    }
    public function update(CommentRequest $request , Comment $comment)
    {
        $this->authorize('update',$comment);
        $comment->update(array_filter($request->input()));
        return response()->json([
            'message'=> trans('api.Updated successfully')
        ],200);
    }
    public function destroy(Comment $comment)
    {
        $this->authorize('delete',$comment);
        $comment->delete();
        return response()->json([
            'message'=> trans('api.Deleted successfully')
        ],200);
    }
}
