<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Authentification</title>
</head>

<body class="BigContainer">
    <div class="container">
        <table>
            <tbody>
                <tr class="cont">
                    <td>
                        <h1>Tableau de bord</h1>
                    </td>
                    <td>
                        <a href="{{ route('logout') }}">
                            Se déconnecter
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3>
            bienvenue {{ Auth::user()->name }}
        </h3>
    </div>
</body>
</html>