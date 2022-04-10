<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@300;700&family=Titillium+Web:wght@300&display=swap">

    <!-- JQUERY -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="<?= get_bloginfo('template_url') ?>/assets/js/actions.js"></script>


    <title><?= get_option('blogname') ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <!-- CABEÇALHO-->
    <header class="cabecalho bg-orange">
        <!-- Mobile -->
        <div id="mob-header">
            <button class="btn sandwich-menu">
                <i class="fa fa-light fa-bars fa-sm"></i>
            </button>

            <h1 class="logo">
                <a title="<?= get_option('blogname') ?>" href="<?= get_bloginfo('home') ?>">
                    <img src="<?= get_bloginfo('template_url') ?>/assets/img/Icon.png" />
                </a>
            </h1>

            <div id="mob-nav">
                <div class="subtitle main">
                    <button class="btn btn-close">
                        <i class="fa fa-light fa-xmark fa-sm"></i>
                    </button>

                    <h1>Carreiras</h1>
                </div>

                <div class="container">
                    <form action="javascript:void(0)">
                        <input type="text" class="search" placeholder="Busque no carreiras">
                        <button class="search">Pesquisar</button>
                    </form>

                    <nav>
                        <ul>
                            <li><a href="#">Notícias</a></li>

                            <li>
                                <a class="job" href="#">Seu Emprego
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>

                                <ul class="job-sub">
                                    <li><a href="#">CLT</a></li>
                                    <li><a href="#">Comportamento</a></li>
                                    <li><a href="#">Emprego</a></li>
                                    <li><a href="#">Livros</a></li>
                                    <li><a href="#">Oportunidades</a></li>
                                    <li><a href="#">Planejamento</a></li>
                                    <li class="last"><a href="#">Primeiro Emprego</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Profissões</a></li>
                            <li><a href="#">Salários</a></li>
                            <li><a href="#">Mercado</a></li>
                            <li><a href="#">Cursos e Eventos</a></li>
                            <li class="last"><a href="#">Testes</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div><!-- #desk-header -->

        <!-- Desktop -->
        <div id="desk-header" class="desk">
            <div class="carreiras container-fluid">
                <nav class="first">
                    <ul>
                        <li><a href="#">Vagas</a></li>
                        <li><a href="#">Empresas</a></li>
                        <li><a href="#">Currículos</a></li>
                        <li><a href="#">Carreiras</a></li>
                    </ul>
                </nav>

                <h1 class="logo">
                    <a title="<?= get_option('blogname') ?>" href="<?= get_bloginfo('home') ?>">
                        <img src="<?= get_bloginfo('template_url') ?>/assets/img/empregos-logo.png" />
                    </a>
                </h1>

                <nav class="secund">
                    <ul>
                        <li><a href="#">Cadastre-se</a></li>
                        <li class="last"><a href="#">Entrar</a></li>
                    </ul>
                </nav>
            </div><!-- .carreiras -->

            <!-- Nav Blog - Desktop -->
            <nav class="blog">
                <ul class="container-fluid">
                    <li class="first"><a href="#">Carreiras</a></li>

                    <li><a href="#">Notícias</a></li>

                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">
                            Seu Emprego <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>

                        <ul class="dropdown-content">
                            <li><a href="#">CLT</a></li>
                            <li><a href="#">Comportamento</a></li>
                            <li><a href="#">Emprego</a></li>
                            <li><a href="#">Livros</a></li>
                            <li><a href="#">Oportunidades</a></li>
                            <li><a href="#">Planejamento</a></li>
                            <li><a href="#">Primeiro Emprego</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Profissões</a></li>
                    <li><a href="#">Salários</a></li>
                    <li><a href="#">Mercado</a></li>
                    <li><a href="#">Cursos e Eventos</a></li>
                    <li><a href="#">Testes</a></li>
                    <li class="last-search"><a href="#"><i class="fa fa-search button-away" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div> <!-- #desk-header -->

    </header>