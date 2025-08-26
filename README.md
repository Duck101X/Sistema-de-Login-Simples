# Sistema-de-Login-Simples
Sistema de login desenvolvido em PHP, com suporte de JavaScript, que utiliza um arquivo .txt para armazenar os dados em vez de um banco de dados.

📋 Projeto: Sistema de Cadastro e Login

Este projeto implementa uma tela de cadastro e uma tela de login simples utilizando HTML5, CSS3, JavaScript (ES6) e PHP 7+.
O objetivo é permitir que usuários se registrem em um formulário e depois acessem sua conta com e-mail e senha.

🚀 Tecnologias Utilizadas

HTML5
Estrutura das páginas de cadastro (formulario.html) e login (login.html).

CSS3 (com variáveis customizadas e efeitos visuais)
Arquivos style.css e login.css definem a estilização com design moderno (glassmorphism, sombras e gradientes).
Recursos utilizados:

Variáveis CSS (:root) para cores e efeitos.

backdrop-filter para criar efeito de vidro.

@keyframes para animação de rotação.

Responsividade com @media queries.

JavaScript (ES6+)
Scripts integrados para:

Máscara de telefone (formato brasileiro).

Validação de confirmação de senha.

Botão para mostrar/ocultar senha (toggleSenha).

Exibição de mensagem de erro em caso de falha no login.

PHP 7+
Processamento de formulários e persistência dos dados em arquivos .txt.
Arquivos principais:

processa.php → recebe dados do cadastro e armazena em Login/dados.txt.

processa2.php → valida credenciais no login.

📂 Estrutura do Projeto
📦 Projeto
 ┣ 📜 formulario.html      # Página de cadastro
 ┣ 📜 style.css            # Estilos da tela de cadastro
 ┣ 📜 processa.php         # Processa e armazena dados do cadastro
 ┣ 📂 Login
 ┃ ┣ 📜 login.html         # Página de login
 ┃ ┣ 📜 login.css          # Estilos da tela de login
 ┃ ┣ 📜 processa2.php      # Valida login
 ┃ ┣ 📜 dados.txt          # Arquivo com usuários cadastrados
 ┣ 📂 imagens
 ┃ ┗ 📜 pngwing.com.png    # Ícone do site
 ┃ ┗ 📜 Fotinha.jpg        # Redirecionamento após login válido

⚙️ Funcionamento
🔹 Cadastro (formulario.html)

O usuário preenche:

Nome

E-mail (com regex para validar formato)

Telefone (com máscara automática (XX) XXXXX-XXXX)

Senha (mín. 8 caracteres, obrigando maiúscula, minúscula, número e caractere especial)

Confirmação de senha

O JavaScript impede o envio do formulário caso as senhas não coincidam.

Os dados são enviados para processa.php, que:

Salva o email;senha; em Login/dados.txt.

Redireciona para a tela de login.

🔹 Login (login.html)

O usuário insere e-mail e senha.

processa2.php valida os dados:

Lê o arquivo dados.txt.

Verifica se o par email;senha; existe.

Se válido → redireciona para imagens/Fotinha.jpg.

Se inválido → retorna para login.html?erro=1 exibindo mensagem de erro.

🔒 Segurança

⚠️ Atenção: este projeto é apenas para fins acadêmicos/didáticos.
Ele não deve ser usado em produção pois possui limitações graves:

As senhas são salvas em texto puro (.txt), sem criptografia.

Não há proteção contra SQL Injection (embora não use banco SQL, o conceito se aplica para manipulação de arquivos).

Qualquer usuário com acesso ao servidor pode visualizar os dados diretamente.

🔧 Para uso real, recomenda-se:

Substituir dados.txt por um banco de dados (MySQL, PostgreSQL, SQLite).

Usar hash seguro para senhas (password_hash / password_verify).

Implementar sessões ($_SESSION) para autenticação segura.

📌 Requisitos

Servidor com suporte a PHP 7 ou superior.

Navegador moderno com suporte a HTML5, CSS3 e ES6.

▶️ Como Executar

Instale o XAMPP ou similar.

Copie os arquivos para a pasta htdocs (ou diretório raiz do servidor).

Acesse pelo navegador:

http://localhost/formulario.html → Tela de cadastro.

http://localhost/Login/login.html → Tela de login.

📷 Preview das Telas

Tela de Cadastro: formulário com design glassmorphism, animação e validações.

Tela de Login: layout simples e elegante com botão para mostrar senha.

📌 Versões de Linguagens Utilizadas

HTML: 5

CSS: 3 (com variáveis customizadas e backdrop-filter)

JavaScript: ES6+

PHP: 7.4+ (compatível com 8.x)
