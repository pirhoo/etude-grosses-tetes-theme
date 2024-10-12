import $ from 'jquery'
import '@src/vendors/green-audio-player/green-audio-player.min'
import WaveSurfer from 'wavesurfer.js'

export default {
  init() {
    // Add a class to audo player with a legend
    $('figcaption:not(:empty)', this.audioPlayerSelector).each((i, legend) => {
      $(legend).closest(this.audioPlayerSelector).addClass('wp-block-audio--legend')
    })
    // Create a "green audio player" on all wordpress audio tags
    this.initGreenAudioPlayer()
    // Create a "wave" on all wordpress audio tags
    this.initWaveSurfer()
  },
  initGreenAudioPlayer () {
    GreenAudioPlayer.init({
      selector: this.audioPlayerSelector,
      stopOthersOnPlay: true,
    })
  },
  initWaveSurfer () {
    // On each player, we need to add a "wave" separetly
    document.querySelectorAll(this.audioPlayerSelector).forEach(player => {
      const container = player.querySelector('.controls__slider')
      const audio = player.querySelector('audio')
      // Create the wave element
      const ws = WaveSurfer.create({
        container,
        height: 80,
        waveColor: '#6c757d',
        barWidth: 1,
        progressColor: '#e20318',
        responsive: true,
      })
      // Load the song using the same src
      ws.load(audio.src)
      // Ensure the audio currentTime is reflected on
      audio.addEventListener('timeupdate', () => {
        ws.seekTo(audio.currentTime  / audio.duration)
      })
    })
  },
  get audioPlayerSelector () {
    return '.wp-block-audio'
  },
  get audioTagSelector () {
    return '.wp-block-audio audio'
  },
};
