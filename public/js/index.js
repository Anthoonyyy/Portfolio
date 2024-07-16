// Pour permettre l'envoi d'un mail lorsque on clique sur le boutonMail

document.getElementById('boutonMail').addEventListener('click', function() {
    var email = 'Arnone.anthony@hotmail.com';
    window.location.href = `mailto:${email}`;
});