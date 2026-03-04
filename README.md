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
<p>Fornecer um sistema web que permita que usuários criem sua tarefas, façam anotações e utilizem um checklist.</p>

<h2>Funcionalidades:</h2>
<ul>
  <li>Cadastro, login e logout de usuários;</li>
  <li>Exclusão de conta;</li>
  <li>Criar, editar e excluir tarefas;</li>
  <li>Criar, editar e excluir anotações;</li>
  <li>Criar e excluir itens em checklist.</li>
</ul>

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
