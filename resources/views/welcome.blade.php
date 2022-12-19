@extends('layouts.site')

@section('content')

<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Serviços</h2>
            <h3 class="section-subheading text-muted"><br></h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <a href="http://reservasexcelencia.com.br/">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="http://reservasexcelencia.com.br/" target="_blank">
                    <h4 class="my-3">Cotas Náuticas</h4>
                </a>
                <p class="text-muted">Sistema de reservas on-line para quem ja possui cota</p>

            </div>
            <div class="col-md-4">
                <a href="{{ route('login') }}" target="_blank">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-graduation-cap fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="{{ route('login') }}">
                    <h4 class="my-3">Escola Náutica</h4>
                </a>
                <p class="text-muted">Simulado online para a prova de arrais amador</p>
            </div>
            <div class="col-md-4">
                <a href="#contact">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="#contact">
                    <h4 class="my-3">Entre em contato</h4>
                </a>
                <p class="text-muted">Como podemos te ajudar melhor ?</p>
            </div>
        </div>
    </div>
</section>




<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Entrem em contato</h2>
            <h3 class="section-subheading text-muted"><br></h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Seu Nome *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Seu Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Seu telefone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Sua mensagem *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <!-- <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Erro ao enviar a mensagem!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar mensagem</button></div>
        </form>
    </div>
</section>


@endsection