<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias News</title>
    <?php wp_head(); ?>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-light-gray h-full w-full">

<div class="bg-light-gray p-4 flex gap-4 justify-between px-16">  
    <div class="flex justify-center items-center">
        <img class="h-4 w-36" src="<?= get_template_directory_uri()?>/src/img/noticias-news-header.png" alt="Logo do Notícias News">
    </div>
    <div class="flex gap-4">
        <button class="btn btn-header-top"><span>Acessar Conta</span> <i class="ph ph-sign-in"></i></button>
        <button class="btn btn-header-top"><span>Registrar-se</span> <i class="ph ph-user-plus"></i></button>
        <button class="btn btn-header-top"><span>Deslogar</span> <i class="ph ph-sign-out"></i></button>
    </div>
</div>