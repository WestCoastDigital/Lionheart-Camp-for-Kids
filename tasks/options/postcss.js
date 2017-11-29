module.exports = {
	dist: {
		options: {
			//map: true,
			map: {
		          inline: false, // save all sourcemaps as separate files...
		          annotation: 'assets/css/' // ...to the specified directory
		      },
			processors: [
				require( 'autoprefixer' )( {browsers: 'last 2 versions'} )
			]
		},
		files: {
			'assets/css/project.css': [ 'assets/css/project.css' ]
		}
	}
};
