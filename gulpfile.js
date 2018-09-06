var gulp = require('gulp'),
    imagemin = require('gulp-imagemin');
// backup do site
gulp.task('copy',function(){
    gul.src('projeto-integrador-8/**/*')
    .pipe(gulp.dest('dist'));
    
});
gulp.task('build-img',function(){//constroi as imagens => tarefa responsavel por chamar a função 
       //otimizando imagens 
     gulp.src('dist/imagens/**/*')//fluxo de origin onde gulp vai trabalhar
    .pipe(imagemin())//plugin responsavel por min da imagens
    .pipe(gulp.dest('dist/imagens'));// Destino onde o gulp vai salva os arquvos(imagens) já trabalhadas 
});
 