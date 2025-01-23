public/
  js/
  document.addEventListener("DOMContentLoaded", function() {
    let steps = document.querySelectorAll(".step");
    let formSteps = document.querySelectorAll(".form-step");
    let nextStep1Button = document.getElementById("next-step-1");

    // Menambahkan event listener untuk tombol langkah 1
    nextStep1Button.addEventListener("click", function() {
        // Menonaktifkan langkah dan form saat ini
        steps[0].classList.remove("active");
        formSteps[0].classList.remove("active");

        // Menambahkan class 'active' pada langkah 2 dan form langkah 2
        steps[1].classList.add("active");
        formSteps[1].classList.add("active");
    });
    
    // Jika kamu ingin menambahkan lebih banyak tombol untuk langkah lainnya, kamu bisa
    // menambah event listener serupa untuk tombol di langkah berikutnya.
});
