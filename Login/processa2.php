<?php 

if (isset($_POST['email']) && isset($_POST['senha'])) {

    // Lê dados do arquivo e remove espaços/quebras de linha
    $dados = trim(file_get_contents('../Login/dados.txt'));
    $pares = array_map('trim', explode(';', $dados));

    $Email = trim($_POST['email']);
    $Senha = trim($_POST['senha']);

    $autenticado = false;
    for ($i = 0; $i < count($pares) - 1; $i += 2) {
    if (empty($pares[$i]) || empty($pares[$i + 1])) continue;
        if ($Email === $pares[$i] && $Senha === $pares[$i + 1]) {
            $autenticado = true;
            break;
        }
    }

    if ($autenticado) {
        header('Location: ../imagens/Fotinha.jpg');
        exit();
    } else {
        header('Location: Login.html?erro=1');
        exit();
    }
}
?>
