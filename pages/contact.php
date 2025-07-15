<section id="onepage_contact" class="container-fluid p-4 d-flex flex-column">
    <div class="col">
      <?php
      include "form-handler.php";
      /*if ($_SERVER["REQUEST_METHOD"] == "POST" and $isFormValid) {
          echo "<div class='alert alert-success' role='alert'>
                      Formulário enviado com sucesso!
                      <ul>
                          <li>Nome: $nome</li>
                          <li>Email: $email</li>
                          <li>Mensagem: $mensagem</li>
                      </ul>
                    </div>";
      }*/
      ?>

      <form action="#onepage_contact.php" novalidate method="post">
          <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control <?= ($nomeError != '') ? 'error-box' : '' ?>" id="nome"
                  name="nome" value="<?= $nome ?>" />
              <div class="error"><?= $nomeError ?></div>
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control <?= ($emailError != '') ? 'error-box' : '' ?>" id="email"
                  name="email" aria-describedby="emailHelp" value="<?= $email ?>" />
              <div id="emailHelp" class="form-text">
                  We'll never share your email with anyone else.
              </div>
              <div class="error"><?= $emailError ?></div>
          </div>

          <div class="mb-3">
              <label for="mensagem" class="form-label">Mensagem</label>
              <textarea class="form-control" placeholder="Deixe uma mensagem aqui..." id="mensagem"
                  name="mensagem" rows="5"><?= $mensagem ?></textarea>
              <div class="error"><?= $mensagemError ?></div>
          </div>
          <button type="submit" class="btn btn-primary">
              Submit
          </button>
      </form>

      <?php
          if (!$isFormValid) {
              echo "<div class='alert alert-danger mt-3' role='alert'>
                      O formulário não foi enviado devido a erros. Por favor, corrija os seguintes campos:
                      <ul>";

              echo ($nomeError != "") ? "<li>$nomeError</li>" : "";
              echo ($emailError != "") ? "<li>$emailError</li>" : "";
              echo ($mensagemError != "") ? "<li>$mensagemError</li>" : "";

              echo "</ul>
                    </div>";
          }
      ?>

  </div>
</section>