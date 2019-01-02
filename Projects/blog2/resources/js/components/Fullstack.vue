<template>
	<div>
		<h2>Articles</h2>
		<form>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Title" v-model="article.title">
			</div>
			<div class="form-group">
				<textarea class="form-control" placeholder="Body" v-model="article.body"></textarea>
			</div>
			<button type="submit" class="btn btn-light btn-block">Save</button>
		</form>
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li v-bind:class="[{disabled: !pagination.prev_page_url}]"
				class="page-item"><a class="page-link" href="#" @click="fetchArticles(pagination.prev)">Previous</a></li>

				<li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>

				<li class="page-item"><a class="page-link" href="#" @click="fetchArticles(pagination.next_page_url)">Next</a></li>
			</ul>
		</nav>
		<div class="card card-body mb-2" v-for="article in articles" v-bind:key="article.id">
			<h3>{{ article.title }}</h3>
			<p>{{ article.body }}</p>
			<hr>
			<button @click="deleteArticles()"></button>
		</div>
	</div>
</template>

<script>

	export default {
		data() {
			return {
				articles: [],
				article: {
					id: '',
					title: '',
					body: ''
			},
			article_id: '',
			pagination: {},
			edit: false
			}
		},

		created() {
			this.fetchArticles();
		},

		methods: {
			fetchArticles(page_url) {
				let vm = this;
				page_url = page_url || '/api/articles'
				fetch('api/articles')
					.then(res => res.json())
					.then(res => {
						this.articles = res.data;
						vm.makePagination(res.meta, res.links);
				})
				.catch(err => console.log(err));
			},
			addArticles() {
				if(this.edit === false) {
					fetch('article', {
						method: 'post',
						body: JSON.stringify(this.article),
						headers: {
							'content-type': 'application/json'
						}
					})
					.then(res => res.json())
					.then(data => {
						this.article.title = '';
						this.article.body = '';
						alert('Article Added');
						this.fetchArticles();
					})
					.catch(err => console.log(err));
				} else {

				}
			},
			editArticle(article) {
				this.edit = true;
				this.article.id = article.id;
				this.article.article_id = article.id;
				this.article.title = article.title;
				this.article.body = article.body;
			},
			makePagination(meta, links) {
				let pagination = {
					current_page: meta.current_page,
					last_page: meta.last_page,
					next_page_url: links.next,
					prev_page_url: links.prev
				};

				this.pagination = pagination;
			},
			deleteArticles() {
				if(confirm('Are you sure?')) {
					fetch('articles/${id}', {
						method: 'delete'
					})
					.then(res => res.json())
					.then(data => {
						alert('Articles Removed');
					})
				}
			}
		}
	}

</script>