Vue.config.devtools = true;

new Vue ({
	el: '#app',

	data: {
		disks: '',
		genres: [],
		chosenGenre: 'All'
	},

	mounted () {
		const self = this;

		axios.get('http://localhost:8888/GIT/php-ajax-dischi/app/server.php')
		.then(function (disks) {
			self.disks = disks.data;
			console.log(self.disks)
			self.disks.forEach((element) => {
				if (!self.genres.includes(element.genre)) {
					self.genres.push(element.genre);
				}
			});
		});
	}
});
