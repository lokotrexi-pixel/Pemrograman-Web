document.addEventListener('DOMContentLoaded', ()=>{
  const sections = document.querySelectorAll('main section, #hero');
  const navLinks = document.querySelectorAll('nav ul li a');

  window.addEventListener('scroll', ()=>{
      let current = '';
      sections.forEach(sec => {
          const top = sec.offsetTop - 100;
          if(scrollY >= top) current = sec.getAttribute('id');
      });
      navLinks.forEach(link => link.classList.remove('active'));
      if(current) document.querySelector(`nav ul li a[href="#${current}"]`)?.classList.add('active');
  });

  let index = 0;
  const slides = document.querySelectorAll('.testimonial .card');
  if(slides.length > 0){
      slides.forEach((s,i) => i!==0 ? s.style.display='none' : s.style.display='block');
      setInterval(()=>{
          slides.forEach(s => s.style.display='none');
          slides[index].style.display='block';
          index = (index + 1) % slides.length;
      }, 4000);
  }

  const form = document.querySelector('form');
  if(form){
      form.addEventListener('submit', (e)=>{
          e.preventDefault();
          alert('Pesan berhasil dikirim!');
          form.reset();
      });
  }
});