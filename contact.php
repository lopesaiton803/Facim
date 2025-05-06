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
       <!-- Seção de Contato -->
       <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Entre em Contato</h2>
                    <p class="mb-5">Escolha abaixo o tipo de contato que deseja fazer conosco. Estamos à disposição para atendê-lo da melhor forma possível.</p>
                    
                    <!-- Seletor de Formulários -->
                    <div class="form-type-selector">
                        <div class="form-check active">
                            <input class="form-check-input" type="radio" name="formType" id="formTypeBusiness" value="business" checked>
                            <label class="form-check-label" for="formTypeBusiness">
                                Empresarial
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formType" id="formTypeSupport" value="support">
                            <label class="form-check-label" for="formTypeSupport">
                                Suporte Técnico
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formType" id="formTypeCareer" value="career">
                            <label class="form-check-label" for="formTypeCareer">
                                Carreiras
                            </label>
                        </div>
                    </div>
                    
                    <!-- Container dos Formulários -->
                    <div class="contact-form-container">
                        <!-- Formulário Empresarial -->
                        <form id="businessForm" class="form-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="businessName" class="form-label">Nome da Empresa</label>
                                        <input type="text" class="form-control" id="businessName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contactPerson" class="form-label">Pessoa de Contato</label>
                                        <input type="text" class="form-control" id="contactPerson" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="businessEmail" class="form-label">Email Corporativo</label>
                                        <input type="email" class="form-control" id="businessEmail" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="businessPhone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="businessPhone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="businessSubject" class="form-label">Assunto</label>
                                <select class="form-select" id="businessSubject" required>
                                    <option value="" selected disabled>Selecione um assunto</option>
                                    <option value="partnership">Parceria</option>
                                    <option value="proposal">Proposta Comercial</option>
                                    <option value="information">Informações</option>
                                    <option value="other">Outro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="businessMessage" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="businessMessage" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        </form>
                        
                        <!-- Formulário de Suporte Técnico -->
                        <form id="supportForm" class="form-content d-none">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="supportName" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="supportName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="supportEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="supportEmail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="supportPhone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="supportPhone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="productModel" class="form-label">Modelo do Produto</label>
                                        <input type="text" class="form-control" id="productModel" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="issueType" class="form-label">Tipo de Problema</label>
                                <select class="form-select" id="issueType" required>
                                    <option value="" selected disabled>Selecione o tipo de problema</option>
                                    <option value="technical">Problema Técnico</option>
                                    <option value="warranty">Garantia</option>
                                    <option value="usage">Dúvida de Uso</option>
                                    <option value="other">Outro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="supportMessage" class="form-label">Descrição do Problema</label>
                                <textarea class="form-control" id="supportMessage" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="supportFile" class="form-label">Anexar Arquivo (opcional)</label>
                                <input class="form-control" type="file" id="supportFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
                        </form>
                        
                        <!-- Formulário de Carreiras -->
                        <form id="careerForm" class="form-content d-none">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="careerName" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="careerName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="careerEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="careerEmail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="careerPhone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="careerPhone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Vaga de Interesse</label>
                                        <select class="form-select" id="position" required>
                                            <option value="" selected disabled>Selecione uma vaga</option>
                                            <option value="dev">Desenvolvedor</option>
                                            <option value="design">Designer</option>
                                            <option value="marketing">Marketing</option>
                                            <option value="sales">Vendas</option>
                                            <option value="other">Outra</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">Experiência Profissional</label>
                                <textarea class="form-control" id="experience" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="education" class="form-label">Formação Acadêmica</label>
                                <input type="text" class="form-control" id="education" required>
                            </div>
                            <div class="mb-3">
                                <label for="resume" class="form-label">Currículo (PDF)</label>
                                <input class="form-control" type="file" id="resume" accept=".pdf" required>
                            </div>
                            <div class="mb-3">
                                <label for="coverLetter" class="form-label">Carta de Apresentação (opcional)</label>
                                <textarea class="form-control" id="coverLetter" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar Candidatura</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3>Informações de Contato</h3>
                        <div class="contact-info-item">
                            <i class="bi bi-geo-alt"></i>
                            <p>Av. Paulista, 1000, São Paulo - SP, 01310-100</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-telephone"></i>
                            <p>+55 (11) 3456-7890</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-envelope"></i>
                            <p>contato@suaempresa.com.br</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-clock"></i>
                            <p>Segunda a Sexta: 9h às 18h</p>
                        </div>
                        <div class="social-links mt-4">
                            <a href="#" class="me-2 text-white"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="me-2 text-white"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="me-2 text-white"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="me-2 text-white"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mapa -->
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="mb-4">Nossa Localização</h3>
                    <div class="map-container">
                        <iframe src="https://maps.google.com/maps?q=Av.%20Paulista,%201000,%20S%C3%A3o%20Paulo&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                                frameborder="0" 
                                style="border:0; width: 100%; height: 100%;" 
                                allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
<script>
        // Script para alternar entre os formulários
        document.addEventListener('DOMContentLoaded', function() {
            const forms = {
                business: document.getElementById('businessForm'),
                support: document.getElementById('supportForm'),
                career: document.getElementById('careerForm')
            };
            
            const radioButtons = document.querySelectorAll('input[name="formType"]');
            const formChecks = document.querySelectorAll('.form-check');
            
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    // Esconder todos os formulários
                    for (const key in forms) {
                        forms[key].classList.add('d-none');
                    }
                    
                    // Mostrar o formulário selecionado
                    forms[this.value].classList.remove('d-none');
                    
                    // Atualizar classes ativas
                    formChecks.forEach(check => {
                        check.classList.remove('active');
                    });
                    
                    this.closest('.form-check').classList.add('active');
                });
            });
        });
    </script>
</html>