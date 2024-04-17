<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Outfit', sans-serif;
    }

    body{
        height: 900vh;
    }

    nav.menu-lateral{
        width: 70px;
        height: 100%;
        background-color: #202020;
        padding: 40px o 40px 1%;
        box-shadow: 3px 0 0 #FF0077;

        position: fixed;
        top: 0%;
        left: 0%;
        overflow: hidden;
        transition: .2s;
    }

    nav.menu-lateral:hover{
        width: 300px;
    }

    .btn-expandir{
        width: 100%;
        padding-left: 10px;
    }

    .btn-expandir > i{
        color: #fff;
        font-size: 24px;
        cursor: pointer;
    }

    ul{
        height: 100%;
        list-style-type: none;
    }

    ul li.item-menu{
        transition: .5s;
    }

    ul li.item-menu:hover{
        background: #FF0077;
    }
    
    ul li.item-menu a{
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        padding: 20px 4%;
        display: flex;
        margin-bottom: 20px;
        line-height: 40px;
    }

    ul li.item-menu a .txt-link{
        margin-left: 40px;

    }
    ul li.item-menu a .icon > i{
        font-size: 30px;
        margin-left: 15px;
    }

</style>
</head>
<body>

    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-columns-gap"></i></span>
                    <span class="txt-link">Armazém</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-clipboard-data-fill"></i></span>
                    <span class="txt-link">Agenda</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Perfil</span>
                </a>
            </li>
        </ul>

    </nav>

    <script src="menu.js">

    </script>
</body>
</html>