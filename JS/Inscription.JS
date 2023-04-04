// Sélectionne le formulaire
const form = document.querySelector('form');

// Ajoute un gestionnaire d'événement à l'envoi du formulaire
form.addEventListener('submit', function(event) {
  // Empêche l'envoi du formulaire si la validation échoue
  event.preventDefault();

  // Valide chaque champ du formulaire
  const nom = document.querySelector('input[name="nom"]');
  const prenom = document.querySelector('input[name="prenom"]');
  const tel = document.querySelector('input[name="tel"]');
  const adresse = document.querySelector('input[name="adresse"]');
  const code_postal = document.querySelector('input[name="code_postal"]');
  const email = document.querySelector('input[name="email"]');
  const email_confirmation = document.querySelector('input[name="email_confirmation"]');
  const mot_de_passe = document.querySelector('input[name="mot_de_passe"]');
  const passwd_confirmation = document.querySelector('input[name="passwd_confirmation"]');

  let valid = true;

  if (nom.value.trim() === '') {
    showError(nom, 'Veuillez saisir votre nom.');
    valid = false;
  }

  if (prenom.value.trim() === '') {
    showError(prenom, 'Veuillez saisir votre prénom.');
    valid = false;
  }

  if (tel.value.trim() === '') {
    showError(tel, 'Veuillez saisir votre numéro de téléphone.');
    valid = false;
  } else if (!/^\d{10}$/.test(tel.value.trim())) {
    showError(tel, 'Le numéro de téléphone doit contenir 10 chiffres.');
    valid = false;
  }

  if (adresse.value.trim() === '') {
    showError(adresse, 'Veuillez saisir votre adresse.');
    valid = false;
  }

  if (code_postal.value.trim() === '') {
    showError(code_postal, 'Veuillez saisir votre code postal.');
    valid = false;
  } else if (!/^\d{5}$/.test(code_postal.value.trim())) {
    showError(code_postal, 'Le code postal doit contenir 5 chiffres.');
    valid = false;
  }

  if (email.value.trim() === '') {
    showError(email, 'Veuillez saisir votre adresse email.');
    valid = false;
  } else if (!/\S+@\S+\.\S+/.test(email.value.trim())) {
    showError(email, 'Veuillez saisir une adresse email valide.');
    valid = false;
  }

  if (email_confirmation.value.trim() === '') {
    showError(email_confirmation, 'Veuillez confirmer votre adresse email.');
    valid = false;
  } else if (email_confirmation.value.trim() !== email.value.trim()) {
    showError(email_confirmation, 'Les adresses email ne correspondent pas.');
    valid = false;
  }

  if (mot_de_passe.value.trim() === '') {
    showError(mot_de_passe, 'Veuillez saisir un mot de passe.');
    valid = false;
  } else if (mot_de_passe.value.trim().length < 8) {
    showError(mot_de_passe, 'Le mot de passe doit contenir au moins 8 caractères.');
    valid = false;
  }

  if (passwd_confirmation.value.trim() === '') {
    showError(passwd_confirmation, 'Veuillez confirmer votre mot de passe.');
    valid = false;
  } else if (passwd_confirmation.value.trim() !== mot_de_passe.value.trim()) {
    showError(passwd_confirmation, 'Les mots de passe ne correspondent pas.')
}
a})
