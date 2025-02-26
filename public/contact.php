<?php include '../includes/header.php'; ?>

<div class="container-container">
    <h2>Contactez-nous</h2>
    <?php if (isset($_GET['success'])): ?>
    <p style="color: green; text-align: center;">Votre message a bien été envoyé !</p>
<?php endif; ?>

    <div class="contact-form">
      <!--  <form action="../src/Controller/ContactController.php" method="POST">-->
      <form action="/la-perche-tendue/src/Controller/ContactController.php" method="POST">

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" placeholder="Votre message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Envoyer</button>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
