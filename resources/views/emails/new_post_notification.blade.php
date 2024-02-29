<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau post ajouté!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <h2>Bonjour {{ $user->name }},</h2>

        <p>Un nouveau post a été ajouté dans la catégorie que vous suivez.</p>

        <p>Merci de suivre notre plateforme!</p>

        <p>Consultez les derniers <a href="http://127.0.0.1:8000/collection">postes</a>.</p>
    </div>

    <p class="footer">Cordialement,<br>Votre équipe de notification</p>
</div>
</body>
</html>
