<?php
	class Article{
		private $id;
		private $admin;
		private $text;

		public function getid(){
			return $this->id;
		}
		public function getadmin(){
			return $this->admin;
		}
		public function gettext(){
			return $this->text;
		}


		public function setadmin($name){
			return $this->admin=$name;
		}
		public function settext($msg){
			return $this->text=$msg;
		}

		public function newArticle(){
			$new=new ArticleEloquent;
			$new->admin=$this->admin;
			$new->text=$this->text;
			$new->save();
		}

		public static function getbyidArticle($id){
			$data=ArticleEloquent::find($id);
				if($data==NULL){
					return NULL;
				}
			$obj=new Article;
			$obj->id=$data->id;
			$obj->admin=$data->admin;
			$obj->text=$data->text;
			
			return $obj;
			
		}

		public function editArticle(){
			$edit=ArticleEloquent::find($this->id);
			$edit->admin=$this->admin;
			$edit->text=$this->text;
			$edit->save();
		}
	}

?>