$(document).ready(function()
{
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    //ao click no botão executa a validação
    $('#btn').click(function(){
        
        //recebendo propriedades do html
        var nome = $('#nome').val();
        var descricao = $('#descricao').val();
        var categoria = $('#categoria').val();
        var imgFrente = $('#imgFrente').val();
        var imgCosta = $('#imgCosta').val();
        var preco = $('#preco').val();
        //ao click no btn adiciona a class 
        $('.alerta').addClass('alert alert-danger');

        //*********** Regras de validação *************/

        //validação nome
        
        if(!nome)
        {
            $('#erros').html('<li>Nome é obrigatório!</li>');
            return false;
        }
        if(nome.length <6)
        {
            $('#erros').html('<li>Nome deve conter pelomeno 6 caracteres!</li>');
            return false;
        }
        
        //validação descrição
        if(!descricao)
        {
            $('#erros').html('<li>Descrição é obrigatório!</li>');
            return false;
        }
         //validação categoria
        if(!categoria)
        {
            $('#erros').html('<li>Deve conter pelomenos uma Categoria!</li>');
            return false;
        }
         //validação img´s
         if(imgFrente == "")
         {
             $('#erros').html('<li>Requer imagem Frente!</li>');
             return false;
         }
         if(imgCosta == "")
         {
             $('#erros').html('<li>Requer imagem Costa!</li>');
             return false;
         }
         //validação preço
         if(!preco)
         {
            $('#erros').html('<li>Requer preço!</li>');
            return false;
         }
       
        

    });
       
    

});