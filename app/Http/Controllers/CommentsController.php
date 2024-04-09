<?php

namespace App\Http\Controllers;

use App\Enum\Page;
use App\Http\Requests\AddComment;
use App\Http\Requests\GetComments;
use App\Models\Comment;

class CommentsController
{
    public function getComments(GetComments $request, Page $page) {
        $pageNr = $request->input('page', 0);
        $perPage = $request->input('perPage', 100);
        $comments = Comment::query()->where('page_id', $page->value)->orderByDesc('id')->paginate($perPage, page: $pageNr);
        return  view('comments', ['comments' => $comments])->render();
    }
    public function addComment(AddComment $request, Page $page) {
        $comment = new Comment([
            'name' => $request->input('name'),
            'page_id' => $page->value,
            'content' => $request->input('content'),
        ]);
        $comment->save();
        return back();
    }
}
