
  let vozLudi = null;
  let vocesCargadas = false;

  function inicializarVoces() {
    const voces = speechSynthesis.getVoices();

    const nombresPreferidos = [
      "Google español (Latinoamérica)",
      "Google español (Estados Unidos)",
      "Microsoft Raul - Spanish (Mexico)",
      "Microsoft Sabina - Spanish (Mexico)",
      "Microsoft Pablo - Spanish (Mexico)",
      "Microsoft Helena - Spanish (Spain)"
    ];

    vozLudi = voces.find(v => 
      nombresPreferidos.includes(v.name)
    ) || voces.find(v => v.lang.startsWith('es'));

    vocesCargadas = true;
  }

  window.speechSynthesis.onvoiceschanged = inicializarVoces;

  function hablarLudi(texto) {
    if (!vocesCargadas) inicializarVoces();

    const mensaje = new SpeechSynthesisUtterance(texto);
    mensaje.lang = 'es-MX';
    mensaje.pitch = 1.8;
    mensaje.rate = 1.25;
    mensaje.volume = 1;

    if (vozLudi) {
      mensaje.voice = vozLudi;
    }

    speechSynthesis.cancel();
    speechSynthesis.speak(mensaje);
  }

  document.addEventListener('DOMContentLoaded', () => {
    // Seleccionar todas las imágenes de Ludi
    const ludiImages = document.querySelectorAll("img[src*='LUDI'], img[src*='ludi-']");

    ludiImages.forEach(img => {
      img.style.cursor = 'pointer';
      img.addEventListener('click', () => {
        const chatRow = img.closest('.chat-row');
        const burbuja = chatRow?.querySelector('.chat-bubble, .chat-bubble-big')?.textContent;
        if (burbuja) {
          hablarLudi(burbuja.trim());
        }
      });
    });
  });


