<?php get_header() 
//Template Name: Home
?>

        <section id="sobre">
            <h2><span></span>Dr. Higor Contel</h2>
            <div>
                <div id="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/./assets/capa.jpeg" alt="">
                </div>
                <div class="text-container">
                    <p class="sobreText">Higor Contel, nascido em Buritama-SP, é médico formado pela Universidade de Buenos Aires e revalidado no Brasil pela Universidade de Brasília. Especializou-se em saúde da família pela UNIFESP e em nutrologia pela USP. Além de atuar como professor universitário, Contel desenvolveu um método de gestão integral de saúde, que aborda elementos biológicos, sociais e psicológicos para melhorar a qualidade de vida e controlar doenças crônicas. Suas consultas são completas e individualizadas, focando no acolhimento do paciente e promovendo estratégias personalizadas para emagrecimento, hipertrofia muscular, adoecimento e envelhecimento saudável.</p>
                    
                </div>
            </div>
        </section>
        
        <section id="infos">
        
            <div>
                <p id="">+10K</p>
                <p>Vidas Transformadas</p>
            </div>
            <div>
            <p id="">+5 <span class="material-symbols-outlined" style="font-size: 30px; transform: translateX(-14px);}">star</span></p>
                <p>Satisfação dos clientes</p>
            </div>
            <div>
                <p id="">+2K</p>
                <p>Projetos de Saúde</p>
            </div>
        </section>

        <section id="servicos">
            <h2 class="centered-title-bar" id="esp">Especialidades</h2>
            <div class="card-container desktop">
                <div class="card">
                    <div class="card-front domot">
                        <span class="material-symbols-outlined">
                        Nutrition
                        </span>
                        <h3>Nutrologia</h3>
                    </div>
                    <div class="card-back" id="domot-back">
                        <h4>Nutrologia</h4>
                        <p>Atendimento do paciente com uma visão nutricional. Diagnóstico e tratamento qualquer tipo de enfermidade relacionada à alimentação e hábitos de vida. Como anemia, diabetes, câncer, obesidade, hipertensão, senilidade, além de transtornos como anorexia e bulimia. Os pacientes saem da consulta com um plano de ação contra todos os problemas, doenças ou comorbidades detectados em consulta visando uma melhor qualidade de vida.</p>
                        <a href="#contato"><button>Agende seu serviço</button></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-front agro">
                        <span class="material-symbols-outlined">
                        health_and_safety

                        </span>
                        <h3>Hipertrofia
                        </h3>
                    </div>
                    <div class="card-back" id="agro-back">
                        <h4>Hipertrofia</h4>
                        <p>Os atendimentos incluem avaliação física, prescrição de treinos individualizados, orientação nutricional, acompanhamento de evolução e ajustes periódicos no plano de treino e dieta. Além disso, todo o suporte medicamentoso e de suplementação com o que há de mais novo para hipertrofia muscular. Todos esses atendimentos são realizados por profissionais qualificados e experientes na área de hipertrofia muscular, garantindo segurança e efetividade no processo de ganho de massa muscular.

    </p>
                    <a href="#contato"><button>Agende seu serviço</button></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-front imp">
                        <span class="material-symbols-outlined">
                        Psychiatry
                        </span>
                        <h3>Longevidade</h3>
                    </div>
                    <div class="card-back" id="imp-back">
                        <h4>Longevidade</h4>
                        <p>Atendemos nossos pacientes com foco na longevidade, priorizando a prevenção e o tratamento de doenças crônicas que afetam a qualidade de vida. Trabalhamos em parceria para criar planos de cuidados personalizados, incluindo avaliação de saúde, hábitos saudáveis, exames de rotina e acompanhamento contínuo. Nosso objetivo é promover o bem-estar e garantir uma vida longa e saudável para nossos pacientes.</p>
            <a href="#contato"><button>Agende seu serviço</button></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-front adeq">
                        <span class="material-symbols-outlined">
                        ecg_heart
                        </span>
                        <h3>Medicina integrativa</h3>
                    </div>
                    <div class="card-back" id="adeq-back">
                        <h4>Medicina integrativa</h4>
                        <p>Adotamos a medicina integrativa, combinando tratamentos convencionais e terapias complementares para cuidar dos pacientes de forma holística. Foco na prevenção e no bem-estar geral, utilizando práticas como acupuntura, meditação e fitoterapia, promovendo o equilíbrio entre corpo e mente para uma melhor qualidade de vida.</p>
                        <a href="#contato"><button>Agende seu serviço</button></a>
                    </div>
                </div>
            </div>

            <div class="mobile carrossel-mobile-container">
                <div class="carrossel-mobile-content">
                    <div class="carrossel-mobile-card-servicos adeq">
                        <div class="front-card">
                            <span class="material-symbols-outlined">
                            Nutrition
                            </span>
                            <h3>
                            Nutrologia
                            </h3>
                            <button id="buttonCard" class="btnCarrosselServ">Leia mais</button>
                        </div>
                        <div class="back-card-serv">
                            <p>Atendimento do paciente com uma visão nutricional. Diagnóstico e tratamento qualquer tipo de enfermidade relacionada à alimentação e hábitos de vida. Como anemia, diabetes, câncer, obesidade, hipertensão, senilidade, além de transtornos como anorexia e bulimia. Os pacientes saem da consulta com um plano de ação contra todos os problemas, doenças ou comorbidades detectados em consulta visando uma melhor qualidade de vida.</p>
                        </div>
                    </div>

                    <div class="carrossel-mobile-card-servicos agro">
                        <div class="front-card">
                            <span class="material-symbols-outlined">
                            health_and_safety
                            </span>
                            <h3>
                            Hipertrofia
                            </h3>
                            <button id="buttonCard" class="btnCarrosselServ">Leia mais</button>
                        </div>
                        <div class="back-card-serv">
                            <p>Os atendimentos incluem avaliação física, prescrição de treinos individualizados, orientação nutricional, acompanhamento de evolução e ajustes periódicos no plano de treino e dieta. Além disso, todo o suporte medicamentoso e de suplementação com o que há de mais novo para hipertrofia muscular. Todos esses atendimentos são realizados por profissionais qualificados e experientes na área de hipertrofia muscular, garantindo segurança e efetividade no processo de ganho de massa muscular.</p>
                        </div>
                    </div>

                    <div class="carrossel-mobile-card-servicos imp">
                        <div class="front-card">
                            <span class="material-symbols-outlined">
                            Psychiatry
                            </span>
                            <h3>
                            Longevidade
                            </h3>
                            <button id="buttonCard" class="btnCarrosselServ">Leia mais</button>
                        </div>
                        <div class="back-card-serv">
                            <p>Atendemos nossos pacientes com foco na longevidade, priorizando a prevenção e o tratamento de doenças crônicas que afetam a qualidade de vida. Trabalhamos em parceria para criar planos de cuidados personalizados, incluindo avaliação de saúde, hábitos saudáveis, exames de rotina e acompanhamento contínuo. Nosso objetivo é promover o bem-estar e garantir uma vida longa e saudável para nossos pacientes. </p>
                        </div>
                    </div>

                    <div class="carrossel-mobile-card-servicos adeq">
                        <div class="front-card">
                            <span class="material-symbols-outlined">
                            ecg_heart
                            </span>
                            <h3>
                            Medicina integrativa
                            </h3>
                            <button id="buttonCard" class="btnCarrosselServ">Leia mais</button>
                        </div>
                        <div class="back-card-serv">
                            <p>Adotamos a medicina integrativa, combinando tratamentos convencionais e terapias complementares para cuidar dos pacientes de forma holística. Foco na prevenção e no bem-estar geral, utilizando práticas como acupuntura, meditação e fitoterapia, promovendo o equilíbrio entre corpo e mente para uma melhor qualidade de vida.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/black"><button>Agende seu serviç<span>o!</span></button></a>
        </section>

        <section id="portfolio" class="portfolio-section">
        <div class="portfolio-content">
            <div class="text-content">
            <div class="image-content">
            </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="" class="blog-img">
                <h1 class="BLK">BLACK FRIDAY</h1>
                <h2>DR. HIGOR CONTEL</h2>
                <p>Garanta seu acompanhamento nutrologico de 2025 por um valor imperdível e transforme a sua saude</p>
                <a href="/black"><button class="cta-button">Quero garantir agora</button></a>
                
            </div>
        </div>
    </section>

    <section id="blog">
    <h2 class="centered-title-bar">Blog</h2>
    <div class="container-blog desktop">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="card-blog">
                <div class="img-blog">
                    <div class="nicho-blog"></div>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="bottom-blog">
                    <h3 class="blog-title"><?php the_title(); ?></h3>
                </div>
            </div>
        <?php endwhile; ?>
        </div>

        <div class="mobile carrossel-mobile-container">
            <div class="carrossel-mobile-content">
                <?php
                // Reiniciar o loop para garantir que a consulta possa ser usada novamente
                $the_query->rewind_posts();
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="card-mobile-blog">
                        <div class="img-blog">
                            <div class="nicho-blog">
                                <?php the_post_thumbnail(); ?>
                                <p>Nicho da Matéria</p>
                            </div>
                        </div>
                        <div class="bottom-blog">
                            <h3 class="blog-title"><?php the_title(); ?></h3>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
        <a href="/blog"><button>Leia mais</button></a>
</section>


        <section id="contato">
        
        <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d227.86635219479825!2d-46.31159644225706!3d-23.965332459450487!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03acee48a031%3A0x850bb6402da66744!2sCl%C3%ADnica%20de%20Medicina%20Artut!5e0!3m2!1spt-BR!2sbr!4v1732197215390!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="form">
                <h2>Entre em contato conosco!</h2>
                <form action="https://formspree.io/f/"method="POST">
                    <label for="name">*Nome</label>
                    <input type="text" id="name" name="name" required>
                    <div class="line-form">
                        <div class="form-container">
                            <label for="email">*E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-container">
                            <label for="tel">*Telefone</label>
                            <input type="number" id="tel" name="tel" required>
                        </div>
                    </div>
                    <label for="mensagem">*Mensagem</label>
                    <textarea name="mensagem" id="mensagem" rows="10"></textarea required>

                    <button type="submit" class="btnContato">Enviar <span class="material-symbols-outlined">
                        send
                    </span></button>
                </form>
            </div>
            <div class="side-social">
                <a href="https://www.instagram.com/drhigorcontel/"target="_blank">
                    <i data-feather="instagram" class="icon-variant1"></i>
                </a>
                <a href="https://www.facebook.com/higorcontel/"target="_blank">
                    <i data-feather="facebook" class="icon-variant1"></i>
                </a>
                <a href="https://br.linkedin.com/in/higor-renan-gomes-contel-51b619230"target="_blank">
                    <i data-feather="linkedin" class="icon-variant1"></i>
                </a>
            </div>
        </section>

        <section id="Compra">
            <div class="card-compra">

            </div>
        </section>

        

        <?php get_footer() ?>


        <script>
            feather.replace();
        </script>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/config.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/navbar.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/header.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/sobre.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/infos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/servicos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/portfolio.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/contatos.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/blog.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/footer.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/mobile.css"> 

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/homeAnimation.js"defer></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</body>
</html>