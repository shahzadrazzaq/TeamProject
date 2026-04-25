let faqs=document.querySelectorAll(".faq-header");

    faqs.forEach(faq=>{
        faq.addEventListener('click',()=>{
            let item=faq.parentElement;
            let isActive=item.classList.contains('active');

            document.querySelectorAll(".faq-item").forEach(faqitem=>{
                faqitem.classList.remove("active");

            });
            if(!isActive){
                item.classList.add("active");
            }
           
        })
    })

 
  AOS.init();
  