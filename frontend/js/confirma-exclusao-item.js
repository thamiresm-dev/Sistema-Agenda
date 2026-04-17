document.querySelectorAll('.btn-excluir').forEach(function(botao){
    botao.addEventListener('click', function(event){
        if(!confirm("Deseja mesmo excluir esse item?")){
            event.preventDefault();
        }
    });
});