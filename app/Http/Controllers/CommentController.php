<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request,$id)
    {
        $data = array_merge($request->all(),['article_id' => $id]);
        if (Comment::insert($data)){
            return response()->json(['status' => 'success']);
        }else{
            return 1;
        }



    }
}
