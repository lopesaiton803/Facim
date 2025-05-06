<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TechFood - Inovação em Gastronomia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css/style.css">
    <link rel="stylesheet" href="style.css/gallery.css">
      
</head>
<body>
    
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progress-bar"></div>
    </div>
    
    <!-- Barra superior -->
    <div class="top-bar">
        57ª EDIÇÃO, FEIRA DAS CRIANÇAS, DIA 14 DE JUNHO DE 2024, APARTIR 08:30, MARRACUENE, RICATLA, FIQUE LIGADO!
    </div>

    <?php include 'includes/navbar.php'; ?>



    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1000">
                <h1>Galeria</h1>
                <p>Descubra como a inovação tecnológica está transformando o mundo gastronômico e criando novas oportunidades para empreendedores</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-4">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="800">
                <!-- Adiciona filtros para a galeria -->
                <div class="gallery-filter text-center mb-4">
                    <button class="btn btn-outline-primary filter-btn active mx-1 my-1" data-filter="all">Todos</button>
                    <button class="btn btn-outline-primary filter-btn mx-1 my-1" data-filter="tech">Tecnologia</button>
                    <button class="btn btn-outline-primary filter-btn mx-1 my-1" data-filter="food">Gastronomia</button>
                    <button class="btn btn-outline-primary filter-btn mx-1 my-1" data-filter="business">Negócios</button>
                </div>
                
                <div class="row gallery-container">
                    <!-- Gallery Item 1 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="tech">
                        <img src="img/beers.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5 >Inovações Tecnológicas</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 2 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="food">
                        <img src="img/book.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Gastronomia Moderna</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 3 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="business">
                        <img src="img/book.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Empreendedorismo</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 4 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="tech food">
                        <img src="img/circulo.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Inovação Gastronômica</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 5 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="business tech">
                        <img src="img/politica.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Políticas de Inovação</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 6 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="food">
                        <img src="img/mascara.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Cultura Gastronômica</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 7 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="tech">
                        <img src="img/beers.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Bebidas Artesanais</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 8 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="business food">
                        <img src="img/feira4.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Eventos Gastronômicos</h5>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 9 -->
                    <div class="col-6 col-md-4 gallery-item" data-category="tech business">
                        <img src="img/baner3.jpg" alt="Tecnologia na Cozinha">
                        <div class="overlay">
                            <h5>Soluções Empresariais</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" id="modalImage" alt="Imagem ampliada">
                </div>
            </div>
        </div>
    </div>

    <div class="full-width-cta" style="background-color: rgb(255, 255, 255); color: #1d5269;">
        <section class="py-5">
            <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="mb-4">Pronto para fazer parte da <span class="revolution">revolução industrial?</span></h2>
                <p class="lead mx-auto" style="color: #1d5269;">Junte-se a nós e seja parte da transformação da economia nacional através da inovação e diversificação industrial.</p>
                <a href="contact.php" class="btn cta-btn mt-4 px-4 py-2">Inscreva-se na FACIM <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init();
        
        // Gallery Filter
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            // Inicializa a galeria com todos os itens ativos
            filterBtns[0].classList.add('active');
            
            // Add click event to filter buttons
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Get filter value
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Filter gallery items
                    galleryItems.forEach(item => {
                        const categories = item.getAttribute('data-category');
                        
                        if (filterValue === 'all' || categories.includes(filterValue)) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 100);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
            
            // Image Modal
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const imgSrc = this.querySelector('img').getAttribute('src');
                    const modalImg = document.getElementById('modalImage');
                    modalImg.setAttribute('src', imgSrc);
                    
                    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
                    modal.show();
                });
            });
            
            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Progress bar ao rolar
            window.addEventListener('scroll', function() {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                document.getElementById('progress-bar').style.width = scrolled + '%';
            });
            
            // Back to top button
            const backToTopButton = document.querySelector('.back-to-top');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Navbar Toggler Functionality
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarNav = document.querySelector('#navbarNav');
            
            if (navbarToggler && navbarNav) {
                navbarToggler.addEventListener('click', function() {
                    navbarNav.classList.toggle('show');
                });
                
                // Close navbar when clicking on a nav link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.addEventListener('click', () => {
                        navbarNav.classList.remove('show');
                    });
                });
            }
        });
    </script>
</body>
</html>