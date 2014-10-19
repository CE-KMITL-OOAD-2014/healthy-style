<?php
	
	class CommentController extends BaseController{
		public function showComments(){
			$comments = Comment::all();
			return View::make('comment')->with('comments',$comments);
		}

		public function postComments(){
			$Comment = new Comment;
			$Comment->user = Input::get('user');
			$Comment->feeling = Input::get('feeling');
			$Comment->comment = Input::get('comment');
			$Comment->save();
			return Redirect::to('/');
		}
	}