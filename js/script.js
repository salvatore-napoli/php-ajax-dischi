Vue.config.devtools = true;

new Vue ({
	el: '#app',

	data: {
		disks: '',
		genres: [],
		selectedGenre: ''
	},

	mounted () {
		const self = this;

		axios.get('http://localhost:8888/GIT/php-ajax-dischi/app/server.php')
		.then(function (disks) {
			self.disks = disks.data;
			self.disks.forEach((element) => {
				if (!self.genres.includes(element.genre)) {
					self.genres.push(element.genre);
				}
			});
		});
	},

	methods: {
		filterByGenre () {
			const self = this;
			
			axios.get(`http://localhost:8888/GIT/php-ajax-dischi/app/server.php?genre=${self.selectedGenre}`)
			.then(function (disks) {
				self.disks = disks.data;
			});
		}
	}
});
