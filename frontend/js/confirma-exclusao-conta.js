function confirmaExclusaoConta(){
    if(confirm("Deseja mesmo excluir sua conta? A ação NÃO PODERÁ SER DESFEITA. Deletar sua conta implica na exclusão de todos os seus dados de nosso sistema.")){
        window.location.href = "../../backend/users/apagar-usuario.php";
    }
}