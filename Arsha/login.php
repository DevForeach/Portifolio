<?php
include 'bootstrap.php';

session_start();
?>

<body style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%)">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          <?php
            if(isset($_SESSION['result'])):
            ?>
            <div class="alert alert-success" role="alert">
              Cadastro realizado com sucesso!
            </div>
            <?php
            unset($_SESSION['result']);
            endif;
            if(isset($_SESSION['nao_autenticado'])):
            ?>
          <div class="alert alert-danger" role="alert">
            Usuario ou senha invalidos! 
          </div>
          <?php
          endif;
          unset($_SESSION['nao_autenticado']);
          ?>
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Senha</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu sua senha?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit"><a class="text-white-50" href="#!">Login</a></button>
            </div>

            <div>
              <p class="mb-0">Ainda não tem conta? <a class="text-white-50 fw-bold" href="formulario.html">Cadastre-se</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>