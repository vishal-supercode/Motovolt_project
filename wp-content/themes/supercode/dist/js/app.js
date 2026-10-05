console.log('Supercode theme loaded');

document.addEventListener('DOMContentLoaded', () => {
  const slider = document.querySelector('[data-hero-slider]');
  const background = document.querySelector('.hero__background');
  if (!slider || !background) return;

  const slides = [...slider.querySelectorAll('[data-hero-slide]')];
  if (!slides.length) return;

  let activeIndex = slides.findIndex((slide) => slide.classList.contains('is-active'));

  const showSlide = (index) => {
    activeIndex = (index + slides.length) % slides.length;
    background.style.setProperty('--hero-image-offset', activeIndex === 0 ? '0px' : '20px');
    
    slides.forEach((slide, slideIndex) => {
      const active = slideIndex === activeIndex;
      slide.classList.toggle('is-active', active);
      slide.setAttribute('aria-pressed', active ? 'true' : 'false');
    });
    
    const nextImage = slides[activeIndex].dataset.heroImage;
    const preload = new Image();
    
    preload.onload = () => {
      background.classList.remove('is-transitioning');
      background.src = nextImage;
      void background.offsetWidth;
      background.classList.add('is-transitioning');
    };
    preload.src = nextImage;
  };
  
  slides.forEach((slide, index) => slide.addEventListener('click', () => showSlide(index)));

  showSlide(Math.max(activeIndex, 0));
  window.setInterval(() => showSlide(activeIndex + 1), 5000);
});

document.addEventListener('DOMContentLoaded', () => {
  const section = document.querySelector('[data-experience-slider]');
  if (!section) return;
  const track = section.querySelector('.experience-slider__track');
  const cards = [...section.querySelectorAll('[data-experience-card]')];
  const tabs = [...document.querySelectorAll('[data-experience]')];
  const description = document.querySelector('[data-experience-description]');
  const copy = {
    controller: 'Most EV brands use generic Chinese-made controllers. Ours is developed in-house - and extracts up to 1.92x the torque from the same motor capacity. More pull. More efficiency. More control.',
    battery: 'Our LFP pouch-cell batteries are engineered for dependable range, long life, and consistent performance through every ride.',
    design: 'Every Motovolt is designed and assembled with care, bringing thoughtful details, premium finishes, and reliable engineering together.'
  };
  const setActive = (name) => {
    const index = cards.findIndex((card) => card.dataset.experienceCard === name);
    if (index < 0) return;
    tabs.forEach((tab) => { const active = tab.dataset.experience === name; tab.classList.toggle('is-active', active); tab.setAttribute('aria-selected', active ? 'true' : 'false'); });
    cards.forEach((card, i) => card.classList.toggle('is-active', i === index));
    const leftInset = parseFloat(getComputedStyle(section).paddingLeft) || 0;
    const card = cards[index];
    const offset = index === 0
      ? 0
      : (section.clientWidth - card.offsetWidth) / 2 - leftInset - card.offsetLeft;
    track.style.setProperty('--experience-offset', `${offset}px`);
    if (description) description.textContent = copy[name];
  };
  tabs.forEach((tab) => tab.addEventListener('click', () => setActive(tab.dataset.experience)));
  setActive('controller');
  window.addEventListener('resize', () => { const active = tabs.find((tab) => tab.classList.contains('is-active')); if (active) setActive(active.dataset.experience); });
});

document.addEventListener('DOMContentLoaded', () => {
  const panel = document.querySelector('[data-support-panel]');
  if (!panel) return;
  const services = [...panel.querySelectorAll('[data-support]')];
  const track = panel.querySelector('.support-service__track');
  const thumb = panel.querySelector('.support-service__thumb');
  const feature = panel.querySelector('[data-support-feature]');
  const scenes = [...panel.querySelectorAll('[data-support-scene]')];
  const title = panel.querySelector('[data-support-title]');
  const description = panel.querySelector('[data-support-description]');
  const content = {
    network: ['Always Connected', 'Our support team is always ready to assist you through calls and video support.'],
    video: ['Real-Time Remote Assistance', 'Connect with our experts over video and get help with your Motovolt, wherever you are.'],
    parts: ['Parts Delivered', 'Get genuine Motovolt parts delivered when you need them, with guidance from our service team.'],
    doorstep: ['Service At Your Doorstep', 'Book dependable service at home and keep your Motovolt ready for every journey.']
  };
  const moveThumb = (service) => {
    if (!track || !thumb) return;
    const index = services.indexOf(service);
    const progress = services.length > 1 ? index / (services.length - 1) : 0;
    thumb.style.top = `${progress * 100}%`;
    thumb.style.transform = `translateY(-${progress * 100}%)`;
  };
  services.forEach((service) => service.addEventListener('click', () => {
    const selected = service.dataset.support;
    services.forEach((item) => {
      const active = item === service;
      item.classList.toggle('is-active', active);
      item.setAttribute('aria-selected', active ? 'true' : 'false');
    });
    moveThumb(service);
    feature.classList.toggle('has-scene', selected !== 'network');
    scenes.forEach((scene) => { scene.hidden = scene.dataset.supportScene !== selected; });
    [title.textContent, description.textContent] = content[selected];
  }));
  moveThumb(services.find((service) => service.classList.contains('is-active')) || services[0]);
  window.addEventListener('resize', () => moveThumb(services.find((service) => service.classList.contains('is-active')) || services[0]));
});
