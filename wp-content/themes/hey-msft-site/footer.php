<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hey_MSFT_Site
 */

?>
		</div>
		<?php wp_footer(); ?>
		<script type="text/javascript">
			if (screen.width > 1138) {
				// GLOBAL
				// START HORIZONTAL SCROLL FUNCTIONALITY
				gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

				const sections = gsap.utils.toArray(".inner-page");
				const numSections = sections.length - 1;
				const snapVal = 1 / numSections;
				let lastIndex = 0;
				const navLis = document.querySelectorAll("nav.dot-nav li");

				gsap.to(sections, {
				  xPercent: -100 * numSections,
				  ease: "none",
				  scrollTrigger: {
					trigger: ".main-wrapper",
					pin: true,
					scrub: true,
					markers: true,
					snap: {
						snapTo: snapVal,
						duration: {min: 0.1, max: 0.3},
						delay: 0,
						ease: "Power3.inOut"
					},
					// duration: 0.1,
                    // stagger: 6,
					end: () => "+=" + (document.querySelector(".main-wrapper").offsetWidth - innerWidth),
					onUpdate: (self) => {
					  const newIndex = Math.round(self.progress / snapVal);
					  if(newIndex !== lastIndex) {
						navLis[lastIndex].classList.remove("is-active");
						navLis[newIndex].classList.add("is-active");
						lastIndex = newIndex;
					  }
					}
				  }
				});
				navLis.forEach((anchor, i) => {
				  anchor.addEventListener("click", function(e) {
					gsap.to(window, {
					  scrollTo: {
						y: i * innerWidth,
						autoKill: false
					  },
					  duration: 1.5
					});
				  });
				});
				
				jQuery("#rightArrow").on('click', function () {
					let index = jQuery("ul.dot-ul li.is-active").index() == 7 
					? 0 : jQuery("ul.dot-ul li.is-active").index() + 1;
					gsap.to(window, {
					  scrollTo: {
						y: index * innerWidth,
						autoKill: false
					  }
					});
				});
				jQuery("#leftArrow").on('click', function () {
					let index = jQuery("ul.dot-ul li.is-active").index() == 0 
					? 7 : jQuery("ul.dot-ul li.is-active").index() - 1;
					gsap.to(window, {
					  scrollTo: {
						y: index * innerWidth,
						autoKill: false
					  }
					});
				});
				// END HORIZONTAL SCROLL FUNCTIONALITY
				
				// START REVEAL ANIMATIONS
				function hide(elem) {
				  gsap.set(elem, {autoAlpha: 0});
				}
				function show(elem) {
				  gsap.set(elem, {autoAlpha: 1});
				}
				
				function animateFromTopOne(elem, direction) {
				  direction = direction | -1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 1,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				function animateFromTopOneEnd(elem, direction) {
				  direction = direction | 1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 1}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 0,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				document.addEventListener("DOMContentLoaded", function() {
				  gsap.utils.toArray(".reveal-top1").forEach(function(elem) {
					hide(elem); // assure that the element is hidden when scrolled into view
					ScrollTrigger.create({
					  trigger: elem,
					  start: innerWidth,
					  onEnter: function() { animateFromTopOne(elem) },
					  onEnterBack: function() { animateFromTopOneEnd(elem) }
					});
				  });
				});
				
				function animateFromTopTwo(elem, direction) {
				  direction = direction | -1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 1,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				function animateFromTopTwoEnd(elem, direction) {
				  direction = direction | 1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 1}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 0,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				document.addEventListener("DOMContentLoaded", function() {
				  gsap.utils.toArray(".reveal-top2").forEach(function(elem) {
					hide(elem); // assure that the element is hidden when scrolled into view
					ScrollTrigger.create({
					  trigger: elem,
					  start: innerWidth * 2,
					  onEnter: function() { animateFromTopTwo(elem); tl.pause().seek(0).play(); },
					  onEnterBack: function() { animateFromTopTwoEnd(elem); },
					});
				  });
				});

				const animDuration = 1;
				const tl = gsap.timeline();
				tl
					.to('#page-104 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-eb583eb', {duration: animDuration, x: 135, y: 402, scale: 0.7, ease: "power1.easeInOut"}, "+=1.5")

					.to('#page-104 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-e4ace75', {duration: animDuration, x: 306, y: -469, scale: 1.9, ease: "power1.easeInOut"}, '-='+animDuration)

					.to('#page-104 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-4f20d25', {duration: animDuration, x: -497, y: 0, scale: 0.7, ease: "power1.easeInOut"}, '-='+animDuration)
					
					.to('#page-104 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-eb583eb', {duration: animDuration, x: -327, y: 364, scale: 0.53, ease: "power1.easeInOut"}, '+=2')

					.to('#page-104 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-e4ace75', {duration: animDuration, x: 448, y: 0, scale: 1.35, ease: "power1.easeInOut"}, '-='+animDuration)

					.to('#page-104 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-4f20d25', {duration: animDuration, x: -157, y: -431, scale: 1.26, ease: "power1.easeInOut"}, '-='+animDuration)
				;
				tl.pause().seek(0);
				
				function animateFromTopThree(elem, direction) {
				  direction = direction | -1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 1,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				function animateFromTopThreeEnd(elem, direction) {
				  direction = direction | 1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 1}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 0,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				document.addEventListener("DOMContentLoaded", function() {
				  gsap.utils.toArray(".reveal-top3").forEach(function(elem) {
					hide(elem); // assure that the element is hidden when scrolled into view
					ScrollTrigger.create({
					  trigger: elem,
					  start: innerWidth * 3,
					  onEnter: function() { animateFromTopThree(elem) },
					  onEnterBack: function() { animateFromTopThreeEnd(elem) }
					});
				  });
				});
				
				function animateFromTopFour(elem, direction) {
				  direction = direction | -1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 1,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				function animateFromTopFourEnd(elem, direction) {
				  direction = direction | 1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 1}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 0,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				document.addEventListener("DOMContentLoaded", function() {
				  gsap.utils.toArray(".reveal-top4").forEach(function(elem) {
					hide(elem); // assure that the element is hidden when scrolled into view
					ScrollTrigger.create({
					  trigger: elem,
					  start: innerWidth * 4,
					  onEnter: function() { animateFromTopFour(elem) },
					  onEnterBack: function() { animateFromTopFourEnd(elem) }
					});
				  });
				});
				
				function animateFromTopFive(elem, direction) {
				  direction = direction | -1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 1,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				function animateFromTopFiveEnd(elem, direction) {
				  direction = direction | 1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 1}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 0,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				document.addEventListener("DOMContentLoaded", function() {
				  gsap.utils.toArray(".reveal-top5").forEach(function(elem) {
					hide(elem); // assure that the element is hidden when scrolled into view
					ScrollTrigger.create({
					  trigger: elem,
					  start: innerWidth * 5,
					  onEnter: function() { animateFromTopFive(elem); tlM.pause().seek(0).play(); },
					  onEnterBack: function() { animateFromTopFiveEnd(elem) }
					});
				  });
				});

				const animDurationM = 1;
				const tlM = gsap.timeline();
				tlM
					.to('#page-189 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-eb583eb', {duration: animDurationM, x: 238, y: 317, scale: 0.39, ease: "power1.easeInOut"}, "+=1.5")

					.to('#page-189 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-aec6136', {duration: animDurationM, x: -591, y: 0, scale: 1.1, ease: "power1.easeInOut"}, '-='+animDurationM)

					.to('#page-189 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-4f20d25', {duration: animDurationM, x: 492, y: -445, scale: 2.6, ease: "power1.easeInOut"}, '-='+animDurationM)

					.to('#page-189 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-eb583eb', {duration: animDurationM, x: -314, y: 315, scale: 0.38, ease: "power1.easeInOut"}, "+=2")

					.to('#page-189 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-aec6136', {duration: animDurationM, x: -252, y: -475, scale: 2.8, ease: "power1.easeInOut"}, '-='+animDurationM)

					.to('#page-189 .elementor-element-8b830b7 .elementor-widget-wrap .elementor-element.elementor-element-4f20d25', {duration: animDurationM, x: 517, y: 1, scale: 1, ease: "power1.easeInOut"}, '-='+animDurationM)

				;
				tlM.pause().seek(0);
				
				function animateFromTopSix(elem, direction) {
				  direction = direction | -1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 1,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				function animateFromTopSixEnd(elem, direction) {
				  direction = direction | 1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 1}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 0,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				document.addEventListener("DOMContentLoaded", function() {
				  gsap.utils.toArray(".reveal-top6").forEach(function(elem) {
					hide(elem); // assure that the element is hidden when scrolled into view
					ScrollTrigger.create({
					  trigger: elem,
					  start: innerWidth * 6,
					  onEnter: function() { animateFromTopSix(elem) },
					  onEnterBack: function() { animateFromTopSixEnd(elem) }
					});
				  });
				});
				
				function animateFromTopSeven(elem, direction) {
				  direction = direction | -1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 1,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				function animateFromTopSevenEnd(elem, direction) {
				  direction = direction | 1;
				  var x = 0,
					  y = direction * 100;
				  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 1}, {
					duration: 0.8,
					x: 0,
					y: 0,
					autoAlpha: 0,
					ease: "expo",
					overwrite: "auto"
				  });
				}
				document.addEventListener("DOMContentLoaded", function() {
				  gsap.utils.toArray(".reveal-top7").forEach(function(elem) {
					hide(elem); // assure that the element is hidden when scrolled into view
					ScrollTrigger.create({
					  trigger: elem,
					  start: innerWidth * 7,
					  onEnter: function() { animateFromTopSeven(elem) },
					  onEnterBack: function() { animateFromTopSevenEnd(elem) }
					});
				  });
				});
				// END REVEAL ANIMATIONS
				// FIRST PAGE
				let canvas, ctx;
				let render, init;
				let blob;

				class Blob {
				  constructor() {
					this.points = [];
				  }
				  
				  init() {
					for(let i = 0; i < this.numPoints; i++) {
					  let point = new Point(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render() {
					let canvas = this.canvas;
					let ctx = this.ctx;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoints;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx.clearRect(0,0,canvas.width,canvas.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx.beginPath();
					ctx.moveTo(center.x, center.y);
					ctx.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx.lineTo(p2.x, p2.y);

					  ctx.fillStyle = '#f26639';
					  // ctx.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx.lineTo(_p2.x, _p2.y);

					// ctx.closePath();
					ctx.fillStyle = this.color;
					ctx.fill();
					ctx.strokeStyle = '#f26639';
					// ctx.stroke();
					
				/*
					ctx.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas = canvas;
					  this.ctx = this._canvas.getContext('2d');
					}
				  }
				  get canvas() {
					return this._canvas;
				  }
				  
				  set numPoints(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoints() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoints;
				  }
				  
				  get center() {
					return { x: this.canvas.width * this.position.x, y: this.canvas.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint, rightPoint) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint.radialEffect - this.radialEffect ) + ( rightPoint.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob = new Blob;

				init = function() {
				  canvas = document.createElement('canvas');
				  canvas.setAttribute('id', 'first-page-orange-ball');
				  canvas.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas);

				  let resize = function() {
					canvas.width = 600;
					canvas.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob.color = '#77FF00';
					} else if(dist > blob.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint = null;
					  let distanceFromPoint = 100;
					  
					  blob.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint) {
						  // console.log(point.azimuth, angle, distanceFromPoint);
						  nearestPoint = point;
						  distanceFromPoint = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint) {
						let strength = { x: oldMousePoint.x - e.clientX, y: oldMousePoint.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint.x = e.clientX;
					oldMousePoint.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob.canvas = canvas;
				  blob.init();
				  blob.render();
				}

				init();
				
				// SECOND PAGE
				let canvas2, ctx2;
				let render2, init2;
				let blob2;

				class Blob2 {
				  constructor() {
					this.points = [];
				  }
				  
				  init2() {
					for(let i = 0; i < this.numPoint2s; i++) {
					  let point = new Point2(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render2() {
					let canvas2 = this.canvas2;
					let ctx2 = this.ctx2;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoint2s;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx2.clearRect(0,0,canvas2.width,canvas2.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx2.beginPath();
					ctx2.moveTo(center.x, center.y);
					ctx2.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx2.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx2.lineTo(p2.x, p2.y);

					  ctx2.fillStyle = '#f26639';
					  // ctx2.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx2.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx2.lineTo(_p2.x, _p2.y);

					// ctx2.closePath();
					ctx2.fillStyle = this.color;
					ctx2.fill();
					ctx2.strokeStyle = '#f26639';
					// ctx2.stroke();
					
				/*
					ctx2.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx2.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render2.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point2) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas2(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas2 = canvas2;
					  this.ctx2 = this._canvas2.getContext('2d');
					}
				  }
				  get canvas2() {
					return this._canvas2;
				  }
				  
				  set numPoint2s(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoint2s() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoint2s;
				  }
				  
				  get center() {
					return { x: this.canvas2.width * this.position.x, y: this.canvas2.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point2 {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint2, rightPoint2) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint2.radialEffect - this.radialEffect ) + ( rightPoint2.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob2 = new Blob2;

				init2 = function() {
				  canvas2 = document.createElement('canvas');
				  canvas2.setAttribute('id', 'second-page-orange-ball');
				  canvas2.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas2);

				  let resize = function() {
					canvas2.width = 600;
					canvas2.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint2 = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob2.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob2.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob2.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob2.color = '#77FF00';
					} else if(dist > blob2.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob2.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint2 = null;
					  let distanceFromPoint2 = 100;
					  
					  blob2.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint2) {
						  // console.log(point.azimuth, angle, distanceFromPoint2);
						  nearestPoint2 = point;
						  distanceFromPoint2 = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint2) {
						let strength = { x: oldMousePoint2.x - e.clientX, y: oldMousePoint2.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint2.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint2.x = e.clientX;
					oldMousePoint2.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob2.canvas2 = canvas2;
				  blob2.init2();
				  blob2.render2();
				}

				init2();

				// THIRD PAGE
				let canvas3, ctx3;
				let render3, init3;
				let blob3;

				class Blob3 {
				  constructor() {
					this.points = [];
				  }
				  
				  init3() {
					for(let i = 0; i < this.numPoint3s; i++) {
					  let point = new Point3(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render3() {
					let canvas3 = this.canvas3;
					let ctx3 = this.ctx3;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoint3s;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx3.clearRect(0,0,canvas3.width,canvas3.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx3.beginPath();
					ctx3.moveTo(center.x, center.y);
					ctx3.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx3.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx3.lineTo(p2.x, p2.y);

					  ctx3.fillStyle = '#f26639';
					  // ctx3.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx3.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx3.lineTo(_p2.x, _p2.y);

					// ctx3.closePath();
					ctx3.fillStyle = this.color;
					ctx3.fill();
					ctx3.strokeStyle = '#f26639';
					// ctx3.stroke();
					
				/*
					ctx3.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx3.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render3.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point3) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas3(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas3 = canvas3;
					  this.ctx3 = this._canvas3.getContext('2d');
					}
				  }
				  get canvas3() {
					return this._canvas3;
				  }
				  
				  set numPoint3s(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoint3s() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoint3s;
				  }
				  
				  get center() {
					return { x: this.canvas3.width * this.position.x, y: this.canvas3.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point3 {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint3, rightPoint3) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint3.radialEffect - this.radialEffect ) + ( rightPoint3.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob3 = new Blob3;

				init3 = function() {
				  canvas3 = document.createElement('canvas');
				  canvas3.setAttribute('id', 'third-page-orange-ball');
				  canvas3.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas3);

				  let resize = function() {
					canvas3.width = 600;
					canvas3.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint3 = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob3.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob3.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob3.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob3.color = '#77FF00';
					} else if(dist > blob3.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob3.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint3 = null;
					  let distanceFromPoint3 = 100;
					  
					  blob3.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint3) {
						  // console.log(point.azimuth, angle, distanceFromPoint3);
						  nearestPoint3 = point;
						  distanceFromPoint3 = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint3) {
						let strength = { x: oldMousePoint3.x - e.clientX, y: oldMousePoint3.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint3.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint3.x = e.clientX;
					oldMousePoint3.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob3.canvas3 = canvas3;
				  blob3.init3();
				  blob3.render3();
				}

				init3();

				// FOURTH PAGE
				let canvas4, ctx4;
				let render4, init4;
				let blob4;

				class Blob4 {
				  constructor() {
					this.points = [];
				  }
				  
				  init4() {
					for(let i = 0; i < this.numPoint4s; i++) {
					  let point = new Point4(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render4() {
					let canvas4 = this.canvas4;
					let ctx4 = this.ctx4;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoint4s;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx4.clearRect(0,0,canvas4.width,canvas4.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx4.beginPath();
					ctx4.moveTo(center.x, center.y);
					ctx4.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx4.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx4.lineTo(p2.x, p2.y);

					  ctx4.fillStyle = '#f26639';
					  // ctx4.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx4.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx4.lineTo(_p2.x, _p2.y);

					// ctx4.closePath();
					ctx4.fillStyle = this.color;
					ctx4.fill();
					ctx4.strokeStyle = '#f26639';
					// ctx4.stroke();
					
				/*
					ctx4.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx4.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render4.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point4) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas4(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas4 = canvas4;
					  this.ctx4 = this._canvas4.getContext('2d');
					}
				  }
				  get canvas4() {
					return this._canvas4;
				  }
				  
				  set numPoint4s(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoint4s() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoint4s;
				  }
				  
				  get center() {
					return { x: this.canvas4.width * this.position.x, y: this.canvas4.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point4 {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint4, rightPoint4) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint4.radialEffect - this.radialEffect ) + ( rightPoint4.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob4 = new Blob4;

				init4 = function() {
				  canvas4 = document.createElement('canvas');
				  canvas4.setAttribute('id', 'fourth-page-orange-ball');
				  canvas4.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas4);

				  let resize = function() {
					canvas4.width = 600;
					canvas4.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint4 = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob4.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob4.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob4.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob4.color = '#77FF00';
					} else if(dist > blob4.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob4.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint4 = null;
					  let distanceFromPoint4 = 100;
					  
					  blob4.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint4) {
						  // console.log(point.azimuth, angle, distanceFromPoint4);
						  nearestPoint4 = point;
						  distanceFromPoint4 = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint4) {
						let strength = { x: oldMousePoint4.x - e.clientX, y: oldMousePoint4.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint4.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint4.x = e.clientX;
					oldMousePoint4.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob4.canvas4 = canvas4;
				  blob4.init4();
				  blob4.render4();
				}

				init4();

				// FIFTH PAGE
				let canvas5, ctx5;
				let render5, init5;
				let blob5;

				class Blob5 {
				  constructor() {
					this.points = [];
				  }
				  
				  init5() {
					for(let i = 0; i < this.numPoint5s; i++) {
					  let point = new Point5(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render5() {
					let canvas5 = this.canvas5;
					let ctx5 = this.ctx5;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoint5s;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx5.clearRect(0,0,canvas5.width,canvas5.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx5.beginPath();
					ctx5.moveTo(center.x, center.y);
					ctx5.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx5.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx5.lineTo(p2.x, p2.y);

					  ctx5.fillStyle = '#f26639';
					  // ctx5.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx5.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx5.lineTo(_p2.x, _p2.y);

					// ctx5.closePath();
					ctx5.fillStyle = this.color;
					ctx5.fill();
					ctx5.strokeStyle = '#f26639';
					// ctx5.stroke();
					
				/*
					ctx5.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx5.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render5.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point5) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas5(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas5 = canvas5;
					  this.ctx5 = this._canvas5.getContext('2d');
					}
				  }
				  get canvas5() {
					return this._canvas5;
				  }
				  
				  set numPoint5s(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoint5s() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoint5s;
				  }
				  
				  get center() {
					return { x: this.canvas5.width * this.position.x, y: this.canvas5.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point5 {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint5, rightPoint5) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint5.radialEffect - this.radialEffect ) + ( rightPoint5.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob5 = new Blob5;

				init5 = function() {
				  canvas5 = document.createElement('canvas');
				  canvas5.setAttribute('id', 'fifth-page-orange-ball');
				  canvas5.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas5);

				  let resize = function() {
					canvas5.width = 600;
					canvas5.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint5 = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob5.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob5.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob5.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob5.color = '#77FF00';
					} else if(dist > blob5.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob5.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint5 = null;
					  let distanceFromPoint5 = 100;
					  
					  blob5.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint5) {
						  // console.log(point.azimuth, angle, distanceFromPoint5);
						  nearestPoint5 = point;
						  distanceFromPoint5 = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint5) {
						let strength = { x: oldMousePoint5.x - e.clientX, y: oldMousePoint5.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint5.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint5.x = e.clientX;
					oldMousePoint5.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob5.canvas5 = canvas5;
				  blob5.init5();
				  blob5.render5();
				}

				init5();

				// SIXTH PAGE
				let canvas6, ctx6;
				let render6, init6;
				let blob6;

				class Blob6 {
				  constructor() {
					this.points = [];
				  }
				  
				  init6() {
					for(let i = 0; i < this.numPoint6s; i++) {
					  let point = new Point6(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render6() {
					let canvas6 = this.canvas6;
					let ctx6 = this.ctx6;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoint6s;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx6.clearRect(0,0,canvas6.width,canvas6.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx6.beginPath();
					ctx6.moveTo(center.x, center.y);
					ctx6.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx6.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx6.lineTo(p2.x, p2.y);

					  ctx6.fillStyle = '#f26639';
					  // ctx6.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx6.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx6.lineTo(_p2.x, _p2.y);

					// ctx6.closePath();
					ctx6.fillStyle = this.color;
					ctx6.fill();
					ctx6.strokeStyle = '#f26639';
					// ctx6.stroke();
					
				/*
					ctx6.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx6.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render6.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point6) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas6(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas6 = canvas6;
					  this.ctx6 = this._canvas6.getContext('2d');
					}
				  }
				  get canvas6() {
					return this._canvas6;
				  }
				  
				  set numPoint6s(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoint6s() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoint6s;
				  }
				  
				  get center() {
					return { x: this.canvas6.width * this.position.x, y: this.canvas6.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point6 {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint6, rightPoint6) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint6.radialEffect - this.radialEffect ) + ( rightPoint6.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob6 = new Blob6;

				init6 = function() {
				  canvas6 = document.createElement('canvas');
				  canvas6.setAttribute('id', 'sixth-page-orange-ball');
				  canvas6.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas6);

				  let resize = function() {
					canvas6.width = 600;
					canvas6.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint6 = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob6.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob6.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob6.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob6.color = '#77FF00';
					} else if(dist > blob6.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob6.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint6 = null;
					  let distanceFromPoint6 = 100;
					  
					  blob6.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint6) {
						  // console.log(point.azimuth, angle, distanceFromPoint6);
						  nearestPoint6 = point;
						  distanceFromPoint6 = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint6) {
						let strength = { x: oldMousePoint6.x - e.clientX, y: oldMousePoint6.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint6.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint6.x = e.clientX;
					oldMousePoint6.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob6.canvas6 = canvas6;
				  blob6.init6();
				  blob6.render6();
				}

				init6();
				
				// SEVENTH PAGE
				let canvas7, ctx7;
				let render7, init7;
				let blob7;

				class Blob7 {
				  constructor() {
					this.points = [];
				  }
				  
				  init7() {
					for(let i = 0; i < this.numPoint7s; i++) {
					  let point = new Point7(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render7() {
					let canvas7 = this.canvas7;
					let ctx7 = this.ctx7;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoint7s;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx7.clearRect(0,0,canvas7.width,canvas7.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx7.beginPath();
					ctx7.moveTo(center.x, center.y);
					ctx7.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx7.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx7.lineTo(p2.x, p2.y);

					  ctx7.fillStyle = '#f26639';
					  // ctx7.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx7.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx7.lineTo(_p2.x, _p2.y);

					// ctx7.closePath();
					ctx7.fillStyle = this.color;
					ctx7.fill();
					ctx7.strokeStyle = '#f26639';
					// ctx7.stroke();
					
				/*
					ctx7.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx7.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render7.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point7) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas7(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas7 = canvas7;
					  this.ctx7 = this._canvas7.getContext('2d');
					}
				  }
				  get canvas7() {
					return this._canvas7;
				  }
				  
				  set numPoint7s(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoint7s() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoint7s;
				  }
				  
				  get center() {
					return { x: this.canvas7.width * this.position.x, y: this.canvas7.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point7 {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint7, rightPoint7) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint7.radialEffect - this.radialEffect ) + ( rightPoint7.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob7 = new Blob7;

				init7 = function() {
				  canvas7 = document.createElement('canvas');
				  canvas7.setAttribute('id', 'seventh-page-orange-ball');
				  canvas7.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas7);

				  let resize = function() {
					canvas7.width = 600;
					canvas7.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint7 = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob7.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob7.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob7.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob7.color = '#77FF00';
					} else if(dist > blob7.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob7.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint7 = null;
					  let distanceFromPoint7 = 100;
					  
					  blob7.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint7) {
						  // console.log(point.azimuth, angle, distanceFromPoint7);
						  nearestPoint7 = point;
						  distanceFromPoint7 = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint7) {
						let strength = { x: oldMousePoint7.x - e.clientX, y: oldMousePoint7.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint7.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint7.x = e.clientX;
					oldMousePoint7.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob7.canvas7 = canvas7;
				  blob7.init7();
				  blob7.render7();
				}

				init7();
				
				// EIGHTH PAGE
				let canvas8, ctx8;
				let render8, init8;
				let blob8;

				class Blob8 {
				  constructor() {
					this.points = [];
				  }
				  
				  init8() {
					for(let i = 0; i < this.numPoint8s; i++) {
					  let point = new Point8(this.divisional * ( i + 1 ), this);
					  // point.acceleration = -1 + Math.random() * 2;
					  this.push(point);
					}
				  }
				  
				  render8() {
					let canvas8 = this.canvas8;
					let ctx8 = this.ctx8;
					let position = this.position;
					let pointsArray = this.points;
					let radius = this.radius;
					let points = this.numPoint8s;
					let divisional = this.divisional;
					let center = this.center;
					
					ctx8.clearRect(0,0,canvas8.width,canvas8.height);
					
					pointsArray[0].solveWith(pointsArray[points-1], pointsArray[1]);

					let p0 = pointsArray[points-1].position;
					let p1 = pointsArray[0].position;
					let _p2 = p1;

					ctx8.beginPath();
					ctx8.moveTo(center.x, center.y);
					ctx8.moveTo( (p0.x + p1.x) / 2, (p0.y + p1.y) / 2 );

					for(let i = 1; i < points; i++) {
					  
					  pointsArray[i].solveWith(pointsArray[i-1], pointsArray[i+1] || pointsArray[0]);

					  let p2 = pointsArray[i].position;
					  var xc = (p1.x + p2.x) / 2;
					  var yc = (p1.y + p2.y) / 2;
					  ctx8.quadraticCurveTo(p1.x, p1.y, xc, yc);
					  // ctx8.lineTo(p2.x, p2.y);

					  ctx8.fillStyle = '#f26639';
					  // ctx8.fillRect(p1.x-2.5, p1.y-2.5, 5, 5);

					  p1 = p2;
					}

					var xc = (p1.x + _p2.x) / 2;
					var yc = (p1.y + _p2.y) / 2;
					ctx8.quadraticCurveTo(p1.x, p1.y, xc, yc);
					// ctx8.lineTo(_p2.x, _p2.y);

					// ctx8.closePath();
					ctx8.fillStyle = this.color;
					ctx8.fill();
					ctx8.strokeStyle = '#f26639';
					// ctx8.stroke();
					
				/*
					ctx8.fillStyle = '#000000';
					if(this.mousePos) {
					  let angle = Math.atan2(this.mousePos.y, this.mousePos.x) + Math.PI;
					  ctx8.fillRect(center.x + Math.cos(angle) * this.radius, center.y + Math.sin(angle) * this.radius, 5, 5);
					}
				*/
					requestAnimationFrame(this.render8.bind(this));
				  }
				  
				  push(item) {
					if(item instanceof Point8) {
					  this.points.push(item);
					}
				  }
				  
				  set color(value) {
					this._color = value;
				  }
				  get color() {
					return this._color || '#f26639';
				  }
				  
				  set canvas8(value) {
					if(value instanceof HTMLElement && value.tagName.toLowerCase() === 'canvas') {
					  this._canvas8 = canvas8;
					  this.ctx8 = this._canvas8.getContext('2d');
					}
				  }
				  get canvas8() {
					return this._canvas8;
				  }
				  
				  set numPoint8s(value) {
					if(value > 2) {
					  this._points = value;
					}
				  }
				  get numPoint8s() {
					return this._points || 32;
				  }
				  
				  set radius(value) {
					if(value > 0) {
					  this._radius = value;
					}
				  }
				  get radius() {
					return this._radius || 150;
				  }
				  
				  set position(value) {
					if(typeof value == 'object' && value.x && value.y) {
					  this._position = value;
					}
				  }
				  get position() {
					return this._position || { x: 0.5, y: 0.5 };
				  }
				  
				  get divisional() {
					return Math.PI * 2 / this.numPoint8s;
				  }
				  
				  get center() {
					return { x: this.canvas8.width * this.position.x, y: this.canvas8.height * this.position.y };
				  }
				  
				  set running(value) {
					this._running = value === true;
				  }
				  get running() {
					return this.running !== false;
				  }
				}

				class Point8 {
				  constructor(azimuth, parent) {
					this.parent = parent;
					this.azimuth = Math.PI - azimuth;
					this._components = { 
					  x: Math.cos(this.azimuth),
					  y: Math.sin(this.azimuth)
					};
					
					this.acceleration = -0.3 + Math.random() * 0.6;
				  }
				  
				  solveWith(leftPoint8, rightPoint8) {
					this.acceleration = (-0.3 * this.radialEffect + ( leftPoint8.radialEffect - this.radialEffect ) + ( rightPoint8.radialEffect - this.radialEffect )) * this.elasticity - this.speed * this.friction;
				  }
				  
				  set acceleration(value) {
					if(typeof value == 'number') {
					  this._acceleration = value;
					  this.speed += this._acceleration * 2;
					}
				  }
				  get acceleration() {
					return this._acceleration || 0;
				  }
				  
				  set speed(value) {
					if(typeof value == 'number') {
					  this._speed = value;
					  this.radialEffect += this._speed * 5;
					}
				  }
				  get speed() {
					return this._speed || 0;
				  }
				  
				  set radialEffect(value) {
					if(typeof value == 'number') {
					  this._radialEffect = value;
					}
				  }
				  get radialEffect() {
					return this._radialEffect || 0;
				  }
				  
				  get position() {
					return { 
					  x: this.parent.center.x + this.components.x * (this.parent.radius + this.radialEffect), 
					  y: this.parent.center.y + this.components.y * (this.parent.radius + this.radialEffect) 
					}
				  }
				  
				  get components() {
					return this._components;
				  }

				  set elasticity(value) {
					if(typeof value === 'number') {
					  this._elasticity = value;
					}
				  }
				  get elasticity() {
					return this._elasticity || 0.001;
				  }
				  set friction(value) {
					if(typeof value === 'number') {
					  this._friction = value;
					}
				  }
				  get friction() {
					return this._friction || 0.0085;
				  }
				}

				blob8 = new Blob8;

				init8 = function() {
				  canvas8 = document.createElement('canvas');
				  canvas8.setAttribute('id', 'eighth-page-orange-ball');
				  canvas8.setAttribute('touch-action', 'none');

				  document.body.appendChild(canvas8);

				  let resize = function() {
					canvas8.width = 600;
					canvas8.height = 600;
				  }
				  window.addEventListener('resize', resize);
				  resize();
				  
				  let oldMousePoint8 = { x: 0, y: 0};
				  let hover = false;
				  let mouseMove = function(e) {
					
					let pos = blob8.center;
					let diff = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					let dist = Math.sqrt((diff.x * diff.x) + (diff.y * diff.y));
					let angle = null;
					
					blob8.mousePos = { x: pos.x - e.clientX, y: pos.y - e.clientY };
					
					if(dist < blob8.radius && hover === false) {
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = true;
					  // blob8.color = '#77FF00';
					} else if(dist > blob8.radius && hover === true){ 
					  let vector = { x: e.clientX - pos.x, y: e.clientY - pos.y };
					  angle = Math.atan2(vector.y, vector.x);
					  hover = false;
					  blob8.color = null;
					}
					
					if(typeof angle == 'number') {
					  
					  let nearestPoint8 = null;
					  let distanceFromPoint8 = 100;
					  
					  blob8.points.forEach((point)=> {
						if(Math.abs(angle - point.azimuth) < distanceFromPoint8) {
						  // console.log(point.azimuth, angle, distanceFromPoint8);
						  nearestPoint8 = point;
						  distanceFromPoint8 = Math.abs(angle - point.azimuth);
						}
						
					  });
					  
					  if(nearestPoint8) {
						let strength = { x: oldMousePoint8.x - e.clientX, y: oldMousePoint8.y - e.clientY };
						strength = Math.sqrt((strength.x * strength.x) + (strength.y * strength.y)) * 10;
						if(strength > 100) strength = 100;
						nearestPoint8.acceleration = strength / 100 * (hover ? -1 : 1);
					  }
					}
					
					oldMousePoint8.x = e.clientX;
					oldMousePoint8.y = e.clientY;
				  }
				  // window.addEventListener('mousemove', mouseMove);
				  window.addEventListener('pointermove', mouseMove);
				  
				  blob8.canvas8 = canvas8;
				  blob8.init8();
				  blob8.render8();
				}

				init8();
			} else {
			}
		</script>
		<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8J557UQ3pFfHWLCKE5J2PsXFKWDuXV5o&v=3.exp&sensor=false&ver=4.4.2">
		</script>

		<script type="text/javascript">
			window.marker = null;

			function initialize() {
				var map;

				var maplocationelm = new google.maps.LatLng(47.614294, -122.317314);

				var style = [{
						"featureType": "all",
						"stylers": [{
								"saturation": -100
							}
						]
					}
				];

				var mapOptions = {
					// SET THE CENTER
					center: maplocationelm,

					// SET THE MAP STYLE & ZOOM LEVEL
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					zoom: 12,

					// SET THE BACKGROUND COLOUR
					backgroundColor: "#eeeeee",

					// REMOVE ALL THE CONTROLS EXCEPT ZOOM
					panControl: true,
					zoomControl: true,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.SMALL
					}

				}
				map = new google.maps.Map(document.getElementById('map'), mapOptions);

				// SET THE MAP TYPE
				var mapType = new google.maps.StyledMapType(style, {
					name: "Grayscale"
				});
				map.mapTypes.set('grey', mapType);
				map.setMapTypeId('grey');

				//CREATE A CUSTOM PIN ICON
				var marker_image = '<?php echo get_template_directory_uri(); ?>/images/map-pin01.png';
				var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

				marker = new google.maps.Marker({
					position: maplocationelm,
					map: map,
					icon: pinIcon,
					title: 'Hey,'
				});
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</body>
</html>