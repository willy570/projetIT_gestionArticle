$(function(){
//alert('hello world')

$('.frmconex').on('submit',function(e){
	e.preventDefault();
	$.post('traitement/traitConnex.php', $(this).serialize(), function(data) {
		//console.log(data);{}
		if (data ==1 ) {
			$('.message').html('<strong>information correcte</strong>').css('color','green')
			location.href='vue/article.php'
		}else{
			$('.message').html('<strong>information incorrecte</strong>').css('color','red')
		}
	}, 'JSON');

})



$('#frmAjout').on('submit', function(e){
	e.preventDefault();
	$.post('../traitement/ajoutArticle.php', $(this).serialize(), function(data){
		if (data) {
			$('.message').html('Article ajouté avec succès!').css('color', 'green').fadeOut(3000)
			$('.annuler').trigger('click');
		}
	}, 'JSON');
})
})