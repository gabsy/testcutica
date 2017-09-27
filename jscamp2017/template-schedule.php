<?php
/* Template Name: Schedule */
?>
<?php get_header();?>
<div class="content">
  <!--<section class="venue">
    <div class="block">
      <h2>Conference Schedule<span class="red-bullet">.</span> <span class="tagline">September 20, 2016</span></h2>
      
  </section>-->
  <section class="schedule">
                    <div class="block">
                        <h2>Conference Schedule<span class="red-bullet">.</span> <span class="tagline">September 19, 2017</span></h2>
                        
                        <ul class="schedule-table clearfix">
                            <li><dl>
                                <dt><span class="time">08:00 - 09:00</span> Welcome Coffee &amp; Registration</dt>
                                <dd class="description">Be sure to arrive early and grab your favourite seat!</dd>
                            </dl></li>

                            <li><dl>
                                <dt><span class="time">09:00 - 11:15</span> SESSION 1</dt>
                                <dd class="description clearfix">
                                     <a href="<?php echo get_bloginfo('url');?>/speakers#felix-palmer" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/felix_palmer.jpg" alt="Felix Palmer"></a>
                                   <h4>SAFARI IN SAFARI</h4><a href="<?php echo get_bloginfo('url');?>/speakers#felix-palmer">FELIX PALMER</a>
                                   <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                     WebGL is now widely available on desktop and mobile. When Apple announced support for WebGL in Safari, I decided to recreate the Safari logo in 3D to celebrate. This talk will cover the technical details on how something like this can be built using nothing but JavaScript. Using the THREE.js library, I'll show you how you can build up your own scenes from geometric primitives, apply materials, lighting and more to create compelling 3D experiences.
                                    </div>
                               </dd>

                                <dd class="description clearfix">
                                    <a href="<?php echo get_bloginfo('url');?>/speakers#constantin-dumitrescu" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/constantin_dumitrescu.jpg" alt="Constantin Dumitrescu"></a>
                                   <h4>MINIMAL APPLICATION DEVELOPMENT WITH JSONMVC</h4><a href="<?php echo get_bloginfo('url');?>/speakers">CONSTANTIN DUMITRESCU</a>
                                   <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                   You can write the same app in different languages, styles, frameworks or architecture. But beneath that jargon and abstractions one thing always remains the same. An essential bit that makes everything else superfluous. Join me in an insightful session that will empower you to write the most concise and abstraction-free application you'll ever build.
                                    </div>
                                </dd>
                                <dd class="description clearfix">
                                    <a href="<?php echo get_bloginfo('url');?>/speakers#michele-bertoli" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/michele_bertoli.jpg" alt="Michele Bertoli"></a>
                                   <h4>TEST LIKE IS 2017!</h4><a href="<?php echo get_bloginfo('url');?>/speakers">MICHELE BERTOLI</a>
                                   <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                     Testing UIs has always been a hard job. In the components era, there are new tools and solutions available that transform completely the way we approach testing. From snapshots, through end-to-end frameworks, to style guide testing. In this talk, we'll see some modern (and creative) testing solutions.
                                    </div>
                                </dd>
                            </dl>
                            </li>

                            <li><dl>
                                <dt><span class="time">11:15 - 11:45</span> Coffee Break</dt>
                            </dl></li>

                            <li><dl>
                                <dt><span class="time">11:45 - 13:15</span> SESSION 2</dt>
                                <dd class="description clearfix">
                                     <a href="<?php echo get_bloginfo('url');?>/speakers#pepijn-schoen" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/pepijn_schoen.jpg" alt="Pepijn Schoen"></a>
                                   <h4>CONTINUOUS DEPLOYMENT FOR SPAs</h4><a href="<?php echo get_bloginfo('url');?>/speakers">PEPIJN SCHOEN</a>
                                   <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                   Continuous integration, automated testing and continuous deployment are terms that found solid footing in back-end projects, but front-end seems to lag behind. With popular frameworks like Angular, Ember and React offering solid build and testing tools, it's high time to play catch-up. DeployJS and CI tools like Travis can help us get there in no time.
                                    </div>
                                </dd>

                                <dd class="description clearfix">
                                     <a href="<?php echo get_bloginfo('url');?>/speakers#claudia-hernandez" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/claudia_hernandez.jpg" alt="Claudia Hernandez"></a>
                                   <h4>DOWN THE RABBIT HOLE: JAVASCRIPT IN WONDERLAND</h4><a href="<?php echo get_bloginfo('url');?>/speakers">CLAUDIA HERNANDEZ</a>
                                   <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                     What even makes sense in Javascript ? For a language originally created in 10 days it surely has a lot of quirks and perks many JS developers are unaware of. Sometimes, it might even seem like we fell down the rabbit hole only to find that NaN is actually a Number, undefined can be defined, +!![] equals 1, Array.sort()may not work as you suspected and so much other nonsense that can trip any JS developer's mind.<br>

This talk is a collection of Javascript’s oddities and unexpected behaviors that hopefully will prevent some future headaches and help understand the language that we all love in a more deeper and meaningful way.
                                    </div>
                                </dd>
                            </dl>

                            </li>

                            <li><dl>
                                <dt><span class="time">13:15 - 14:15</span> Lunch</dt>
                                <dd class="description">One hour for lunch and networking.</dd>
                            </dl></li>

                             <li><dl>
                                <dt><span class="time">14:15 - 15:45</span> SESSION 3</dt>
                                <dd class="description clearfix">
                                  <a href="<?php echo get_bloginfo('url');?>/speakers#michelle-bu" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/michelle_bu.jpg" alt="Michelle Bu"></a>
                                   <h4>TYPING AND MATH IN JAVASCRIPT</h4><a href="<?php echo get_bloginfo('url');?>/speakers">MICHELLE BU</a>
                                   <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                     Primitive data types and type coercion in JavaScript are unintuitive
and limited. JavaScript has caused hours of pain and debugging even
for the most experienced developers. We've all seen sneaky
"undefined"s lurking in the corners of our UIs...and why is it that 16
+ 'foo' is '16foo'—that's not what we learned in math. In this talk,
we'll explore how we can take new tools like Flowtype, add some simple
math, and emerge with a safer JavaScript programming environment.

                                </div>
                                </dd>

                                <dd class="description clearfix">
                                    <a href="<?php echo get_bloginfo('url');?>/speakers#alessandro-cinelli" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/alessandro_cinelli.jpg" alt="Alessandro Cinelli"></a>
                                   <h4>THE EVOLUTION OF ASYNCHRONOUS JAVASCRIPT</h4><a href="<?php echo get_bloginfo('url');?>/speakers">ALESSANDRO CINELLI</a>
                                   <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                     One of JavaScript’s strengths is how it handles asynchrony. Async is one of the most important and often misunderstood part of Javascript or any other language. We will see how dealing with asynchrony in JavaScript evolved over the years. It all started with callbacks, it landed on generators and..
                                    </div>
                                </dd>
							    </dl>

                            </li>

                            <li><dl>
                                <dt><span class="time">15:45 - 16:15</span> Coffee Break</dt>
                            </dl></li>

                            <li><dl>
                                <dt><span class="time">16:15 - 17:45</span> SESSION 4</dt>
                                <dd class="description clearfix">
                                    <a href="<?php echo get_bloginfo('url');?>/speakers" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/iheanyi_ekechukwu.jpg" alt="Iheanyi Ekechukwu"></a>
                                    <h4>GRPC AND PROTOBUFS</h4><a href="<?php echo get_bloginfo('url');?>/speakers">IHEANYI EKECHUKWU</a>
                                    <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                    In this talk, we'll be exploring how to use gRPC, an RPC framework by Google, in order to build out a simple client/server application in two different languages. From this talk, you'll be able to walk away with knowledge about how both Protocol Buffers and gRPC work and how to use gRPC to build out your services.
                                    </div>
                                </dd>

                                <dd class="description clearfix">
                                <a href="<?php echo get_bloginfo('url');?>/speakers#alex-sexton" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/img/speakers/alex_sexton.jpg" alt="Alex Sexton"></a>
                                <h4>BOUNTY HUNTING: FINDING HOLES IN MODERN JS APPS</h4><a href="<?php echo get_bloginfo('url');?>/speakers">ALEX SEXTON</a>
                                <div style="font-size:15px;clear:both;margin-bottom:10px;">
                                    We're pushing more and more logic into our front-end applications, and along with that we're adding more and more surface area to make mistakes in. Luckily, as our apps grow, so do the tools that help us lock things down. Let's go over a bunch of ways that developers leave themselves open to vulnerabilities, learn about some of the cooler exploits that have occurred in the wild, and then learn about the best ways to avoid entire classes of these problems in our applications.
                                    </div>
                                </dd>

                            </dl></li>
														<li><dl>
                                <dt><span class="time">19:30</span> After-party</dt>
                                <dd class="description">Have a beer (or more) with speakers and attendees after the conference. <br>
                                    <strong>Location</strong>: 
                                    <a href="http://trueclub.ro/">True Club</a>, Old Town, Strada Covaci 19, Bucharest. <a href="https://www.google.ro/maps/place/True+Club/@44.4303927,26.1025335,20z/data=!4m5!3m4!1s0x40b1ff157eaed6a5:0x6a7a9908c760b9fe!8m2!3d44.4304368!4d26.102535?hl=en">See on Map</a>
                                    </dd>
                            </dl></li>
                        </ul>
                    </div>
                </section>

<?php get_footer();?>
