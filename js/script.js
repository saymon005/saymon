// Header Scroll
let nav = document.querySelector(".navbar");
window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("header-scrolled");
    } else {
        nav.classList.remove("header-scrolled");
    }
}

//CV download

function downloadPDF() {
    const pdfUrl = 'images/M_Saymon_Islam_Iftikar.pdf'; // Path to your PDF file
    const link = document.createElement('a');
    link.href = pdfUrl;
    link.download = 'M_Saymon_Islam_Iftikar.pdf'; // Optional: specify a name for the downloaded file
    link.click();
}

// nav hide 
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function (a) {
    a.addEventListener("click", function () {
        navCollapse.classList.remove("show");
    })
})

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backToTop").style.display = "block";
    } else {
        document.getElementById("backToTop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
document.getElementById('backToTop').addEventListener('click', function(event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

