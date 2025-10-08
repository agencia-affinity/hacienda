Fancybox.bind('[data-fancybox="video"]', {});
// eventos que caracterizam "interação do usuário"
const userEvents = ['click', 'scroll', 'keydown', 'mousemove', 'touchstart'];

function initVideo() {
    // remove os listeners depois da primeira interação
    userEvents.forEach((ev) => document.removeEventListener(ev, initVideo));

    const container = document.querySelector('.s-video .video-container');
    if (!container) return;

    // cria o <a>
    const link = document.createElement('a');
    link.className = 'video';
    link.href = 'assets/images/video/video-domus-institucional.webm';
    link.setAttribute('data-fancybox', 'video');
    link.setAttribute('data-width', '1280');
    link.setAttribute('data-height', '720');

    // cria o botão
    const button = document.createElement('button');
    button.className = 'btn-video';
    button.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
      <path d="M240,128a15.74,15.74,0,0,1-7.6,13.51L88.32,229.65a16,16,0,0,1-16.2.3A15.86,15.86,0,0,1,64,216.13V39.87a15.86,15.86,0,0,1,8.12-13.82,16,16,0,0,1,16.2.3L232.4,114.49A15.74,15.74,0,0,1,240,128Z"></path>
    </svg>
  `;

    // cria o poster
    const poster = document.createElement('img');
    poster.src = 'assets/images/photos/poster-video.webp';
    poster.alt = 'Capa do vídeo institucional da Hacienda';

    // monta a estrutura
    link.appendChild(button);
    link.appendChild(poster);

    container.appendChild(link);
}

// adiciona os listeners
userEvents.forEach((ev) => document.addEventListener(ev, initVideo));
