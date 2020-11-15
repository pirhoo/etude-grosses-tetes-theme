import GreenAudioPlayer from 'green-audio-player'

export default {
  init() {
    GreenAudioPlayer.init({
      selector: '.wp-block-audio',
      stopOthersOnPlay: true,
    })
  },
};
