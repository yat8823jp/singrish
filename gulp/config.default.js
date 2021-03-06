/*
 *
 * Gulp User Settings. Override Default Settings.
 *
 */
export default  {

	/**
	 *
	 * browserSync.
	 *
	 */
	browserSync: {
		proxy: 'develop.dev', //自身のローカル環境に合わせて書き換えてください。
		files: [
			"./style.css",
			"./js/bundle.js",
			"./**/*.php",
			"./**/*.png",
			"./**/*.svg",
			"./**/*.jpg"
		]
	},

	/**
	 *
	 * sass Compile Option.
	 *
	 */
	sass: {
		src: './src/styles/**/*.{sass,scss}',
		dest: './',
		sourceRoot: './src/styles'
	},

	/**
	 *
	 * JavaScript.
	 *
	 */
	browserify: {
		bundleOption: {
			cache: {}, packageCache: {}, fullPaths: false,
			debug: true,
			entries: './src/scripts/main.js',
			extensions: [ 'js' ]
		},
		dest: './',
		filename: 'js/bundle.js'

	}
};
