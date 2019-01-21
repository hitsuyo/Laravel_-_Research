<!-- articles -->
@extends('layouts.blank')

@section('content')
	<div class="row">
		<h1 class="col-12 col-sm-6">Articles</h1>
		<!-- <a href="http://localhost/blog2/blog_crud">Manage posts</a> -->
		<a href="/blog3/article_crud" class="btn btn-info btn-sm col-12 col-sm-6" role="button">Manage articles</a>
	</div>

	<div id="app">
		<div class="">
			<post>
				@yield('content')
			</post>
			
		</div>

		<!-- <template>
		    <div>
		        <div class="card-header"><h3>Posts</h3></div>
		        <div class="card card-body mb-2" v-for="article in posts" :key="article.id">
		            <h4> article.title }}</h4>
		            <p> article.content }}</p>
		            <div>
		                <h5 class="float-left"> article.author }}</h5>
		                <div class="float-right">
		                    <button class="btn btn-primary" @click="post = article">Edit</button>
		                    <button class="btn btn-danger" @click="deletePost(article.id)">Delete</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</template> -->

	<script>
		export default {
		    data() {
		        return {
		            posts: [''],
		            post: {
		                id: '',
		                title: '',
		                content: '',
		                author: ''
		            },
		            pagination: {},
		            errors: {
		            	title: [],
		            	content: [],
		            	author: []
		            },
					headers: { // gửi thêm headers để laravel hiểu request ta gửi là ajax request 
					               // và trả về thông báo lỗi dạng JSON
					        'content-type': 'application/json',
					        'X-Requested-With': 'XMLHttpRequest'
					    },
		            editting: false,
		        };
		    },

		    created() {
		        this.fetchPosts(); // sau khi component được tạo thì ta sẽ fetch tất cả các post
		    },

          	props: {
	            pagination: Object,
	            fetchList: Function,
	        },
		    methods: {
		        fetchPosts: function(page_url) {
		            page_url = page_url || 'api/posts'; // nếu page_url không được truyền vào thì mặc định là 'api/posts'
		            fetch(page_url)
		                .then(res => res.json())
		                .then(res => {
		                    this.posts = res.data;

		                    this.$refs.child.makePagination(res.meta, res.links);
		                });
		        },
		         savePost: function() {
		        	fetch('api/posts', {
			            method: this.editting ? 'put' : 'post',
			            body: JSON.stringify(this.post),
			            headers: this.headers
		        	})
		            .then(res => res.json())
		            .then(res => {
		                if (res.errors) {
		                    this.errors = res.errors;
		                } else {
		                    this.fetchPosts();
		                    alert(res.message);
		                }
		            });
		    	},
		    	editPost(post) {
			        this.editting = true;
			        this.post.id = post.id;
			        this.post.title = post.title;
			        this.post.content = post.content;
			        this.post.author = post.author;
			    },
		        deletePost(id) {
		            if (confirm('Are you sure?')) {
		                let vm = this;
		                fetch('api/posts/${id}', {
		                    method: 'delete'
		                }).then(fun => {
		                    let url =
		                        this.pagination.path +
		                        '?page=' +
		                        this.pagination.current_page;
		                    this.fetchPosts(url);
		                });
		            }
		        }
		    }
		};
		</script>
	</div>

@endsection