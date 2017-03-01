
var creative = {};
var car = {};
/**
 * Window onload handler.
 */
function preInit() {
  setupDom();

  if (Enabler.isInitialized()) {
    init();
  } else {
    Enabler.addEventListener(
      studio.events.StudioEvent.INIT,
      init
    );
  }
}

/**
 * Select ad elements with zepto selectors to setup dom
 */
function setupDom() {
  creative.dom = {};
  creative.dom.mainContainer = document.getElementById('main-container');
  creative.dom.exit = document.getElementById('exit');

  creative.dom.photo = $('#photo');

  // creative.dom.interface = $('#interface');
  // creative.dom.shareBtn = $('#shareBtn');
 creative.dom.driveBold = $('#driveBold');
  // creative.dom.dropDown = $('#dropdown');


 creative.dom.copy1 = $('#copy1');
 creative.dom.copy1a = $('#copy1a');
 creative.dom.copy1b = $('#copy1b');
 creative.dom.copy1c = $('#copy1c');
 creative.dom.copy1d = $('#copy1d');

 creative.dom.copy2 = $('#copy2');
 creative.dom.copy3 = $('#copy3');

  creative.dom.logo = $('#logo');
  creative.dom.cta = $('#cta');

  creative.dom.startNowButtonShimmer = $('.icon-effect');

}

/**
 * Ad initialisation.
 */
function init() {

  addListeners();

  // Polite loading
  if (Enabler.isVisible()) {
    show();
  }
  else {
    Enabler.addEventListener(studio.events.StudioEvent.VISIBLE, show);
  }
}

/**
 * Adds appropriate listeners at initialization time
 */
function addListeners() {
  creative.dom.exit.addEventListener('click', exitClickHandler);
}

/**
 *  Shows the ad.
 */
function show() {
  creative.dom.exit.style.display = "block";
    //run the animations

  runAnimationLoop();
}







function runAnimationLoop(){
  creative.MainTimeline = new TimelineLite({
 onComplete:repeatMainTimeline
  });

  creative.MainTimeline

    .addLabel('frame-2')

    .to(creative.dom.driveBold, 0.25, {autoAlpha:1, delay:0}, 'frame-2')
    .to(creative.dom.copy1a, 0.25, {autoAlpha:1, delay:0.25}, 'frame-2')
    .to(creative.dom.copy1b, 0.25, {autoAlpha:1, delay:0.5}, 'frame-2')
    .to(creative.dom.copy1c, 0.25, {autoAlpha:1, delay:0.75}, 'frame-2')
    .to(creative.dom.copy1d, 0.25, {autoAlpha:1, delay:1}, 'frame-2')
    .to(creative.dom.copy1d, 0.5, {autoAlpha:1, delay:1.25}, 'frame-2')


    .addLabel('frame-3')
    .to(creative.dom.copy1, 0.25, {autoAlpha:0, delay:3}, 'frame-3')
    .to(creative.dom.copy2, 0.5, {autoAlpha:1, delay:3.25}, 'frame-3')
    .to(creative.dom.copy2, 0.25, {autoAlpha:0, delay:6}, 'frame-3')
    .to(creative.dom.photo, 0.7, {autoAlpha: 0, delay:6,ease:Power4.easeInOut}, 'frame-3')


    .to(creative.dom.copy3, 0.5, {autoAlpha:1, delay:6.25}, 'frame-3')

    .to(creative.dom.cta, 0.5, {scale:1, autoAlpha:1,  ease:Back.easeOut, delay:6.5}, 'frame-3')

    .addLabel('shimmer')
    .set(creative.dom.startNowButtonShimmer, {className: "+=shimmer"},'shimmer')
    .to(creative.dom.startNowButtonShimmer,0.6, {autoAlpha:0,delay:0.5},'shimmer')


 creative.playedOnce = false;
 function repeatMainTimeline(){
   if (creative.playedOnce == false) {
     creative.playedOnce = true;
     setTimeout(function(){
       creative.MainTimeline.restart();
     },3000)
   } else {
     //donothing
   }
 }

}



// ---------------------------------------------------------------------------------
// MAIN
// ---------------------------------------------------------------------------------

function exitClickHandler() {
  Enabler.exit('BackgroundExit');
}

/**
 *  Main onload handler
 */
window.addEventListener('load', preInit);
