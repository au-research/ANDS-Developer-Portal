module.exports = function(grunt){
	//configuration goes here
	var yeomanConfig = {
		assets: 'core/assets',
		base: '../../assets'
	}
	grunt.initConfig({
		yeoman: yeomanConfig,
		uglify:{
			options:{
				mangle: false,
				report: 'min'
			},
			scripts:{
				files:{
					'<%= yeoman.assets %>/js/combine.min.js':['<%= yeoman.assets %>/js/combine.js']
				}
			}
		},
		cssmin:{
			options:{
				report:'min'
			},
			minify:{
				src:'<%= yeoman.assets %>/css/combine.css',
				dest:'<%= yeoman.assets %>/css/combine.min.css'
			}
		},
		concat:{
			options:{
				separator:';'
			},
			styles:{
				src:[
					// '<%= yeoman.assets %>/bootstrap/css/bootstrap.min.css',
					// '<%= yeoman.assets %>/font-awesome/css/font-awesome.min.css',
					// '<%= yeoman.assets %>/js/fancybox/jquery.fancybox.css',
					// '<%= yeoman.assets %>/js/revolution-slider/css/settings.css',
					// '<%= yeoman.assets %>/js/isotope/style.css',
					// '<%= yeoman.assets %>/js/audioplayer/audioplayer.css',
					'<%= yeoman.base %>/lib/prettyprint/pretty.css',
					'<%= yeoman.assets %>/css/theme.css',
					'<%= yeoman.assets %>/css/ands_green.css',
					'<%= yeoman.assets %>/css/ands_style.css',
				],
				dest:'<%= yeoman.assets %>/css/combine.css'
			},
			scripts:{
				src:[
					'<%= yeoman.assets %>/js/jquery-1.10.1.min.js',
				    '<%= yeoman.assets %>/bootstrap/js/bootstrap.min.js',
				    '<%= yeoman.assets %>/js/dropdown/dropdown-menu.js',
				    '<%= yeoman.assets %>/js/fancybox/jquery.fancybox.pack.js',
				    '<%= yeoman.assets %>/js/fancybox/jquery.fancybox-media.js',
				    '<%= yeoman.assets %>/js/revolution-slider/js/jquery.themepunch.revolution.min.js',
				    '<%= yeoman.assets %>/js/isotope/jquery.isotope.min.js',
				    '<%= yeoman.assets %>/js/jquery.fitvids.js',
				    '<%= yeoman.assets %>/js/audioplayer/audioplayer.min.js',
				    '<%= yeoman.assets %>/js/jquery.easy-pie-chart.js',
				    '<%= yeoman.assets %>/js/owl-carousel/owl.carousel.min.js',
				    '<%= yeoman.assets %>/js/plugins.js',
				    '<%= yeoman.assets %>/js/theme.js',
				    '<%= yeoman.assets %>/js/ands_script.js',
				    '<%= yeoman.base %>/lib/prettyprint/pretty.js',
				],
				dest:'<%= yeoman.assets %>/js/combine.js'
			}
		},
		concurrent:{
			dev:['watch:compass']
		},
		compass: {
			dev:{
				options: {
					sassDir: '<%= yeoman.assets %>/sass',
					cssDir: '<%= yeoman.assets %>/css',
					debugInfo: false
				}
			}
		},
		watch: {
			compass: {
				files: ['<%= yeoman.assets %>/sass/{,*/}*.{scss,sass}'],
				tasks: ['compass:dev', 'concat:styles', 'cssmin'],
				options:{nospawn:true}
			}
		}
	});
	require('load-grunt-tasks')(grunt);

	//define your tasks
	grunt.registerTask('default', [
		'compass',
		'concat',
		'uglify',
		'cssmin'
	]);

	grunt.registerTask('dev',[
		'watch:compass'
	]);

	grunt.registerTask('scripts', [
		'concat:scripts',
		'uglify:scripts'
	]);

	grunt.registerTask('styles', [
		'compass',
		'concat:styles', 
		'cssmin'
	]);
}