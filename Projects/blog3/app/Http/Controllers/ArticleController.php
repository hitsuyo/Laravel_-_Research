<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // return Article::all();
        // return Article::find(1); // id = 1
        // return 'It works';
        // return response()->json(Article::all());
        return response()->view('articles.index');
    }
 
    public function show(Article $article)
    {
        return $article;
        // return 'show';
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:255',
            'body' => 'required'
        ]);
        

        $title = $request->input('title');
		$body = $request->input('body');

		$article = new Article([
			'title' => $title,
			'body' => $body,
		]);

		$article = [
			'title' => $title,
			'body' => $body,
			'view_article' => [
				'href' => 'api/v1/articles/1',
				'method' => 'POST'
			]
		];

        $response = [
        	'msg' => 'Article Created',
        	'data' => $article
        	// 'href' => 'api/v1/article/1'
        ];

        return response()->json($response, 201);
        // 201 : data created
    }

    public function update(Request $request, Article $article)
    {
        // $article->update($request->all());

        // if(auth()->user()->id !== $post->user_id){
        //     return response()->json(['message'=>'User don\'t have privilege to update this post, update not successful'], status: 401);
        // }

        $article = Article::find($id);
        $article->title = $request->input('post_title');
        $article->content = $request->input('post_content');

        $article->update($request->only(
            'title',
            'content',
            'author'
        ));

        if(!$article->update()){
            return response()->json([
                'msg' => 'Error during update'
            ], 404);        
        }

        $article->view_post = [
            'href' => 'api/v1/articles' . $article->id,
            'method' => 'GET'
        ];

        $response = [
            'msg' => 'Article Updated',
            'meeting' => $meeting
        ];

        return response()->json($response, 200);
        //200: success
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $users = $article->users;
        $article->users()->detach();

        if(!$article->delete())
        {
        	foreach ($users as $user) {
				$article->users()->attach($user);
        	}
        	return response()->json([
    			'msg' => 'Deletion Failed'
        	], 404);
        }

        $response = [
    		'msg' => 'Meeting deleted',
    		'create' => [
    			'href' => 'api/v1/articles',
    			'method' => 'POST',
    			'params' => 'title, body'
    		]
        ];

        return response()->json($response, 200);
        // return null;
        // abort(204);
    }

    // Get data from other API

    public function api_data()
    {
    	return view('articles.api_data');
    }
}

/*
Ý nghĩa của mỗi response status trong HTTP:
200: Ok. Mã cơ bản có ý nghĩa là thành công trong hoạt động.
201: Đối tượng được tạo, được dùng trong hàm store.
204: Không có nội dung trả về. Hoàn thành hoạt động nhưng sẽ không trả về nội dung gì.
206: Trả lại một phần nội dung, dùng khi sử dụng phân trang.
400: Lỗi. Đây là lỗi cơ bản khi không vượt qua được xác nhận yêu cầu từ server.
401: Unauthorized. Lỗi do yêu cầu authen.
403: Forbidden. Lõi này người dùng vượt qua authen, nhưng không có quyền truy cập.
404: Not found. Không tìm thấy yêu cầu tương tứng.
500: Internal server error.
503: Service unavailable.
*/