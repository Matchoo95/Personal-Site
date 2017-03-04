(function($) {
  $.fn.countTo = function(options) {
    // merge the default plugin settings with the custom options
    options = $.extend({}, $.fn.countTo.defaults, options || {});

    // how many times to update the value, and how much to increment the value on each update
    var loops = Math.ceil(options.speed / options.refreshInterval),
        increment = (options.to - options.from) / loops;

    return $(this).each(function() {
      var _this = this,
          loopCount = 0,
          value = options.from,
          interval = setInterval(updateTimer, options.refreshInterval);

      function updateTimer() {
        value += increment;
        loopCount++;
        $(_this).html(value.toFixed(options.decimals));

        if (typeof(options.onUpdate) == 'function') {
          options.onUpdate.call(_this, value);
        }

        if (loopCount >= loops) {
          clearInterval(interval);
          value = options.to;

          if (typeof(options.onComplete) == 'function') {
            options.onComplete.call(_this, value);
          }
        }
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0,  // the number the element should start at
    to: 100,  // the number the element should end at
    speed: 1000,  // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,  // the number of decimal places to show
    onUpdate: null,  // callback method for every time the element is updated,
    onComplete: null,  // callback method for when the element finishes updating
  };
})(jQuery);

jQuery(function($) {
  $('.timer').countTo({
    from: 0,
    to: 788400,
    speed: 1000,
    refreshInterval: 1,
    onComplete: function(value) {
      console.debug(this);
    }
  });
});










// this will make the JavaScript engine much pickier about potential programming issues
'use strict';
// get the "drawing context" - the object that can actually draw on the canvas
var c = document.getElementById("canvas").getContext("2d");
// set our drawing style
c.lineWidth = 3;
c.lineCap = "round";
c.lineJoin = "round"
c.strokeStyle = "#000";
// the stick figure will walk on a horizontal path from x=100 to x=700
var pathStart = 100;
var pathEnd = 700;
// this counts how much we have walked already
var distanceWalked = 0;
// the walking stick man's current position along the path
var position = pathStart;
// are we going along the path (1) or backwards (-1)
var direction = 1;
// how many pixels the stick figure can walk per second
var speed = 50;
// how smooth should the animation be (24 frames per second is Hollywood standard)
var framesPerSecond = 24;
// whether or not we're currently walking
var walking = false;
// draw the scene
drawEverything(c)
startStopWalking();
// update the current state (and re-draw) framesPerSecond times every second (1000 ms)
setInterval(updateCurrentState, 1000/framesPerSecond)
function drawEverything(c) {
  // clear the canvas - we'll redraw everything
  c.clearRect(0,0,800,600)
  // this is our walking stick figure
  drawStickFigure(c, position, 350, (1-direction)*90, distanceWalked);
  // this is a watching stick figure
  drawStickFigure(c, 400, 180, 180*(pathEnd - position)/(pathEnd - pathStart))
}
function updateCurrentState() {
  if (!walking) return;
  // compute how far we have walked since the last time we've been in this function
  var walkedNow = speed * elapsedTime()
  position = position + direction * walkedNow
  // at the end of the path, we turn around
  if (position > pathEnd) {
    direction = -1;
    position = pathEnd - (position - pathEnd)
  }
  // at the beginning of the path, we turn around
  if (position < pathStart) {
    direction = 1;
    position = pathStart + (pathStart - position)
  }
  // update the distance walked so the stride matches
  distanceWalked += walkedNow
  drawEverything(c)
}
function startStopWalking() {
  walking = !walking;
  // reset timer
  elapsedTime();
  // update the text of the button
  byId("startstop").textContent = walking ? "Stop walking" : "Start walking";
  return true;
}
function setSpeed(val) {
  speed = val;
}
// helpful function for finding elements in the document
function byId(id) {
    return document.getElementById(id);
}



//
// these are helpful drawing functions for the stick figures
//

// draw a line on canvas context `c`, from point x1,y1 to point x2,y2
function line(c, x1, y1, x2, y2) {
  c.beginPath();
  c.moveTo(x1,y1);
  c.lineTo(x2,y2);
  c.stroke();
}

// draw a circle on canvas context `c`, centered on x,y, with radius r
// also fill the circle with white (so it's not transparent)
function circle(c, x, y, r) {
  c.beginPath()
  c.fillStyle="#fff"
  c.arc(x, y, r, 0, 6.3, false); // 6.3 is bigger than 2π so the arc will be a whole circle
  c.fill()
  c.stroke()
}


// draw an arc on canvas context `c`, cenetered on x,y, with radius r, from angleStart to angleEnd
function arc(c, x, y, r, angleStart, angleEnd) {
  c.beginPath();
  c.arc(x, y, r, angleStart, angleEnd, false)
  c.stroke();
}

// convert from degrees to radians
function rad(x) {
  return x * Math.PI / 180;
}

// convert from radians to degrees
function deg(x) {
  return x / Math.PI * 180;
}


// this function computes the coordinates of a given mouse event in the element
// it returns an object like {left: 100, top: 312}
function getClickCoordinates(event, element) {
  var rect = element.getBoundingClientRect()

  return { left: event.clientX - rect.left, top: event.clientY - rect.top }
}


// this function measures time elapsed between subsequent invocations, in seconds (or fractions of a second)
// this is useful for smooth animations
var lastTime = null;
function elapsedTime() {
  if (!lastTime) lastTime = Date.now()
  var currentTime = Date.now()
  var timeElapsed = currentTime - lastTime
  lastTime = currentTime
  return timeElapsed/1000
}

// stop measuring the flow of time
// in other words, the next time elapsedTime() is called, it returns 0 and starts measuring time again
// this is useful when the stick figure is stopped
function stopTime() {
  lastTime = 0;
}

// throttling function calls, by Remy Sharp
// http://remysharp.com/2010/07/21/throttling-function-calls/
var throttle = function (fn, delay) {
    var timer = null;
    return function () {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            fn.apply(context, args);
        }, delay);
    };
};


//
// these are the final functions for drawing a stick figure
//


  // draws a stick figure on the canvas
  // the stick figure will stand over the point X,Y
  // facing is a degree in which the stick figure is facing: 0 is to the right, 90 is towards us
  // distance is the distance walked; a new step starts every 40 pixels
  function drawStickFigure(c, x, y, facing, distance) {
    // because of the way the canvas works, it's best to draw lines at half-pixels
    x+=.5
    y+=.5

    // the arms and the legs look the same
    drawLimbs(c, x, y, distance)    // legs
    drawLimbs(c, x, y-40, distance) // arms

    // body is just a line
    line(c, x, y-40, x, y-80)       // body

    // head is a circle with eyes and a smile
    circle(c, x, y-100, 20)         // head
    drawFace(c, x, y-100, facing)   // face

    // draws the limbs; with the `distance` parameter, the limbs are drawn as an in-motion snapshot
    function drawLimbs(c, x, y, distance) {

      // at rest, the legs are spread by 2*20 pixels (the front leg is 20 pixels in front, the back leg is 20 pixels behind)
      var spread = 20;

      // if we have a distance parameter, we are moving (otherwise we are at rest)
      if (distance !== undefined) {
        // this is how we do walking: (we talk about legs, but arms behave the same)
        // when walking, the stick figure starts at distance 0 with legs spread, then the front leg stays put on the ground
        // every step is 40 pixels long
        // after traveling 5 pixels, the front leg is only 15 pixels in the front; and the back leg is catching up, also by 5 pixels
        // so after traveling 20 pixels, the front legs is right below you, and so is the back leg
        // and after traveling 20 pixels more, the formerly front leg is now the back leg, and vice versa
        // therefore, to spread the legs appropriately for the distance, we count 20 pixels minus our distance from the last full step

        // since we walk backwards the same as fowards, a negative distance is the same as positive, which makes the maths easier
        if (distance < 0) distance = -distance;

        // compute where in a step we are
        var thisStep = distance % 40;

        spread = 20-thisStep;
      }

      line(c, x-spread, y, x, y-40)
      line(c, x+spread, y, x, y-40)
    }

    // this function is the same as before
    function drawFace(c, x, y, facing) {
      // if the `facing` parameter is not given, the stick figure will face towards us
      if (facing === undefined) facing = 90;

      // make sure the `facing` parameter is between 0 and 360
      facing = facing % 360; // that's like the mathematical remainder after a division
      if (facing < 0) facing += 360;

      if (facing > 180) return;  // facing away from us, don't draw a face

      // we'll fake the turning of the face by shifting the eyes and the smile by an offset of up to 10 pixels
      var faceOffset = 0;
      if (facing <= 180) {
        faceOffset = (facing-90)/9;
      }

      circle(c, x-7-faceOffset, y-5, 1)  // 7 is distance from center, 5 is how high the eyes are from the head's center, 1 is eye size
      circle(c, x+7-faceOffset, y-5, 1)

      // decrease the smile size here
      var smileSize = 70; // size of smile in degrees of angle; 360 would be a full circle
      var startAngle = rad(90-smileSize/2-2*faceOffset)
      var endAngle   = rad(90+smileSize/2-2*faceOffset)
      arc(c, x-faceOffset, y, 12, startAngle, endAngle) // 12 is the radius of the smile circle
    }
  }
