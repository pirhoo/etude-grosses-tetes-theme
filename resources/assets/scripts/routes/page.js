import GreenAudioPlayer from 'green-audio-player'

export default {
  init() {
    // Add a class to audo player with a legend
    $('figcaption:not(:empty)', this.audioPlayerSelector).each((i, legend) => {
      $(legend).closest(this.audioPlayerSelector).addClass('wp-block-audio--legend')
    })
    // Create a "green audio player" on all wordpress audio tags
    GreenAudioPlayer.init({ selector: this.audioPlayerSelector, stopOthersOnPlay: true })
  },
  get audioPlayerSelector () {
    return '.wp-block-audio'
  },
};
