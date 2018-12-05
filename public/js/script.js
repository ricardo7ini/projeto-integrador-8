$(document).ready(function(){

//login

    $(".icon-login").click(function(){
        $("").toggle();
    });

    // $("#zoom_09").elevateZoom({
    //    easing : true
    // });

    //Sprint 6 seleção dos estados
    
    window.addEventListener('load', function(){
        $.ajax({
            url:'https://servicodados.ibge.gov.br/api/v1/localidades/estados/',
            type: 'GET',
            success: function(data){
                let option = document.createElement('option');
                option.value='';
                option.disabled=true;
                option.selected=true;
                option.innerHTML = 'Selecione';
                document.getElementById('estado').appendChild(option);
                    for(let estado of data){
                        let option = document.createElement('option');
                        option.setAttribute('id_estado', estado.id);
                        option.value=estado.sigla;
                        option.innerHTML = estado.nome;
                        document.getElementById('estado').appendChild(option);
                    }
        },
        error: function(err){
            console.log(err);
        }
        })
            document.getElementById('estado').addEventListener('change', carregaCidades);
        });
        function carregaCidades(){
            let id = this.options[this.selectedIndex].getAttribute('id_estado');
            document.getElementById('cidade').innerHTML='';
        $.ajax({
            url:'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+id+'/municipios/',
            type: 'GET',
            success:function(data){
            let option = document.createElement('option');
            option.value='';
            option.disabled=true;
            option.selected=true;
            option.innerHTML = 'Selecione';
            document.getElementById('cidade').appendChild(option);
        for(let cidade of data){
            let option = document.createElement('option');
            option.value=cidade.nome;
            option.innerHTML = cidade.nome;
            document.getElementById('cidade').appendChild(option);
        }
        },
        error:function(err){
            console.log(err);
        }
        });
        }
    
   
});

function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}

// methodos de adicionar ou remover produto do carrinho
function carrinhoRemoverProduto(idpedido,idproduto,item)
{
    $('#form-remover-produto input[name="pedido_id"]').val(idpedido);
    $('#form-remover-produto input[name="produto_id"]').val(idproduto);
    $('#form-remover-produto input[name="item"]').val(item);
    $('#form-remover-produto ').submit();

}
function carrinhoAdicionarProduto(idproduto)
{
    $('#form-adicionar-produto input[name="id"]').val(idproduto);
    $('#form-adicionar-produto').submit();
}