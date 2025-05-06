
<?php


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACIM - Feira Internacional de Maputo</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css/style.css">
</head>
<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="preloader-content">
            <img src="img/logo 1.png" alt="FACIM Logo" class="preloader-logo">
            <div class="loading-text">Carregando...</div>
            <div class="percentage" id="loading-percentage">0%</div>
        </div>
    </div> 
     -->
    
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progress-bar"></div>
    </div>

 
    
    <!-- Barra superior -->
    <div class="top-bar">
        57ª EDIÇÃO, FEIRA DAS CRIANÇAS, DIA 14 DE JUNHO DE 2024, APARTIR 08:30, MARRACUENE, RICATLA, FIQUE LIGADO!
    </div>

 
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Slider com countdown -->
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="hero-slide active">
            <div class="ken-burns-bg" style="background-image: url('img/BANNER.jpg');"></div>
            <div class="hero-content">
                <div class="slide-content-wrapper">
                    <h1 class="slide-title">60ª EDIÇÃO</h1>
                    <h2 class="slide-subtitle">
                        Industrialização: Inovação e Diversificação <br> da Economia Nacional
                    </h2>
                    
                    <div class="location-info">
                        <span>FEIRA INTERNACIONAL DE MAPUTO 2025</span>
                        <span class="location-divider d-none d-md-inline-block"></span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            Marracuene, Maputo - Moçambique
                        </span>
                    </div>
                    
                    <div class="countdown-container">
                        <div class="countdown-box" style="--delay: 1">
                            <div id="days1" class="countdown-item primary">00</div>
                            <div class="countdown-label">DIAS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 2">
                            <div id="hours1" class="countdown-item">00</div>
                            <div class="countdown-label">HORAS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 3">
                            <div id="minutes1" class="countdown-item primary">00</div>
                            <div class="countdown-label">MINUTOS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 4">
                            <div id="seconds1" class="countdown-item">00</div>
                            <div class="countdown-label">SEGUNDOS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <div class="ken-burns-bg" style="background-image: url('img/love-concept-with-happy-couple-spending-time-together.jpg');"></div>
            <div class="hero-content">
                <div class="slide-content-wrapper">
                    <h1 class="slide-title">60ª EDIÇÃO</h1>
                    <h2 class="slide-subtitle">
                        Industrialização: Inovação e Diversificação da Economia Nacional
                    </h2>
                    
                    <div class="location-info">
                        <span>FEIRA INTERNACIONAL DE MAPUTO 2025</span>
                        <span class="location-divider d-none d-md-inline-block"></span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            Marracuene, Maputo - Moçambique
                        </span>
                    </div>
                    
                    <div class="countdown-container">
                        <div class="countdown-box" style="--delay: 1">
                            <div id="days2" class="countdown-item primary">00</div>
                            <div class="countdown-label">DIAS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 2">
                            <div id="hours2" class="countdown-item">00</div>
                            <div class="countdown-label">HORAS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 3">
                            <div id="minutes2" class="countdown-item primary">00</div>
                            <div class="countdown-label">MINUTOS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 4">
                            <div id="seconds2" class="countdown-item">00</div>
                            <div class="countdown-label">SEGUNDOS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide">
            <div class="ken-burns-bg" style="background-image: url('img/baner3.jpg');"></div>
            <div class="hero-content">
                <div class="slide-content-wrapper">
                    <h1 class="slide-title">60ª EDIÇÃO</h1>
                    <h2 class="slide-subtitle">
                        Industrialização: Inovação e Diversificação da Economia Nacional
                    </h2>
                    
                    <div class="location-info">
                        <span>FEIRA INTERNACIONAL DE MAPUTO 2025</span>
                        <span class="location-divider d-none d-md-inline-block"></span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            Marracuene, Maputo - Moçambique
                        </span>
                    </div>
                    
                    <div class="countdown-container">
                        <div class="countdown-box" style="--delay: 1">
                            <div id="days3" class="countdown-item primary">00</div>
                            <div class="countdown-label">DIAS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 2">
                            <div id="hours3" class="countdown-item">00</div>
                            <div class="countdown-label">HORAS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 3">
                            <div id="minutes3" class="countdown-item primary">00</div>
                            <div class="countdown-label">MINUTOS</div>
                        </div>
                        
                        <div class="countdown-separator">:</div>
                        
                        <div class="countdown-box" style="--delay: 4">
                            <div id="seconds3" class="countdown-item">00</div>
                            <div class="countdown-label">SEGUNDOS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Navigation -->
        <div class="slider-nav">
            <div class="slider-btn slider-prev">&lt;</div>
            <div class="slider-btn slider-next">&gt;</div>
        </div>

        <!-- Slider Indicators -->
        <div class="slider-controls">
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
        </div>
    </div>

    <!-- Seção Sobre FACIM -->
    <section class="sobre-facim-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 position-relative mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card-container">
                        <div class="card-left"></div>
                        <div class="card-right"></div>
                        <div class="card-main">
                            <div class="content">
                               <img src="img/logo 1.png" alt="" width="200px">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row mb-4">
                        <div class="col-12 d-flex align-items-center">
                            <div class="orange-bar"></div>
                            <div>
                                <h2 class="section-title">SOBRE NÓS</h2>
                                <p class="about-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odit, <br> voluptatum et optio rem illo maxime quod ab tenetur, sint animi, adipisci <br> eligendi. Numquam veniam amet tenetur ipsa ea odit error nihil harum nesciunt vitae enim consequuntur perferendis sint expedita, officia corporis.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3" data-scroll>
                            <div class="stat-card">
                                <div class="stat-number" data-count="5400">
                                    <span class="plus-sign">+</span><span class="counter">0</span>
                                </div>
                                <div class="stat-label">PARTICIPANTES</div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3" data-scroll>
                            <div class="stat-card">
                                <div class="stat-number" data-count="120">
                                    <span class="plus-sign">+</span><span class="counter">0</span>
                                </div>
                                <div class="stat-label">EXPOSITORES</div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3" data-scroll>
                            <div class="stat-card">
                                <div class="stat-number" data-count="30">
                                    <span class="plus-sign">+</span><span class="counter">0</span>
                                </div>
                                <div class="stat-label">PAÍSES</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Sobre a FACIM -->
    <section class="facim-about-section py-5" style="background-color: #f8f9fa; position: relative; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('img/pattern.png') repeat; opacity: 0.03; z-index: 0;"></div>
        <div class="position-absolute bottom-0 end-0" style="width: 300px; height: 300px; background: radial-gradient(circle, var(--primary-color) 0%, transparent 70%); opacity: 0.1; z-index: 0;"></div>
        
        <div class="container position-relative" style="z-index: 1;">
            <div class="row align-items-stretch gx-5 gy-4">
                <div class="col-lg-6 mb-lg-0" data-aos="fade-right">
                    <div class="facim-image-container position-relative">
                        <div id="facimCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/60.png" alt="FACIM Imagem 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/book.jpg" alt="FACIM Imagem 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feira3.jpg" alt="FACIM Imagem 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/groove.jpg" alt="FACIM Imagem 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feira6.jpg" alt="FACIM Imagem 5">
                                </div>
                            </div>
                        </div>
                        
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <div class="carousel-description">
                                <div class="desc-item active" data-slide="0">
                                    <h5 class="mb-0">FACIM - Feira Internacional de Maputo</h5>
                                    <small>Edição 2024</small>
                                </div>
                                <div class="desc-item" data-slide="1">
                                    <h5 class="mb-0">Pavilhões Internacionais</h5>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                                </div>
                                <div class="desc-item" data-slide="2">
                                    <h5 class="mb-0">Exposição Industrial</h5>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                                </div>
                                <div class="desc-item" data-slide="3">
                                    <h5 class="mb-0">Networking Empresarial</h5>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                                </div>
                                <div class="desc-item" data-slide="4">
                                    <h5 class="mb-0">Economia e Desenvolvimento</h5>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="d-flex align-items-center mb-4">
                        <div>
                            <h2 class="section-title mb-0" style="color: var(--secondary-color);">A FEIRA INTERNACIONAL DE MAPUTO</h2>
                        </div>
                    </div>
                    
                    <div class="facim-description" style="position: relative;">
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                            A FACIM é uma feira comercial, com carácter anual e multissectorial, que congrega num único espaço, todos os sectores económicos à escala nacional e internacional.
                        </p>
                        
                        <div class="p-4 my-4" style="background-color: rgba(244, 120, 52, 0.1); border-left: 4px solid var(--primary-color); border-radius: 0 8px 8px 0;">
                            <p class="mb-0" style="font-weight: 500; color: var(--secondary-color);">
                                <i class="fas fa-calendar-alt me-2" style="color: var(--primary-color);"></i>
                                Anualmente realizada entre finais de Agosto e início de Setembro, conforme calendário da União Internacional de Feiras (UFI).
                            </p>
                        </div>
            
                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="me-3" style="color: var(--primary-color); font-size: 1.5rem;">
                                        <i class="fas fa-globe-africa"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: var(--secondary-color); font-size: 1.1rem;">Escala Internacional</h5>
                                        <p class="mb-0" style="font-size: 0.9rem; color: #666;">Participação de diversos países e culturas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="me-3" style="color: var(--primary-color); font-size: 1.5rem;">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: var(--secondary-color); font-size: 1.1rem;">Multissectorial</h5>
                                        <p class="mb-0" style="font-size: 0.9rem; color: #666;">Todos os sectores económicos representados</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="me-3" style="color: var(--primary-color); font-size: 1.5rem;">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: var(--secondary-color); font-size: 1.1rem;">Networking</h5>
                                        <p class="mb-0" style="font-size: 0.9rem; color: #666;">Oportunidades de negócios e parcerias</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="me-3" style="color: var(--primary-color); font-size: 1.5rem;">
                                        <i class="fas fa-certificate"></i>
                                    </div>
                                    <div>
                                        <h5 style="color: var(--secondary-color); font-size: 1.1rem;">Certificação UFI</h5>
                                        <p class="mb-0" style="font-size: 0.9rem; color: #666;">Membro desde 1969</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Objetivos Gerais -->
    <section class="objetivos-section" style="background-color: rgb(37, 36, 36);">
        <div class="container">
            <h2 class="section-title" style="color: var(--primary-color); font-size: 32px; text-align: center;"> Objetivos Gerais</h2>
            <p class="section-subtitle">Expor as potencialidades do país de produção para exportação e promover oportunidades de negócios e de investimento nos diversos segmentos do tecido empresarial nacional e estrangeiro, fortalecendo a posição de Moçambique no cenário econômico internacional.</p><br><br>
            
            <div class="row">
                <div class="col-md-4 col-sm-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="objective-item">
                        <svg class="objective-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                        <h3 class="objective-title">Internacionalizar a economia nacional</h3>
                        <p class="objective-description">Expandir a presença econômica de Moçambique no panorama internacional através de estratégias focadas em comércio exterior.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="objective-item">
                        <svg class="objective-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                        <h3 class="objective-title">Promover integração de mercado</h3>
                        <p class="objective-description">Promover iniciativas que visam garantir a integração de Moçambique no mercado regional e na Zona de Comércio Livre Continental Africana.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="objective-item">
                        <svg class="objective-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="20" x2="12" y2="10"></line>
                            <line x1="18" y1="20" x2="18" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="16"></line>
                        </svg>
                        <h3 class="objective-title">Expor potencialidades de produção</h3>
                        <p class="objective-description">Expor as potencialidades de produção para exportação, destacando os setores com maior capacidade competitiva.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6" data-aos="fade-right" data-aos-delay="400">
                    <div class="objective-item">
                        <svg class="objective-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z"></path>
                        </svg>
                        <h3 class="objective-title">Estabelecer parcerias estratégicas</h3>
                        <p class="objective-description">Promover o estabelecimento de parcerias entre empresas nacionais e entre estas com empresas estrangeiras.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="objective-item">
                        <svg class="objective-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="1 4 1 10 7 10"></polyline>
                            <polyline points="23 20 23 14 17 14"></polyline>
                            <path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>
                        </svg>
                        <h3 class="objective-title">Estimular investimentos</h3>
                        <p class="objective-description">Estimular novas iniciativas de investimento público e privado em setores estratégicos para o desenvolvimento do país.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="600">
                    <div class="objective-item">
                        <svg class="objective-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                        <h3 class="objective-title">Promover oportunidades de negócios</h3>
                        <p class="objective-description">Promover oportunidades de negócios nos diversos segmentos do tecido empresarial nacional e estrangeiro.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 mx-auto" data-aos="fade-up" data-aos-delay="700">
                    <div class="objective-item">
                        <svg class="objective-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                        <h3 class="objective-title">Divulgar iniciativas inovadoras</h3>
                        <p class="objective-description">Criar oportunidades para a divulgação de iniciativas inovadoras nos diversos setores econômicos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials/Timeline -->
    <section class="container my-5 py-5">
        <div class="text-center mb-5">
            <h2 style="color: var(--secondary-color); font-weight: 700;">Razoes e motivos <span style="color: var(--primary-color);">para fazer parte da feira</span></h2>
            <p class="lead">Veja como a FACIM contribui para o crescimento da sua empresa</p>
        </div>
        
        <div class="row">
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                <div class="vertical-timeline">
                    <div class="timeline-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="timeline-icon">1</div>
                        <h4 style="color: var(--secondary-color);">Participação</h4>
                        <p>Inscreva sua empresa e reserve seu espaço na feira mais importante do setor industrial.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="timeline-icon">2</div>
                        <h4 style="color: var(--secondary-color);">Conexões</h4>
                        <p>Estabeleça contatos com investidores e parceiros estratégicos durante o evento.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="timeline-icon">3</div>
                        <h4 style="color: var(--secondary-color);">Crescimento</h4>
                        <p>Transforme oportunidades em negócios concretos e expanda sua presença no mercado.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="timeline-icon">4</div>
                        <h4 style="color: var(--secondary-color);">Impacto</h4>
                        <p>Contribua para a diversificação econômica nacional e para um futuro industrial sustentável.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-1 d-none d-lg-block"></div>
            
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" style="padding-top: 50px;">
                <div class="position-relative d-flex justify-content-center">
                    <img src="img/feira 1.jpg" alt="FACIM Impacto" class="img-fluid rounded-lg shadow-lg">
                    <div class="position-absolute" style="bottom: 30px; left: 30px; right: 30px; background: rgba(29, 82, 105, 0.9); padding: 20px; border-radius: 10px;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <h4 class="text-white mb-3 text-center">Depoimento</h4>
                        <p class="text-white mb-0">"Participar da FACIM foi um divisor de águas para nossa empresa. Conseguimos novos parceiros e abrimos mercados que antes pareciam inalcançáveis."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Full Width -->
    <div class="full-width-cta" style="background-color: rgb(37, 36, 36);">
        <section class="py-5">
            <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="mb-4">Pronto para fazer parte da <span class="revolution">revolução industrial ?</span></h2>
                <p class="lead mx-auto">Junte-se a nós e seja parte da transformação da economia nacional através da inovação e diversificação industrial.</p>
                <a href="contact.php" class="btn cta-btn mt-4 px-5 py-3">Inscreva-se na FACIM <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </section>
    </div>

    <!-- Edições Passadas Section -->
    <div class="container py-5 edicoes-section">
        <div class="section-header">
            <h2>Edicoes Passadas</h2>
        </div>
        <section class="past-editions-section">
        <div class="filter-container">
            <div class="filter-nav">
                <button class="filter-btn active" data-filter="upcoming">Edicao 2023</button>
                <button class="filter-btn" data-filter="ongoing">Edicao 2024</button>
                <button class="filter-btn" data-filter="expired">Edicao 2025</button>
            </div>
        </div>
        
        <div class="event-category active" id="upcoming-events">
            <div class="row events-container">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card h-100 " >
                        <div class="overflow-hidden">
                            <img src="img/mascara.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/class.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/politica.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="event-category" id="ongoing-events">
            <div class="row events-container">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/book.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/circulo.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/tinta.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="event-category" id="expired-events">
            <div class="row events-container">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/natal.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/beers.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="overflow-hidden">
                            <img src="img/groove.jpg" class="card-img-top" alt="FACIM">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-date"><i class="bi bi-calendar"></i> 10/04/2024</span>
                                <span class="facim-badge">FACIM</span>
                            </div>
                            <h5 class="card-title">54ª EDIÇÃO DA FEIRA INTERNACIONAL(FACIM)</h5>
                            <p class="card-text">O CEDSIF participou entre 26 de Agosto a 01 de Setembro de 2016, no Centro ...</p>
                            <a href="#" class="ver-mais-btn">Ver Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Partners Section -->
    <section class="parceiros">
        <div class="container">
            <h2>PARCEIROS</h2>
            
            <div class="partners-slider">
                <div class="partners-track">
                    <div class="partner-logo">
                        <img src="img/apiex-en.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/mechanical.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/logo 1.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/apiex-en.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/apiex-en.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/mechanical.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/apiex-en.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/apiex-en.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/apiex-en.png" alt="Logo Partner" class="img-fluid">
                    </div>
                    <div class="partner-logo">
                        <img src="img/mechanical.png" alt="Logo Partner" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-col">
                        <h5 class="footer-title">PATROCINADO POR:</h5>
                        <div >
                            <img src="img/apiex-en.png" alt="APIEX Moçambique" class="logo-apiex   bg-light">
                        </div>
                        <div class="social-icons">
                            <a href="#" style="background-color: #3b5998;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" style="background-color: #1da1f2;"><i class="fab fa-twitter"></i></a>
                            <a href="#" style="background-color: #4285f4;"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" style="background-color: #25d366;"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" style=" background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-md-3 footer-col">
                        <h5 class="footer-title">LINKS UTEIS</h5>
                        <div class="footer-links">
                            <a href="#">Início</a>
                            <a href="#">Facim</a>
                            <a href="#">Galeria</a>
                            <a href="#">Contacto</a>
                        </div>
                    </div>
                    
                    <div class="col-md-5 footer-col">
                        <h5 class="footer-title">CONTACTE-NOS</h5>
                        <div class="footer-contact">
                            <p><i class="fas fa-map-marker-alt"></i> Av. Ahmed Sekou Toure nr. 1452, Maputo</p>
                            <p><i class="fas fa-envelope"></i> mechanical@gmail.com</p>
                            <p><i class="fas fa-phone"></i> +258 85 243 6575</p>
                            <p><i class="far fa-clock"></i> Seg - Sexta: 08:00 - 17:00</p>
                        </div>
                    </div>
                </div>
                
                <div class="footer-divider"></div>
                
                <div class="footer-bottom">
                    <p>© 2024 - FACIM. Todos Direitos Reservados. Desenvolvido do jeito Certo pela <a href="https://mechanical.co.mz/">Mechanical Tecnologia</a>.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script>
        // Inicializar AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

    
        
        // Barra de progresso de rolagem
        window.onscroll = function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            progressBar.style.width = scrolled + "%";
            
            // Navbar scroll effect
            if (winScroll > 80) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
            
            // Back to top button
            if (winScroll > 300) {
                document.querySelector('.back-to-top').classList.add('active');
            } else {
                document.querySelector('.back-to-top').classList.remove('active');
            }
        };
        
        // Back to top button click
        document.querySelector('.back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Ken Burns Hero Slider
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            const indicators = document.querySelectorAll('.indicator');
            const prevBtn = document.querySelector('.slider-prev');
            const nextBtn = document.querySelector('.slider-next');
            let currentSlide = 0;
            let slideInterval;
            let isAnimating = false;

            function resetKenBurnsAnimation(slide) {
                const kenBurnsBg = slide.querySelector('.ken-burns-bg');
                kenBurnsBg.style.animation = 'none';
                void kenBurnsBg.offsetWidth;
                kenBurnsBg.style.animation = '';
            }

            function showSlide(index) {
                if (isAnimating) return;
                isAnimating = true;
                
                slides[currentSlide].classList.remove('active');
                slides[index].classList.add('active');
                resetKenBurnsAnimation(slides[index]);
                
                indicators.forEach(ind => ind.classList.remove('active'));
                indicators[index].classList.add('active');
                
                currentSlide = index;
                
                setTimeout(() => {
                    isAnimating = false;
                }, 1500);
            }

            function nextSlide() {
                stopSlider();
                const nextIndex = (currentSlide + 1) % slides.length;
                showSlide(nextIndex);
                startSlider();
            }

            function prevSlide() {
                stopSlider();
                const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(prevIndex);
                startSlider();
            }

            function startSlider() {
                stopSlider();
                slideInterval = setInterval(nextSlide, 7000);
            }

            function stopSlider() {
                clearInterval(slideInterval);
            }

            // Event Listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            indicators.forEach(indicator => {
                indicator.addEventListener('click', function() {
                    const slideIndex = parseInt(this.getAttribute('data-slide'));
                    if (slideIndex !== currentSlide) {
                        stopSlider();
                        showSlide(slideIndex);
                        startSlider();
                    }
                });
            });

            // Pausa no hover
            const slider = document.querySelector('.hero-slider');
            slider.addEventListener('mouseenter', stopSlider);
            slider.addEventListener('mouseleave', startSlider);

            // Inicializa o slider
            resetKenBurnsAnimation(slides[0]);
            startSlider();
            
            // Countdown para todos os slides
            const eventDate = new Date(2025, 4, 14, 8, 30, 0); // 14 de maio de 2025, 8:30
            
            function updateCountdown() {
                const now = new Date();
                const diff = eventDate - now;
                
                if (diff <= 0) {
                    document.querySelectorAll('[id^="days"], [id^="hours"], [id^="minutes"], [id^="seconds"]').forEach(el => {
                        el.textContent = "00";
                    });
                    return;
                }
                
                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);
                
                for (let i = 1; i <= 3; i++) {
                    document.getElementById(`days${i}`).textContent = days.toString().padStart(2, '0');
                    document.getElementById(`hours${i}`).textContent = hours.toString().padStart(2, '0');
                    document.getElementById(`minutes${i}`).textContent = minutes.toString().padStart(2, '0');
                    document.getElementById(`seconds${i}`).textContent = seconds.toString().padStart(2, '0');
                }
            }
            
            updateCountdown();
            setInterval(updateCountdown, 1000);
        });

        
    
     



        // Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize filters for past editions
    initializeFilters();
    
    // Set up counter animation with Intersection Observer
    setupCounterAnimation();
});

/**
 * Initialize filter buttons for past editions section
 */
function initializeFilters() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    // Set first button as active by default if none is active
    if (!document.querySelector('.filter-btn.active') && filterBtns.length > 0) {
        filterBtns[0].classList.add('active');
        const defaultFilter = filterBtns[0].dataset.filter;
        document.getElementById(`${defaultFilter}-events`)?.classList.add('active');
    }
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get selected filter
            const filter = this.dataset.filter;
            
            // Hide all categories
            document.querySelectorAll('.event-category').forEach(cat => {
                cat.classList.remove('active');
            });
            
            // Show corresponding category
            const targetCategory = document.getElementById(`${filter}-events`);
            if (targetCategory) {
                targetCategory.classList.add('active');
            }
        });
    });
}

/**
 * Set up Intersection Observer for counter animation
 */
function setupCounterAnimation() {
    const statsSection = document.querySelector('.sobre-facim-section');
    
    if (!statsSection) return;
    
    // Create Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Start counter animation when section is visible
                startCounterAnimation();
                // Stop observing once triggered
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 }); // Trigger when 20% of the section is visible
    
    // Start observing the statistics section
    observer.observe(statsSection);
}

/**
 * Start the counter animation for all counters
 */
function startCounterAnimation() {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        // Get target value from data-count attribute on parent
        const target = parseInt(counter.parentElement.getAttribute('data-count'));
        let count = 0;
        
        // Calculate animation duration based on target value
        const duration = 2000; // 2 seconds total animation
        const increment = target / (duration / 16); // ~60fps
        
        // Update counter value with animation
        function updateCounter() {
            if (count < target) {
                count += increment;
                // Ensure we don't exceed target
                if (count > target) count = target;
                // Update displayed value
                counter.innerText = Math.floor(count).toLocaleString();
                // Continue animation
                requestAnimationFrame(updateCounter);
            } else {
                // Ensure final value is exactly the target
                counter.innerText = target.toLocaleString();
            }
        }
        
        // Start animation
        updateCounter();
    });
}
     
  



 
</script>


<script>
            let progress = 0;
        const progressBar = document.getElementById('progress-bar');
        const preloader = document.querySelector('.preloader');
        const percentageText = document.getElementById('loading-percentage');
        
        const loadingInterval = setInterval(function() {
            progress += 1;
            progressBar.style.width = progress + '%';
            percentageText.textContent = progress + '%';
            
            if (progress >= 100) {
                clearInterval(loadingInterval);
                setTimeout(function() {
                    preloader.style.opacity = '0';
                    setTimeout(function() {
                        preloader.style.display = 'none';
                    }, 500);
                }, 500);
            }
        }, 30);
        
</script>
</body>
</html>