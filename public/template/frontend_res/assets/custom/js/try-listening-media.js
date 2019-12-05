var myTimeout;
var timeOutPlayVideo;
var audioPlaying = false;
var soundPlayer = {
    timeout: null,
    audio: null,
    muted: false,
    playing: true,
    _ppromis: null,
    pause: function () {
        this.audio.pause();
    },
    play: function (file) {
        if (this.muted) {
            return false;
        }
        clearTimeout(myTimeout);

        if (!this.audio && this.playing === false) {
            this.audio = new Audio(file);
            this._ppromis = this.audio.play();
            this.playing = true;

            if (this._ppromis !== undefined) {
                this._ppromis.then(function () {
                    soundPlayer.playing = false;
                    console.log('Playing....');
                }).catch(function (error) {
                    console.log('Failed to play....' + error);
                });
            }

        } else if (!this.playing) {
            this.playing = true;
            this.audio.src = file;
            this._ppromis = soundPlayer.audio.play();
            this._ppromis.then(function () {
                soundPlayer.playing = false;
                console.log('Playing....');
            }).catch(function (error) {
                console.log('Failed to play....' + error);
            });
        }
        myTimeout = setTimeout(function () {
                soundPlayer.pause();
                resetStatusTrylistenAudioDefaul();
                resetStatusTrylistenVideoDefaul();
                console.log("Audio Stop Successfully");
            },
            45000);
    }
};
/**
 * event click try listening audio
 */
$('.tryListenAudio').click(function (e) {

    var obj = $(this);
    var id = obj.data('id');
    var status = obj.attr('data-status');
    var checkIcon = obj.attr('data-icon');

    var iconPlaying = '/frontend_res/assets/img/svg/icon-pause-s.svg';
    var iconPlay = '/frontend_res/assets/img/svg/icon-listen-s.svg';

    if (checkIcon == 'big') {
        iconPlaying = '/frontend_res/assets/img/svg/icon-pause.svg';
        iconPlay = '/frontend_res/assets/img/svg/icon-listen.svg';
    }
    resetStatusTrylistenAudioDefaul();

    if (status == 'playing') {
        soundPlayer.pause();
        updateStatusTryListen(obj, 'play', iconPlay);
        return false;
    }

    $.get("/incoming/getMediaById", {at_id: id}, function (rs) {
        if (rs.status == 1) {
            updateStatusTryListen(obj, 'playing', iconPlaying);
            //play
            var filename = rs.data.filename;
            if (filename != '' && filename != null && filename != undefined) {
                soundPlayer.play(filename);
                audioPlaying = true;
            } else
                alert("Có lỗi khi nghe thử!");
        } else
            alert(rs.msg);
    });
    e.preventDefault();
});

/**
 * event click try listening video
 */
$('.tryListenVideo').click(function (e) {
    var videoObj = $('#video-object');
    var obj = $(this);
    var id = obj.data('id');
    var status = obj.attr('data-status');
    var name = obj.attr('data-name');
    var link = obj.attr('data-link');
    var checkIcon = obj.attr('data-icon');

    var iconPlaying = '/frontend_res/assets/img/svg/icon-pause-s.svg';
    var iconPlay = '/frontend_res/assets/img/svg/icon-play-s.svg';

    if (checkIcon == 'big') {
        iconPlaying = '/frontend_res/assets/img/svg/icon-pause.svg';
        iconPlay = '/frontend_res/assets/img/svg/icon-play.svg';
    }
    // resetStatusTrylistenVideoDefaul();
    // reset audio
    resetStatusTrylistenAudioDefaul();
    clearTimeout(myTimeout);
    if(audioPlaying==true) // nếu đang nghe audio mà click vào nghe video thì mới pause đc, ko thì sẽ bị lỗi
        soundPlayer.pause();

    if (status == 'playing') {
        updateStatusTryListen(obj, 'play', iconPlay);
        return false;
    }

    $.get("/incoming/getMediaById", {at_id: id}, function (rs) {
        if (rs.status == 1) {
            updateStatusTryListen(obj, 'playing', iconPlaying);
            //play
            var filename = rs.data.filename;

            $('#ModalLabelTitle').html('Xem video: <a href="' + link + '">' + name + '</a>');
            // videoObj.removeAttr("controls");
            videoObj.attr('src', filename);
            videoObj.show();
            $('#m_modal_listening_video').modal('show');
            initTimeoutForVideo(link);
        } else
            alert(rs.msg);
    });
    e.preventDefault();
});
/**
 * Stop video after hide modal
 */
$('#m_modal_listening_video').on('hidden.bs.modal', function (e) {
    resetStatusTrylistenVideoDefaul();
});

function updateStatusTryListen(obj, status, icon) {
    obj.attr('data-status', status);
    obj.children().attr('src', icon);
}

function resetStatusTrylistenAudioDefaul() {
    $('.tryListenAudio').attr('data-status', 'play');
    //set defaul img
    $('.img-listen-audio').attr('src', '/frontend_res/assets/img/svg/icon-listen.svg');
    $('.img-listen-audio-small').attr('src', '/frontend_res/assets/img/svg/icon-listen-s.svg');
}

function resetStatusTrylistenVideoDefaul() {
    clearTimeout(timeOutPlayVideo);
    console.log("clear timeout");
    $('#video-object').attr('src', 'play');
    $('.tryListenVideo').attr('data-status', 'play');
    //set defaul img
    $('.img-listen-video').attr('src', '/frontend_res/assets/img/svg/icon-play.svg');
    $('.img-listen-video-small').attr('src', '/frontend_res/assets/img/svg/icon-play-s.svg');
}

function initTimeoutForVideo(link) {
    clearTimeout(timeOutPlayVideo);
    timeOutPlayVideo = setTimeout(function () {
        $('#video-object')[0].pause();
        console.log("Video Stop Successfully");
        var cf = confirm("Bạn có muốn xem tiếp video này?");
        if (cf == true) {
            console.log("cf true");
            window.location.href = link;
        } else {
            console.log("cf false");
            resetStatusTrylistenVideoDefaul();
            $('#m_modal_listening_video').modal('hide');
        }

    }, 45000);

}

