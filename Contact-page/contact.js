

(function () {
    emailjs.init("wH4LeFuNEJPik3PNJ");
})();

const form = document.getElementById("contactForm");
const message = document.getElementById("successMessage");

form.addEventListener("submit", function (e) {
    e.preventDefault();

    console.log("Form submitting...");

    emailjs.sendForm("service_83vvs3h", "template_qpqfw3i", form)
        .then(function (response) {
            console.log("SUCCESS:", response);

            message.style.display = "block";

            setTimeout(() => {
                message.style.display = "none";
            }, 3000);

            form.reset();
        })
        .catch(function (error) {
            console.log("EMAILJS ERROR:", error);
            alert("Check console for error details");
        });
});

let faqs = document.querySelectorAll(".faq-header");

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        let item = faq.parentElement;
        let isActive = item.classList.contains('active');

        document.querySelectorAll(".faq-item").forEach(faqitem => {
            faqitem.classList.remove("active");

        });
        if (!isActive) {
            item.classList.add("active");
        }

    })
})
AOS.init();
