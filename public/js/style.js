$(document).ready(function () {
    $('#slider1').owlCarousel({
        autoPlay: false,
        items: 1,
        center: false,
        nav: true,
        margin: 40,
        dots: false,
        loop: true,
        navText: ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            575: { items: 1 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
    $('#slider2').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        responsive: {
            0: { items: 1 },
            575: { items: 2 },
            768: { items: 2 },
            991: { items: 3 },
        }
    });
    $('#slider3').owlCarousel({
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      items: 1,
      stagePadding: 20,
      center: true,
      nav: false,
      margin: 50,
      dots: true,
      loop: true,
      responsive: {
          0: { items: 1 },
          575: { items: 2 },
          768: { items: 2 },
          991: { items: 3 },
      }
    });
    $('#slider4').owlCarousel({
        autoPlay: false,
        items: 1,
        center: false,
        nav: false,
        margin: 40,
        dots: false,
        loop: false,
        responsive: {
            0: {
                items: 1,
            },
            575: { items: 1 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
    
});
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleButton');
    const infoContent = document.getElementById('infoContent');
    const buttonText = document.getElementById('buttonText');
    const arrow = document.getElementById('arrow');
  
    toggleButton.addEventListener('click', () => {
      const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
  
      infoContent.classList.toggle('show', !isExpanded);
      toggleButton.setAttribute('aria-expanded', !isExpanded);
      buttonText.textContent = isExpanded ? 'What areas of law does Attorna Specialize in?' : 'What areas of law does Attorna Specialize in?';
      arrow.classList.toggle('rotate', !isExpanded);
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleButton1');
    const infoContent = document.getElementById('infoContent1');
    const buttonText = document.getElementById('buttonText1');
    const arrow = document.getElementById('arrow1');
  
    toggleButton.addEventListener('click', () => {
      const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
  
      infoContent.classList.toggle('show', !isExpanded);
      toggleButton.setAttribute('aria-expanded', !isExpanded);
      buttonText.textContent = isExpanded ? 'How can I schedule a consultation with Attorna?' : 'How can I schedule a consultation with Attorna?';
      arrow.classList.toggle('rotate', !isExpanded);
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleButton2');
    const infoContent = document.getElementById('infoContent2');
    const buttonText = document.getElementById('buttonText2');
    const arrow = document.getElementById('arrow2');
  
    toggleButton.addEventListener('click', () => {
      const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
  
      infoContent.classList.toggle('show', !isExpanded);
      toggleButton.setAttribute('aria-expanded', !isExpanded);
      buttonText.textContent = isExpanded ? 'What sets Attorna aquart from other law firms?' : 'What sets Attorna aquart from other law firms?';
      arrow.classList.toggle('rotate', !isExpanded);
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleButton3');
    const infoContent = document.getElementById('infoContent3');
    const buttonText = document.getElementById('buttonText3');
    const arrow = document.getElementById('arrow3');
  
    toggleButton.addEventListener('click', () => {
      const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
  
      infoContent.classList.toggle('show', !isExpanded);
      toggleButton.setAttribute('aria-expanded', !isExpanded);
      buttonText.textContent = isExpanded ? 'How much do your legal services cost?' : 'How much do your legal services cost?';
      arrow.classList.toggle('rotate', !isExpanded);
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleButton4');
    const infoContent = document.getElementById('infoContent4');
    const buttonText = document.getElementById('buttonText4');
    const arrow = document.getElementById('arrow4');
  
    toggleButton.addEventListener('click', () => {
      const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
  
      infoContent.classList.toggle('show', !isExpanded);
      toggleButton.setAttribute('aria-expanded', !isExpanded);
      buttonText.textContent = isExpanded ? 'Will I have direct contact with an attorney on my case?' : 'Will I have direct contact with an attorney on my case?';
      arrow.classList.toggle('rotate', !isExpanded);
    });
  });
