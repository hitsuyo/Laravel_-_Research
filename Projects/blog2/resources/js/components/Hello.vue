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

	Vue.component('nihon-go', {
	  props: ['ji'],
	  template: '<p>Hi {{ ji }}</p>'
	})

	new Vue({
	  el: '#app'
	})
</script>
