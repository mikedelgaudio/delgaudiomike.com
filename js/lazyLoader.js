const images = document.querySelectorAll('[data-src]');
const config = {
  rootMargin: '-50px 0px -55% 0px',
  threshold: 0
};
let loaded = 0;

let observer = new IntersectionObserver(function (entries, self) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
       console.log(`Image ${entry.target.src} is in the viewport!`);
      preloadImage(entry.target);
      // Stop watching and load the image
      self.unobserve(entry.target);
    }
  });
}, config);

function preloadImage(img) {
  const src = img.getAttribute('data-src');
  if (!src) { return; }
  img.src = src;
  _updateMonitoring();
}

images.forEach(image => {
    observer.observe(image);
  });

// Just for the monitoring purpose. Isn't needed in real projects
function _updateMonitoring() {
    const container = document.getElementById('isIntersecting');
    const placeholder = container.querySelector('.placeholder')
    loaded += 1;
    placeholder.innerHTML = loaded;
    container.style.opacity = 1;
  }