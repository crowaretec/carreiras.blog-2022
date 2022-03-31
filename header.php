<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title><?= get_option( 'blogname' ) ?></title>

    <?php wp_head(); ?> 
</head>
<body>
    <!-- CABEÇALHO-->
<header class="cabecalho container bg-orange">
    <!-- Mobile -->
    <div class="navbar-mobile">
        <a href="index.html" class="logo-icon">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon.png">
        </a>
        <a href="index.html" class="logo-emp">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/empregos-logo.png">
        </a>
        <a class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></a>
        <div class="outside-menu">
            <ul>
                <div class="first">
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Currículos</a></li>
                <li><a href="#">Carreiras</a></li>
                </div>
                <div class="secund">
                <li><a href="#">Cadastre-se</a></li>
                <li class="ultimo"><a href="#">Entrar</a></li>
                </div>
            </ul>
        </div>
    </div>
    <!-- Desktop -->
    <div class="navbar-desk">
        <div class="first-menu">
            <ul>
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Currículos</a></li>
                <li><a href="#">Carreiras</a></li>
            </ul>
        </div>
        <div class="logo-desk">
            <a href="index.html" class="logo-icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon.png">
            </a>
            <a href="index.html" class="logo-emp">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/empregos-logo.png">
            </a>
        </div>
        <div class="secund-menu">
            <ul>
                <li><a href="#">Cadastre-se</a></li>
                <li class="ultimo"><a href="#">Entrar</a></li>
            </ul>
        </div>
    </div>
    <!-- Sidebar Menu - Mobile -->
        <nav class="menu-mobile">
            <div class="subtitle container">
                <a class="btn-close"><i class="fa fa-times"></i></a>
                <h1 class="subtitle-header">Carreiras</h1>
            </div>
            <div class="input-button">
                <input type="text" class="search" placeholder="Busque no carreiras">
                <button class="search">Pesquisar</button>
            </div>
            <!-- <ul class="primeiro">
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Currículos</a></li>
                <li><a href="#">Carreiras</a></li>
                <li><a href="#">Cadastre-se</a></li>
                <li class="ultimo"><a href="#">Entrar</a></li>
            </ul> -->
            <ul class="segundo">
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Seu Emprego</a></li>
                <!-- <ul>
                    <li><a href="#"></a>CLT</li>
                    <li><a href="#"></a>Comportamento</li>
                    <li><a href="#"></a>Emprego</li>
                    <li><a href="#"></a>Livros</li>
                    <li><a href="#"></a>Oportunidades</li>
                    <li><a href="#"></a>Planejamento</li>
                    <li><a href="#"></a>Primeiro Emprego</li>
                </ul> -->
                <li><a href="#">Profissões</a></li>
                <li><a href="#">Salários</a></li>
                <li><a href="#">Mercado</a></li>
                <li><a href="#">Cursos e Eventos</a></li>
                <li class="ultimo"><a href="#">Testes</a></li>
            </ul>
        </nav>
    </header>
        <!-- Sidebar Menu - Desktop -->
        <div class="secund-desk">
                <ul>
                    <li><a  href="#">Carreiras</a></li>
                    <li><a href="#">Notícias</a></li>
                    <li><a href="#">Seu Emprego</a></li>
                    <!-- <ul>
                        <li><a href="#"></a>CLT</li>
                        <li><a href="#"></a>Comportamento</li>
                        <li><a href="#"></a>Emprego</li>
                        <li><a href="#"></a>Livros</li>
                        <li><a href="#"></a>Oportunidades</li>
                        <li><a href="#"></a>Planejamento</li>
                        <li><a href="#"></a>Primeiro Emprego</li>
                    </ul> -->
                    <li><a href="#">Profissões</a></li>
                    <li><a href="#">Salários</a></li>
                    <li><a href="#">Mercado</a></li>
                    <li><a href="#">Cursos e Eventos</a></li>
                    <li class="ultimo"><a href="#">Testes</a></li>
                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        <!-- CABEÇALHO - Tablet e Desktop -->
        <!-- <header class="cabecalho-desk container bg-orange">
    <div class="navbar-desk">
        <div>
            <ul>
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Currículos</a></li>
                <li><a href="#">Carreiras</a></li>
            </ul>
        </div>
        <div>
            <a href="index.html" class="logo-icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon.png">
            </a>
            <a href="index.html" class="logo-emp">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/empregos-logo.png">
            </a>
        </div>
        <div>
            <ul>
                <li><a href="#">Cadastre-se</a></li>
                <li class="ultimo"><a href="#">Entrar</a></li>
            </ul>
        </div>
    </div>
        <nav class="menu">
            <div class="subtitle container">
                <a class="btn-close"><i class="fa fa-times"></i></a>
                <h1 class="subtitle-header">Carreiras</h1>
            </div>
            <div class="input-button">
                <input type="text" class="search" placeholder="Busque no carreiras">
                <button class="search">Pesquisar</button>
            </div>
            <ul class="primeiro">
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Currículos</a></li>
                <li><a href="#">Carreiras</a></li>
                <li><a href="#">Cadastre-se</a></li>
                <li class="ultimo"><a href="#">Entrar</a></li>
            </ul>
            <ul class="segundo">
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Seu Emprego</a></li>
                <ul>
                    <li><a href="#"></a>CLT</li>
                    <li><a href="#"></a>Comportamento</li>
                    <li><a href="#"></a>Emprego</li>
                    <li><a href="#"></a>Livros</li>
                    <li><a href="#"></a>Oportunidades</li>
                    <li><a href="#"></a>Planejamento</li>
                    <li><a href="#"></a>Primeiro Emprego</li>
                </ul>
                <li><a href="#">Profissões</a></li>
                <li><a href="#">Salários</a></li>
                <li><a href="#">Mercado</a></li>
                <li><a href="#">Cursos e Eventos</a></li>
                <li class="ultimo"><a href="#">Testes</a></li>
            </ul>
        </nav>
    </header> -->
        <!-- JQUERY -->
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $(".btn-menu").click(function () {
            $(".menu-mobile").show();
        });
        $(".btn-close").click(function () {
            $(".menu-mobile").hide();
        });
    </script>