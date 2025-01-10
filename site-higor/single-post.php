
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Higor Contel</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <nav>
        <div class="container">
            <div id="container-logo">
                <a href="/home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt=""></a>
            </div>
            <div class="container-menu desktop">
                <a href="#sobre">Sobre nós</a>
                <a href="#servicos">Serviços</a>
                <a href="#portfolio">Portifólio</a>
                <a href="/blog">Blog</a>
                <a href="#contato">Contato</a>
            </div>
            <div class="hamburguer mobile">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </nav>

    <div class="container-menu-mobile mobile">
        <a href="">Sobre nós</a>
            <a href="">Serviços</a>
            <a href="">Portifólio</a>
            <a href="/blog">Blog</a>
            <a href="">Contato</a>
    </div>
    

    <section id="template">
    <?php if(have_posts()) : the_post() ?>
        <div class="title-header template-column">
            <h1 class="title"><?php the_title() ?></h1>
        </div>
        
        <div class="img-container template-column">
        </div>

        <div class="article-content template-column">
            <p>
            <?php the_content() ?>
            </p>
        </div>

        <div class="datalist template-column">
            <p><?php the_title() ?></p>
            <p><?php echo get_the_date() ?></p>
            
        </div>

        <?php endif;?>

    </section>

    <footer>
        <div class="container-footer">
            <div id="footer-logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="Logo">
            </div>
            <div class="content-footer">
                <h2>Redes Sociais</h2>
                <div>
                    <a href="">
                        <i data-feather="instagram" class="icon-variant1"></i>
                        <p>@drhigorcontel</p>
                    </a>
                    <a href="">
                        <i data-feather="facebook" class="icon-variant1"></i>
                        <p>higorcontel</p>
                    </a>
                    <a href="">
                        <i data-feather="linkedin" class="icon-variant1"></i>
                        <p>Higor Renan Gomes Contel</p>
                    </a>
                </div>
            </div>
            <div class="content-footer">
                <h2>Localização</h2>
                <a href="" id="map">
                    <i data-feather="map-pin" class="icon-variant1"></i>
                    <p>Av. Conselheiro Nébias, 703 - Cj. 2102 - Boqueirão, Santos</p>
                </a>
            </div>
            <div class="content-footer">
                <h2>
                    Contato
                </h2>
                <div>
                    <a href="">
                        <i data-feather="phone" class="icon-variant1"></i>
                        <p>+13 98176-6016</p>
                    </a>
                    <a href="">
                        <i data-feather="mail" class="icon-variant1"></i>
                        <p>higor.contel@gmail.com</p>
                    </a>
                </div>
            </div>
        </div>
        <div id="copy">
            <p>Desenvolvido por Vitor Melin</p>
        </div>
    </footer>

    
    <script>
        feather.replace();
    </script>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/config.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/navbar.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/footer.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/template.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/mobile.css"> 

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js" defer></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</body>
</html>