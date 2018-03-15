import bodymovin from 'bodymovin';

/**
 * Initialise and set up the animation attributes for each element
 */
class LottieComponent {
  constructor(element) {
    this.element = element;

    bodymovin.loadAnimation({
      container: element, // the dom element that will contain the animation
      renderer: 'svg',
      loop: this.element.getAttribute('data-lottie-loop') ? this.element.getAttribute('data-lottie-loop') : false,
      autoplay: this.element.getAttribute('data-lottie-autoplay') ? this.element.getAttribute('data-lottie-autoplay') : false,
      path: this.element.getAttribute('data-lottie-path') ? this.element.getAttribute('data-lottie-path') : '' // the path to the animation json
    });
  }
}

// Get all animation elements and create a new LottieComponent for each one
Array.from(document.getElementsByClassName('js-lottie')).forEach(element => {
  new LottieComponent(element);
});
