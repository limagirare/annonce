function calculateLoan() {
    var loanAmount = document.getElementById('loan-amount').value;
    var interestRate = document.getElementById('interest-rate').value;
    var loanTerm = document.getElementById('loan-term').value;

    var principal = parseFloat(loanAmount);
    var calculatedInterest = parseFloat(interestRate) / 100 / 12;
    var calculatedPayments = parseFloat(loanTerm) * 12;

    var x = Math.pow(1 + calculatedInterest, calculatedPayments);
    var monthlyPayment = (principal * x * calculatedInterest) / (x - 1);

    var totalPayment = monthlyPayment * calculatedPayments;
    var totalInterest = totalPayment - principal;

    document.getElementById('result').innerHTML = `
        <h3>Résultat du Calcul :</h3>
        <p>Paiement mensuel : ${monthlyPayment.toFixed(2)}</p>
        <p>Paiement total : ${totalPayment.toFixed(2)}</p>
        <p>Intérêt total : ${totalInterest.toFixed(2)}</p>
    `;
}


//////////////////////////

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}



document.addEventListener('DOMContentLoaded', function() {
    const accordions = document.querySelectorAll('.accordion');
    const panels = document.querySelectorAll('.panel');

    for (let i = 0; i < accordions.length; i++) {
        accordions[i].addEventListener('click', function() {
            panels[i].style.display = (panels[i].style.display === 'block') ? 'none' : 'block';
        });
    }
});