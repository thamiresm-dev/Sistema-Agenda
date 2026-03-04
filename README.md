<h1 align="center">Sistema Agenda</h1>

<p align="center">O Sistema Agenda é um software de organização pessoal que permite que usuários gerenciem suas tarefas e compromissos, além de fazerem anotações, tudo em um único ambiente.</p>

<p align="center">
  <img src="https://img.shields.io/badge/HTML5-orange" alt="HTML5 Badge">
  <img src="https://img.shields.io/badge/CSS3-blue" alt="CSS3 Badge">
  <img src="https://img.shields.io/badge/JavaScript-yellow" alt="JavaScript Badge">
  <img src="https://img.shields.io/badge/PHP-8.2-blue" alt="PHP Badge">
  <img src="https://img.shields.io/badge/MariaDB-10.4-green" alt="MariaDB Badge">
</p>

<h2>Objetivo:</h2>
<p>Fornecer um sistema web que permita que usuários criem suas tarefas, façam anotações e utilizem um checklist.</p>

<h2>Funcionalidades:</h2>
<ul>
  <li>Cadastro, login e logout de usuários;</li>
  <li>Exclusão de conta;</li>
  <li>Criar, editar e excluir tarefas;</li>
  <li>Criar, editar e excluir anotações;</li>
  <li>Criar e excluir itens em checklist.</li>
</ul>

<h2>Demonstração do sistema:</h2>
<h3>Página inicial:</h3>
<div align="center">
  <img src="frontend/img/screenshot-inicio.png" alt="Tela inicial" width="58%">
  <p>Página que é exibida assim que o sistema é acessado, nela contém as opções "Cadastrar-me" (criar conta) e "Entrar" (fazer login).</p>
</div>
<h3>Menu principal:</h3>
<div align="center">
  <img src="frontend/img/screenshot-menu-principal.png" alt="Tela de menu principal" width="58%">
  <p>Página com opções que é exibida assim que o usuário realiza login.</p>
</div>
<h3>Página de tarefas:</h3>
<div align="center">
  <img src="frontend/img/screenshot-minhas-tarefas.png" alt="Página de tarefas" width="58%">
  <p>Página com as tarefas criadas pelo usuário (ao clicar na tarefa pode-se visualizar mais detalhes sobre ela, bem como a opção de editá-la).</p>
</div>
<h3>Página de anotações:</h3>
<div align="center">
  <img src="frontend/img/screenshot-anotações.png" alt="Página de anotações" width="58%">
  <p>Página com anotações (para visualizar seu conteúdo, basta clicar em cima da anotação).</p>
</div>
<h3>Página de checklist (lista de afazeres):</h3>
<div align="center">
  <img src="frontend/img/screenshot-lista-afazeres.png" alt="Página de checklist" width="58%">
  <p>Página com lista de afazeres, possibilitando marcar ou desmarcar itens.</p>
</div>

<h2>Tecnologias utilizadas:</h2>
<ul>
  <li><b>Front-end:</b> HTML5, CSS3 e JavaScript;</li>
  <li><b>Back-end:</b> PHP 8.2;</li>
  <li><b>Banco de dados:</b> MariaDB 10.4 (compatível com MySQL).</li>
</ul>

<h2>Como executar:</h2>
<h3>1. Clone o repositório:</h3>
<p>git clone https://github.com/thamiresm-dev/Sistema-Agenda.git</p>
<h3>2. Crie o banco de dados:</h3>
<p>No MariaDB/MySQL crie um banco chamado 'sistema-agenda';</p>
<h3>3. Importe a estrutura do banco:</h3>
<p>Arquivo 'sistema-agenda.sql' que está na pasta 'database';</p>
<h3>4. Configure as credenciais:</h3>
<p>Se necessário, ajuste o arquivo de conexão com o banco de dados (por padrão roda localmente com usuário root, sem senha).</p>
<h3>5. Inicie o servidor local:</h3>
<p>Abra o XAMPP, inicie o Apache e o MySQL e acesse o projeto pelo navegador.</p>

<h2>Boas práticas:</h2>
<ul>
  <li>Senhas armazenadas com password_hash();</li>
  <li>Verificação de senhas com password_verify();</li>
  <li>Uso de Prepared Statements;</li>
  <li>Proteção de páginas com controle de sessão.</li>
</ul>

<h2>Autora:</h2>
<p>Thamires Marques A.</p>
