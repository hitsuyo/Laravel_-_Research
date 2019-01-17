// This is local component

const Sidebar = {
  template: '<aside>Sidebar</aside>'
}

	new Vue({
	  el: '#app',
	  components: {
	    Sidebar
	  }
	})

<script>
	Vue.component('user-name', {
	  props: ['name'],
	  template: '<p>Hi {{ name }}</p>'
	})

	Vue.component('TodoItem', {
		props: ['ji']
	})

	Vue.component('nihon-go', {
  		props: {
			todo: {
				type: String,
				default: "Yes",
				required: true
			},
			ji: {
				type: String,
				default: "ABC",
			}
		},
	  	template: `
			<div>
	        	Footer Stuff
	        	<p>Hi {{ todo }}</p>
	        	<p>This is {{ ji }}</p>
	      	</div>
		`
	})

	new Vue({
	  el: '#app'
	})
</script>
