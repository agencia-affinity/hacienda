// Remove completamente o Fancybox e a inicialização de vídeo
const container = document.querySelector('.s-video .video-container');

if (container) {
    // Cria o botão
    const button = document.createElement('button');
    button.className = 'btn-video';
    button.setAttribute('type', 'button');
    button.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
      <path d="M240,128a15.74,15.74,0,0,1-7.6,13.51L88.32,229.65a16,16,0,0,1-16.2.3A15.86,15.86,0,0,1,64,216.13V39.87a15.86,15.86,0,0,1,8.12-13.82,16,16,0,0,1,16.2.3L232.4,114.49A15.74,15.74,0,0,1,240,128Z"></path>
    </svg>
  `;

    // Cria o poster
    const poster = document.createElement('img');
    poster.src = 'assets/images/photos/poster-video.webp';
    poster.alt = 'Capa do vídeo institucional da Hacienda';

    // Envolve tudo em uma div
    const wrapper = document.createElement('div');
    wrapper.className = 'video-placeholder';
    wrapper.appendChild(button);
    wrapper.appendChild(poster);

    container.appendChild(wrapper);
}
