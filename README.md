<h1> 🔐 PHP Login System (Txt-Based) </h1>
Este projeto implementa um sistema de cadastro e autenticação de usuários utilizando PHP para processamento e arquivos de texto (.txt) para persistência de dados. É uma solução leve e didática para entender o fluxo de envio de formulários e manipulação de sistemas de arquivos.
<br> <br>
📖 Sobre o Projeto
Diferente de sistemas convencionais que utilizam MySQL, este projeto utiliza o sistema de arquivos do servidor para armazenar credenciais. O design foi construído com foco em UI/UX moderno, utilizando técnicas de Glassmorphism e animações fluidas em CSS.
<br> <br>
<h2>🚀 Funcionalidades</h2>
📝 Cadastro de Usuários
Validação com Regex: E-mail e senhas validados no front-end.

Segurança de Senha: Requisito de complexidade (letras maiúsculas, minúsculas, números e caracteres especiais).

Máscara de Telefone: Formatação automática (XX) XXXXX-XXXX via JavaScript.

Persistência: Armazenamento estruturado no formato email;senha; em arquivo de texto.
<br> <br>
<h2>🔑 Sistema de Login</h2>
Autenticação Manual: Varredura lógica no arquivo .txt para validação de credenciais.

Feedback de Erro: Sistema de alertas via URL (?erro=1) para logins inválidos.

Visualização de Senha: Recurso de toggle (mostrar/ocultar) para melhorar a experiência do usuário.
<br> <br>
<h2>🛠️ Tecnologias Utilizadas</h2>
Front-end: HTML5 e CSS3 (Variáveis customizadas, backdrop-filter para efeito de vidro, @keyframes para animações).

Lógica de Script: JavaScript (ES6+) para máscaras e validações em tempo real.

Back-end: PHP 7.4+ (Manipulação de arquivos com fopen, fwrite e leitura de strings).

Armazenamento: Arquivo de texto plano (.txt).
<br> <br>
<h2>📂 Estrutura de Pastas</h2>

```Plaintext
PROJETO/
├── 📄 formulario.html      # Interface de cadastro
├── 🎨 style.css           # Estilização da tela de cadastro
├── ⚙️ processa.php        # Lógica de escrita no arquivo .txt
├── 📁 Login/
│   ├── 📄 login.html      # Interface de acesso
│   ├── 🎨 login.css       # Estilização da tela de login
│   ├── ⚙️ processa2.php       # Lógica de leitura e validação
│   └── 📄 dados.txt       # "Banco de dados" em texto plano
└── 📁 imagens/            # Recursos visuais e destino pós-login
```
<br> <br>
<h1>🛡️ Aviso de Segurança (Fins Acadêmicos)</h1>
Este sistema foi desenvolvido para propósitos didáticos. Para um ambiente de produção, as seguintes melhorias seriam obrigatórias:

Criptografia: Uso de password_hash() para nunca salvar senhas em texto puro.

Sessões: Implementação de session_start() para manter o usuário logado.

Banco de Dados: Substituição do .txt por MySQL/PostgreSQL para maior escalabilidade e segurança.
<br> <br>
<h2>⚙️ Como Executar</h2>
Certifique-se de ter um servidor local instalado (XAMPP, WAMP ou Laragon).

Clone ou copie a pasta do projeto para o diretório raiz (htdocs ou www).

Certifique-se de que o servidor tem permissão de escrita na pasta Login/ para que o PHP possa criar/editar o arquivo dados.txt.
<br> <br>
Acesse: http://localhost/formulario.html.
<br> <br>
Desenvolvido por Duck101X 🚀
