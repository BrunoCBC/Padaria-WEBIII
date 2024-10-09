<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Padaria'; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilo.css"> <!-- Link para o CSS -->
</head>
<body>
<nav class="navbar navbar-expand-lg custom-navbar">
    <a class="navbar-brand navbar-brand-custom" href="Home.php">Padaria</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="form_cadastroCliente.php">Cadastrar Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="listarCliente.php">Listar Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="Sobre.php">Sobre Nós</a>
            </li>
        </ul>
    </div>
</nav>
<div class="main-content">
