<?php 
//Template Name: Blog
?>

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
                <a href="/home/#sobre">Sobre nós</a>
                <a href="/home/#servicos">Serviços</a>
                <a href="/home/#portfolio">Portifólio</a>
                <a href="/home/#contato">Contato</a>
            </div>
            <div class="hamburguer mobile">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </nav>

    <div class="container-menu-mobile mobile">
            <a href="#sobre">Sobre nós</a>
            <a href="#servicos">Serviços</a>
            <a href="#portfolio">Portifólio</a>
            <a href="#contato">Contato</a>
    </div>

    <section id="blog-page">
        <h1 class="centered-title-bar">Blog</h1>
        
        
        
        <div class="blog-grid">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="article-card">
            <div class="img-container">
                <?php the_post_thumbnail('thumbnail', array('class' => 'imagemBlog')); ?>
            </div>
            <div class="text-container">
                <h2 class="title">
                    <?php the_title(); ?>
                </h2>
                <p class="description">
                    <?php the_excerpt(); // Mostra um resumo do post ?>
                </p>
                <button class="leia-mais">
                    <a href="<?php the_permalink(); ?>">Leia mais</a> 
                </button>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>
        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div id="footer-logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="">
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
                        <p>13 98176-6016</p>
                    </a>
                    <a href="">
                        <i data-feather="mail" class="icon-variant1"></i>
                        <p>higor.contel@gmail.com</p>
                    </a>
                </div>
            </div>
        </div>
        <div id="copy">
            <p>Desenvolvido por <a href="">Unect Jr.</a></p>
        </div>
    </footer>

    
    <script>
        feather.replace();
    </script>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/config.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/navbar.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/blog-page.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/footer.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/mobile.css"> 

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js" defer></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</body>
</html>