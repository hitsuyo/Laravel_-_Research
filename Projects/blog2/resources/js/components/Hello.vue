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

	new Vue({
	  el: '#app'
	})
</script>
