<section id="onepage_contact" class="container-fluid p-4 d-flex flex-column">
  <div class="row justify-content-center">
    <div class="col-8">
      <?php
      include "form-handler.php";

      if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        if (!$isFormValid)
        {
          echo "<div class='alert alert-danger mt-3' role='alert'>
                  The form was not submitted due to errors. Please correct the following fields:
                  <ul>";

          echo ($nomeError != "") ? "<li>$nomeError</li>" : "";
          echo ($emailError != "") ? "<li>$emailError</li>" : "";
          echo ($mensagemError != "") ? "<li>$mensagemError</li>" : "";

          echo "</ul></div>";
        }
        else
        {
          echo "<div class='alert alert-success mt-3' role='alert'>
                  Form submitted successfully!
                </div>";
        }
      }
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
            <textarea class="form-control" placeholder="Leave your message here..." id="mensagem"
                name="mensagem" rows="5"><?= $mensagem ?></textarea>
            <div class="error"><?= $mensagemError ?></div>
        </div>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
      </form>
    </div>
  </div>
</section>