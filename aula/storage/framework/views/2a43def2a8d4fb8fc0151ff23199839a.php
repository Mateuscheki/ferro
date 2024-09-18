<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lista de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-ligth bg-ligth">
        <div class="container-fluid"></div>
        <a class="navbar-brand" href="#">UniAlfa</a>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                detalhes do cliente <?php echo e($client->nome); ?>

            </div>
            <div class="card-body">
                <p><strong>ID:</strong> <?php echo e($client->id); ?> </p>
                <p><strong>ID:</strong> <?php echo e($client->nome); ?> </p>
                <p><strong>ID:</strong> <?php echo e($client->enderenco); ?> </p>
                <p><strong>ID:</strong> <?php echo e($client->observacao); ?> </p>
                <br>
                <a class="btn btn-success" href="<?php echo e(route('clients.index')); ?>">voltar</a>
            </div>

        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH /Users/unialfa/Documents/aula/resources/views/clients/show.blade.php ENDPATH**/ ?>