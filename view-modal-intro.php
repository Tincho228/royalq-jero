<!-- MODAL Video Intro -->

<div class="modal fade" id="intro-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #000000ed">
                <div class="modal-header align-items-center">
                    <img class="mail_icon" src="./images/logo.png" alt="email icon" style="width:30px;">
                    <h5 class="modal-title bg-second-color" style="margin-left:10px;" id="exampleModalLabel">Video intro
                    </h5>

                    <button type="button" class="close" onclick="onRemove()">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="text-light" >
                    <div class="embed-responsive embed-responsive-16by9"
                        style="margin-bottom:20px; box-shadow: 10px 9px 20px #0000008c;">
                        <video id="video-intro" controls autoplay muted width="500">
                            <source id="mp4_src" src="./videos/intro.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="d-flex justify-content-center">
                    <button 
                        style="margin-bottom: 20px;"
                        class="btn btn-outline-secondary text-light" onclick="onRemove()">Saltar intro</button>
                        </div>
                </div>

            </div>
        </div>
    </div>