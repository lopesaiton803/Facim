
// Inicializar AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
});

// Preloader e ProgressBar
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
};

// Configuração do countdown baseado na data do evento (14 de junho de 2024)
const eventDate = new Date(2025, 4, 14, 8, 30, 0); // Ano, Mês (0-11), Dia, Hora, Minuto

function updateCountdown() {
    const now = new Date();
    const diff = eventDate - now;
    
    if (diff <= 0) {
        // Se o evento já passou
        document.getElementById("days").textContent = "00";
        document.getElementById("hours").textContent = "00";
        document.getElementById("minutes").textContent = "00";
        document.getElementById("seconds").textContent = "00";
        return;
    }
    
    // Calcular dias, horas, minutos e segundos restantes
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);
    
    // Atualizar a exibição
    document.getElementById("days").textContent = days.toString().padStart(2, '0');
    document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
    document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
    document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');
}

// Atualizar imediatamente para evitar atraso inicial
updateCountdown();

// Atualizar o countdown a cada segundo
const countdownInterval = setInterval(updateCountdown, 1000);




scrollElements.forEach(el => observer.observe(el));


// Initialize AOS animation library with enhanced settings
AOS.init({
duration: 800,
once: false,
mirror: true,
easing: 'ease-in-out'
});

// Initialize carousel with 4 second interval
var myCarousel = document.getElementById('edicoesCarousel');
var carousel = new bootstrap.Carousel(myCarousel, {
interval: 4000,
wrap: true,
pause: 'hover'
});

// Reinitialize AOS when sliding
myCarousel.addEventListener('slide.bs.carousel', function () {
setTimeout(function() {
    AOS.refresh();
}, 500);
});

// Make sure AOS animations refresh on window resize
window.addEventListener('resize', function () {
AOS.refresh();
});

// FIX: Add event listener to update active indicator class
myCarousel.addEventListener('slide.bs.carousel', function (event) {
// Get the index of the next slide
var slideIndex = event.to;

// Remove active class from all indicators
var indicators = document.querySelectorAll('.custom-indicators button');
indicators.forEach(function(indicator) {
    indicator.classList.remove('active');
    indicator.removeAttribute('aria-current');
});

// Add active class to the indicator of the next slide
indicators[slideIndex].classList.add('active');
indicators[slideIndex].setAttribute('aria-current', 'true');
});











// Enhanced scroll animation
document.addEventListener('DOMContentLoaded', function() {
const scrollElements = document.querySelectorAll('[data-scroll]');

const elementInView = (el) => {
    const elementTop = el.getBoundingClientRect().top;
    return elementTop <= window.innerHeight * 0.8;
};

const displayScrollElement = (element) => {
    element.classList.add('scrolled');
    element.style.opacity = 1;
    element.style.transform = 'translateY(0)';
    element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
};

const hideScrollElement = (element) => {
    element.style.opacity = 0;
    element.style.transform = 'translateY(20px)';
};

scrollElements.forEach((el) => {
    hideScrollElement(el);
});

const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
        if (elementInView(el)) {
            displayScrollElement(el);
        }
    });
};

window.addEventListener('scroll', handleScrollAnimation);
// Check on page load with slight delay to ensure proper rendering
setTimeout(handleScrollAnimation, 100);
});


// Animação de contagem para estatísticas
const scrollElements = document.querySelectorAll("[data-scroll]");
const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
if (entry.isIntersecting) {
    entry.target.classList.add("show");
    
    // Iniciar contagem se o elemento tiver um contador
    const counterElement = entry.target.querySelector(".counter");
    if (counterElement) {
        const target = +entry.target.querySelector(".stat-number").getAttribute('data-count');
        const increment = target / 50; // Velocidade da contagem
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counterElement.textContent = Math.floor(current);
                setTimeout(updateCounter, 30);
            } else {
                counterElement.textContent = target;
            }
        };
        
        updateCounter();
    }
    
    observer.unobserve(entry.target);
}
});
}, {
threshold: 0.2
});

scrollElements.forEach(el => observer.observe(el));






// Inicializar AOS (Animate On Scroll)
AOS.init({
once: true,
offset: 100
});

// Animação de contagem para os números estatísticos
document.addEventListener('DOMContentLoaded', function() {
const counters = document.querySelectorAll('.counter-number');
const speed = 200; // Quanto menor, mais rápido

// Função para verificar se um elemento está visível na viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Função para iniciar a contagem quando o elemento estiver visível
function startCounters() {
    counters.forEach(counter => {
        if (isElementInViewport(counter) && !counter.classList.contains('counted')) {
            counter.classList.add('counted');
            const target = +counter.getAttribute('data-count');
            let count = 0;
            const increment = target / speed;
            
            const updateCount = () => {
                count += increment;
                if (count < target) {
                    // Formatação especial para números grandes (acima de 1000)
                    if (target > 999) {
                        counter.innerText = Math.ceil(count).toLocaleString();
                    } else {
                        counter.innerText = Math.ceil(count);
                    }
                    setTimeout(updateCount, 1);
                } else {
                    // Adicionar o caractere '+' para valores com '+' no final
                    if (counter.innerText.includes('+')) {
                        counter.innerText = target + '+';
                    } else {
                        if (target > 999) {
                            counter.innerText = target.toLocaleString();
                        } else {
                            counter.innerText = target;
                        }
                    }
                }
            };
            
            updateCount();
        }
    });
}

// Iniciar contagem quando a seção estiver visível
window.addEventListener('scroll', startCounters);
// Verificar também quando a página carrega
startCounters();

// Corrigir o símbolo '+' após a contagem para elementos específicos
counters.forEach(counter => {
    if (counter.innerText.indexOf('+') === -1 && counter.getAttribute('data-count') === '500') {
        counter.innerText = counter.innerText + '+';
    }
    if (counter.innerText.indexOf('+') === -1 && counter.getAttribute('data-count') === '25') {
        counter.innerText = counter.innerText + '+';
    }
    if (counter.innerText.indexOf('+') === -1 && counter.getAttribute('data-count') === '10000') {
        counter.innerText = counter.innerText + '+';
    }
});
});



window.addEventListener("scroll", handleScrollAnimation);
// Verificar elementos visíveis quando a página carrega
handleScrollAnimation();



// Counter Animation
document.addEventListener('DOMContentLoaded', function() {
const counters = document.querySelectorAll('.counter');
const speed = 200;

function animateCounters() {
counters.forEach(counter => {
  const target = +counter.getAttribute('data-target');
  const count = +counter.innerText.replace(/,/g, '');
  const increment = target / speed;
  
  if (count < target) {
    counter.innerText = Math.ceil(count + increment).toLocaleString();
    setTimeout(animateCounters, 1);
  } else {
    counter.innerText = target.toLocaleString();
  }
});
}

// Intersection Observer to trigger animation when scrolled to
const observer = new IntersectionObserver((entries) => {
entries.forEach(entry => {
  if (entry.isIntersecting) {
    animateCounters();
    observer.unobserve(entry.target);
  }
});
}, { threshold: 0.5 });

counters.forEach(counter => {
observer.observe(counter);
});

// Initialize AOS (Animate On Scroll) if not already initialized
if (typeof AOS !== 'undefined') {
AOS.init({
  duration: 800,
  easing: 'ease-in-out',
  once: true
});
}

// Add hover effects to stat items
const statItems = document.querySelectorAll('.stat-item');
statItems.forEach(item => {
item.addEventListener('mouseenter', function() {
  const value = this.getAttribute('data-value');
  const mainCircle = document.querySelector('.main-circle');
  mainCircle.style.transform = 'scale(0.95)';
  mainCircle.style.transition = 'transform 0.3s ease';
});

item.addEventListener('mouseleave', function() {
  const mainCircle = document.querySelector('.main-circle');
  mainCircle.style.transform = 'scale(1)';
});
});
});


t>




// Ken Burns Hero Slider
// Ken Burns Hero Slider
document.addEventListener('DOMContentLoaded', function() {
const slides = document.querySelectorAll('.hero-slide');
const indicators = document.querySelectorAll('.indicator');
const prevBtn = document.querySelector('.slider-prev');
const nextBtn = document.querySelector('.slider-next');
let currentSlide = 0;
let slideInterval;
let isAnimating = false;

// Função para reiniciar a animação Ken Burns
function resetKenBurnsAnimation(slide) {
const kenBurnsBg = slide.querySelector('.ken-burns-bg');
kenBurnsBg.style.animation = 'none';
// Força um reflow para que a animação possa ser reiniciada
void kenBurnsBg.offsetWidth;
kenBurnsBg.style.animation = '';
}

function showSlide(index) {
if (isAnimating) return;
isAnimating = true;

// Remove a classe active do slide atual
slides[currentSlide].classList.remove('active');

// Adiciona a classe active ao novo slide
slides[index].classList.add('active');

// Reinicia a animação Ken Burns no novo slide
resetKenBurnsAnimation(slides[index]);

// Atualiza os indicadores
indicators.forEach(ind => ind.classList.remove('active'));
indicators[index].classList.add('active');

// Atualiza o índice do slide atual
currentSlide = index;

// Permite novas animações após o tempo da transição
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
// Alterado de 8000 para 3000 (3 segundos por slide)
slideInterval = setInterval(nextSlide, 7000);
console.log("Slider iniciado - troca a cada 3 segundos");
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
resetKenBurnsAnimation(slides[0]); // Garante que o primeiro slide tenha a animação desde o início

// Inicia imediatamente o slider e força a primeira troca após 3 segundos
startSlider();

// Forçar uma mudança de slide imediatamente após a inicialização
// para garantir que o primeiro slide dure apenas 3 segundos
setTimeout(function() {
nextSlide();
}, 3000);

// Countdown para todos os slides
const eventDate = new Date(2025, 4, 14, 8, 30, 0); // 14 de maio de 2025, 8:30

function updateCountdown() {
const now = new Date();
const diff = eventDate - now;

if (diff <= 0) {
    // Se o evento já passou
    document.querySelectorAll('[id^="days"], [id^="hours"], [id^="minutes"], [id^="seconds"]').forEach(el => {
        el.textContent = "00";
    });
    return;
}

// Calcular dias, horas, minutos e segundos restantes
const days = Math.floor(diff / (1000 * 60 * 60 * 24));
const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
const seconds = Math.floor((diff % (1000 * 60)) / 1000);

// Atualizar todos os countdowns
for (let i = 1; i <= 3; i++) {
    document.getElementById(`days${i}`).textContent = days.toString().padStart(2, '0');
    document.getElementById(`hours${i}`).textContent = hours.toString().padStart(2, '0');
    document.getElementById(`minutes${i}`).textContent = minutes.toString().padStart(2, '0');
    document.getElementById(`seconds${i}`).textContent = seconds.toString().padStart(2, '0');
}
}

// Atualizar imediatamente para evitar atraso inicial
updateCountdown();

// Atualizar o countdown a cada segundo
setInterval(updateCountdown, 1000);
});







// Script para fazer a navegação dos filtros funcionar
$(document).ready(function() {
$('.filter-btn').click(function() {
    // Remove a classe active de todos os botões
    $('.filter-btn').removeClass('active');
    // Adiciona a classe active ao botão clicado
    $(this).addClass('active');
    
    // Obtém o filtro selecionado
    const filter = $(this).data('filter');
    
    // Esconde todas as categorias
    $('.event-category').removeClass('active');
    
    // Mostra a categoria correspondente
    if (filter === 'upcoming') {
        $('#upcoming-events').addClass('active');
    } else if (filter === 'ongoing') {
        $('#ongoing-events').addClass('active');
    } else if (filter === 'expired') {
        $('#expired-events').addClass('active');
    }
});
});



// Script para controlar o carrossel e as descrições
document.addEventListener('DOMContentLoaded', function() {
const carousel = new bootstrap.Carousel(document.getElementById('facimCarousel'), {
    interval: 4000, // 4 segundos
    wrap: true,
    ride: 'carousel'
});

// Atualizar descrições quando o slide mudar
document.getElementById('facimCarousel').addEventListener('slide.bs.carousel', function (e) {
    // Esconder todas as descrições
    document.querySelectorAll('.desc-item').forEach(item => {
        item.classList.remove('active');
        item.style.display = 'none';
    });
    
    // Mostrar apenas a descrição correspondente ao slide atual
    const nextSlide = e.to;
    const activeDesc = document.querySelector(`.desc-item[data-slide="${nextSlide}"]`);
    if (activeDesc) {
        activeDesc.classList.add('active');
        activeDesc.style.display = 'block';
    }
});

// Inicializar - mostrar apenas a primeira descrição
document.querySelectorAll('.desc-item').forEach((item, index) => {
    if (index === 0) {
        item.style.display = 'block';
    } else {
        item.style.display = 'none';
    }
});
});


document.addEventListener('DOMContentLoaded', function() {
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    mirror: false
})});
