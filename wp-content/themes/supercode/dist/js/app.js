console.log('Supercode theme loaded');

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
    const cardWidth = cards[0].getBoundingClientRect().width;
    const gap = 22;
    const centerOffset = (window.innerWidth / 2) - (cardWidth / 2) - (index * (cardWidth + gap));
    track.style.setProperty('--experience-offset', `${centerOffset}px`);
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
