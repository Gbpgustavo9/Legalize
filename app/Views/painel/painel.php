<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Legalize</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #2e0303;
        }
        .main-content {
            margin-left: 200px;
            padding: 32px 40px 64px 40px;
            min-height: 100vh;
            color: #fff;
        }
        @media (max-width: 700px) {
            .main-content { margin-left: 0; padding: 16px 4vw 80px 4vw; }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <?php include __DIR__ . '/sidebar.php'; ?>
    <div class="main-content">
        <h1>Bem-vindo ao Painel</h1>
        <p>Conteúdo principal do painel aqui.</p>
        <!-- Adicione aqui o conteúdo dinâmico do painel -->
    </div>
    <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>