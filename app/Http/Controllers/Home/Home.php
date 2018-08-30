<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Request;

class Home extends Controller
{

    public function __construct(){

        $this->middleware(function ($request, $next) {
            $this->member = $request->session()->get('member');
            return $next($request);
        });

    }
  
  	//列表
    public function index(){

	    $articles = Article::select('id','title','attach','content','createTime')->where('type', 1)->orderBy('id', 'DESC')->paginate(5);
	    foreach ($articles as $key => $val) {
	    	$articles[$key]['content'] = strip_tags($val->content);
	    }

    	return view('Home.index')->with('articles', $articles);

	}

	//详情
	public function detail($id){

		//文章
		$article = Article::where('id', $id)->first();

		//评论
		$article->comments = Comment::join('users', 'comment.mid', '=', 'users.id')->where('comment.aid', $id)->select('comment.*', 'users.nickname')->get();

    	return view('Home.detail')->with('article', $article);

	}

	//添加 更新
	public function save(){

		$input = Request::all();
    	if(empty($input['cid'])){
    		$Comment = new Comment;
		}else{
			$Comment = Comment::find($input['cid']);
		}
    	$Comment->type = 2;
    	$Comment->mid = Request::session()->get('member.id');
    	$Comment->aid = $input['aid'];
    	$Comment->content = $input['content'];
    	$Comment->save();
    	return redirect("/detail/{$input['aid']}#comment");

    }

    //删除
    public function del($id){
    	$Comment = Comment::find($id);
    	$Comment->delete();
    	return redirect("/detail/{$Comment->aid}#comment");
    }

}