<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>PT. JAN | Jejaring Andal Nusantara</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('frontend/assets/images/janicon.ico') }}" type="image/x-icon">
    <meta name="title" content="PT. JAN">
    <meta name="description" content="JAN | Jejaring Andal Nusantara">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="PT. JAN" />

    @include('includes.style')

  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
        <div id="home">

            <!-- Page Header Navbar-->
            @include('includes.navbar')
            <!-- End Header Navbar -->

            <!-- Hero Section Swiper -->
            <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide" data-slide-bg="{{ asset('frontend/assets/images/slider/slide1.jpg') }}">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                    <h1 class="text-white" data-caption-animate="fadeInLeft" data-caption-delay="0">VIRTUAL AUDIENCE-DRIVEN ADVERTISING PLATFORM</h1>
                    <!-- <p class="text-white text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur esse dicta, nulla molestias inventore natus eius dolor laudantium, possimus amet cum? Odio molestias unde reiciendis quas laborum voluptates magni necessitatibus.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Selengkapnya</a> -->
                    </div>
                </div>
                </div>
                <div class="swiper-slide" data-slide-bg="{{ asset('frontend/assets/images/slider/slide2.jpg') }}">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                    <h1 class="text-white" data-caption-animate="fadeInLeft" data-caption-delay="0">1nteresting Story of Thing - Code</h1>
                    <!-- <p class="text-width-large text-white" data-caption-animate="fadeInRight" data-caption-delay="100">Deskripsi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut quaerat ipsa laborum, expedita enim eveniet ab repudiandae neque consequatur dolor reiciendis eligendi sint incidunt, magnam accusantium non quod? Ipsam, facere..</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Selengkapnya</a> -->
                    </div>
                </div>
                </div>
                <div class="swiper-slide" data-slide-bg="{{ asset('frontend/assets/images/slider/slide3.jpg') }}">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                    <h1 class="text-white" data-caption-animate="fadeInLeft" data-caption-delay="0">Disseminating The Synthesized Sensing Technologies for Enhancing The Agricultural Productivity</h1>
                    <!-- <p class="text-width-large text-white" data-caption-animate="fadeInRight" data-caption-delay="100">Deskripsi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut quaerat ipsa laborum, expedita enim eveniet ab repudiandae neque consequatur dolor reiciendis eligendi sint incidunt, magnam accusantium non quod? Ipsam, facere..</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Selengkapnya</a> -->
                    </div>
                </div>
                </div>
            </div>
            <!-- Paginasi Swiper -->
            <div class="swiper-pagination__module">
                <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
                <div class="swiper-pagination__divider"></div>
                <div class="swiper-pagination"></div>
            </div>
            </section>
            <!-- End Hero Sectionn Swiper -->

        </div>

      <!-- Tentang JAN Section -->
       <section class="section section-md bg-default" id="about">
          <div class="container">
            <div class="row row-40 align-items-center wow fadeInUp">
              <div class="col-xl-7 col-lg-6">
                <div class="img-video">
                  <img class="box-shadow" src="{{ asset('frontend/assets/images/banner/rivisi1.jpg') }}" alt="Apa itu JAN" width="660" height="406"/>
                </div>
              </div>
              <div class="col-xl-5 col-lg-6">
                <h2 style="font-family: var(--font-dasar); ; font-size: 40px;">About <span style="color: var(--warna-primary);"> JAN ?</span></h2>
                <p class="big" style="text-align: left;">PT Jejaring Andal Nusantara was founded by Bambang Hilman, an Indonesian citizen who graduated with a Master of Engineering from the Royal Melbourne Institute of Technology. As a Managing Director at Pasar Baru Trade Center (2001 – 2011), one of the favorite shopping places for tourists, both local and foreign, the question that often arises in Bambang's mind when he is about to do media buying is whether the costs incurred can benefit the company. or not. In other words, will this advertisement be effective? How to measure how many people actually see advertisements placed in newspapers, flyers and billboards, for example. The idea for Huehuy arose from this experience</p>
              </div>
            </div>
          </div>
        </section>
      <!-- END Tentang JAN Section -->

      <!-- Latest Projects-->
      <div class="text-center wow fadeInUp">
        <h2 style="font-family: var(--font-dasar);">Our Projects</h2>
      </div>
      <section class="section section-sm section-fluid bg-default text-center" id="projects">
        <div id="top"></div>
      <section class="gallery">
        <div class="row">
          <ul>
            <a href="#" class="close"></a>
            <li>
              <a href="#item01">
                <img src="{{ asset('frontend/assets/images/project/project3.png') }}" alt="">
              </a>
            </li>

            <li>
              <a href="#item02">
                <img src="{{ asset('frontend/assets/images/project/ic_launcher-web.png') }}" alt="">
              </a>
            </li>

            <li>
              <a href="#item03">
                <img src="{{ asset('frontend/assets/images/project/project1.png') }}" alt="">
              </a>
            </li>
          </ul>
        </div> <!-- / row -->

        <!-- Item 01 -->
        <div id="item01" class="port">
          <div class="row">
            <div class="description">
              <h1>VIRTUAL AUDIENCE-DRIVEN ADVERTISING PLATFORM</h1>
              <p>Huehuy is a promotional media with various functions that are expected to bring many benefits to its users. Huehuy was born from a background and an idea. Starting from street vendors, motorcycle taxi drivers, home industries, hobbies, to experience in a corporation.

                Huehuy tries to combine these backgrounds and ideas with various features in the Huehuy application. Huehuy gives potential, not promises, as a tool it certainly needs someone to use it in order to give each other something, so what do you want to do with this potential.
                Whatever your business,

                whatever your job, your skills, your hobbies, or your activities, make promotions more useful, spread your promos, make your network wider and stronger with Huehuy, you can do it. What are you waiting for, let's use Huehuy!
                </p>
            </div>

            <img src="{{ asset('frontend/assets/images/project/project3.png') }}" alt="">
          </div>
        </div> <!-- / row -->

        <!-- Item 02 -->
        <div id="item02" class="port">
          <div class="row">
            <div class="description">
              <h1>1nteresting Story of Thing - Code</h1>
              <p>an application that records and encodes an item and can be shared as a story or a report</p>
            </div>
            <img src="{{ asset('frontend/assets/images/project/ic_launcher-web.png') }}" alt="">
          </div> <!-- / row -->
        </div> <!-- / Item 02 -->

        <!-- Item 03 -->
        <div id="item03" class="port">
          <div class="row">
            <div class="description">
              <h1>PT. JAN as an consultant and Adviser</h1>
              <p>Consultant to NEC CORPORATION for Agriculture Management Improvement Using Plant Activation Technology at PT PERKEBUNAN NUSANTARA X (PERSERO)
                Consultant to PT PERKEBUNAN NUSANTARA X (PERSERO) for THE JAPAN INTERNATIONAL COOPERATION AGENCY and NEC CORPORATION on Program for Disseminating The Synthesized Sensing Technologies for Enhancing The Agricultural Productivity
                Adviser to PT PERKEBUNAN NUSANTARA X (PERSERO) for assiting the development of downstream industries
                </p>
            </div>
            <img src="{{ asset('frontend/assets/images/project/project1.png') }}" alt="">
          </div> <!-- / row -->
        </div> <!-- / Item 02 -->

      </section> <!-- / projects -->
        </div>
      </section>

      <!-- END Project -->

      <!-- Meet The Team-->
      <div class="text-center wow fadeInUp">
              <h2 style="font-family: var(--font-dasar);" class="mb-5"> C-Level </h2>
            </div>
      <div class="container">
            <div class="row-team">
                <div class="column-team">
                    <div class="team-1">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/images/c-level/Bambang.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Bambang Husein Hilman</h2>
                            <h3>Chief Executive Officer</h3>
                            <p>28 Years in managerial positions with excellent leadership and managerial skill</p>
                        </div>
                    </div>
                </div>

                <div class="column-team">
                    <div class="team-1">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/images/c-level/Harold.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Harold Husein Hilman</h2>
                            <h3>Chief Development Officer</h3>
                            <p>
                              <li>Shoreline Community College and graduate.</li>
                              <li>Seattle University scholared and graduate.</li>
                              <li>University of Washington scholarship.</li>
                              <li>Consultant to the City of Tukwila, Kenper Development Company, and GoGetOlive.</li>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="column-team">
                    <div class="team-1">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/images/c-level/Try.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Try Handry</h2>
                            <h3>Chief Technology Officer</h3>
                            <p>
                              <li>College at Computer University of Indonesia</li>
                              <li>10 Years as a merchant of Japanese Food and Beverages</li>
                              <li>Has a side job as a cloth cutter, technician, electrician, plumber, motorcycle mechanic and modifier, construction worker, farmer, pastry helper and motorcycle taxi driver since 8th grade until now</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <!-- Latest blog posts-->
      <!-- <section class="section section-sm bg-default" id="news">
        <div class="container">
          <h2>Latest blog posts</h2>
          <div class="row row-45">
            <div class="col-sm-6 col-lg-4 wow fadeInLeft">
              <article class="post post-modern"><a class="post-modern-figure" href="#"><img src="assets/images/blog/1.jfif" alt="" width="370" height="307"/>
                  <div class="post-modern-time">
                    <time datetime="2019-07-04"><span class="post-modern-time-month">07</span><span class="post-modern-time-number">04</span></time>
                  </div></a>
                <h4 class="post-modern-title"><a href="#">Benefits of Async/Await</a></h4>
                <p class="post-modern-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea aut cupiditate laudantium quasi voluptatum, deleniti illum quisquam tenetur perferendis. Commodi aliquid nulla aut eius voluptate at aspernatur similique provident ad?</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".1s">
              <article class="post post-modern"><a class="post-modern-figure" href="#"><img src="assets/images/blog/2.jfif" alt="" width="370" height="307"/>
                  <div class="post-modern-time">
                    <time datetime="2019-07-17"><span class="post-modern-time-month">07</span><span class="post-modern-time-number">17</span></time>
                  </div></a>
                <h4 class="post-modern-title"><a href="#">Key Considerations of iPaaS</a></h4>
                <p class="post-modern-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum eaque tempora eius quibusdam itaque aperiam. Error dolore beatae amet repellendus placeat iure consectetur, repellat sed fuga, id sit doloribus delectus.</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
              <article class="post post-modern"><a class="post-modern-figure" href="#"><img src="assets/images/blog/3.jfif" alt="" width="370" height="307"/>
                  <div class="post-modern-time">
                    <time datetime="2019-07-22"><span class="post-modern-time-month">07</span><span class="post-modern-time-number">22</span></time>
                  </div></a>
                <h4 class="post-modern-title"><a href="#">Never Stop Optimizing Your Code</a></h4>
                <p class="post-modern-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ullam perspiciatis accusamus, rem ut a maxime illo quidem tempora id fugiat deleniti assumenda neque. Quisquam cupiditate doloremque ex molestias eveniet</p>
              </article>
            </div>
          </div>
        </div>
      </section> -->

      <!-- Contact information-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <i class=" box-contacts-icon fa-brands fa-whatsapp"></i>
                  <div class="box-contacts-decor"></div>
                  <h2 class="box-contacts-link">Whatsapp</h2>
                  <p class="box-contacts-link"><i>Please contact the contact below</i></p>
                  <p class="box-contacts-link"><a href="https://wa.me/628122016661">+6281 220 166 61</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <i class=" box-contacts-icon fa-brands fa-phone"></i>
                  <div class="box-contacts-decor"></div>
                  <h2 class="box-contacts-link">Telpon</h2>
                  <p class="box-contacts-link"><i>Please contact the contact below</i></p>
                  <p class="box-contacts-link"><a href="tel:+628122016661">+6281 220 166 61</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <i class=" box-contacts-icon fa-brands fa-google"></i>
                  <div class="box-contacts-decor"></div>
                  <h2 class="box-contacts-link">Email</h2>
                  <p class="box-contacts-link"><i>Please contact the email below</i></p>
                  <p class="box-contacts-link"><a href="mailto:bhhilman@jan.co.id">bhhilman@jan.co.id</a></p>
                  <p class="box-contacts-link"><a href="mailto:ghatz16@jan.co.id">ghatz16@jan.co.id</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section section-fluid footer-minimal context-dark">
        <div class="bg-gray-15">
          <div class="container-fluid">
            <div class="footer-minimal-bottom-panel text-sm-left">
              <div class="row row-10 align-items-md-center">
                <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                  <div>
                    <ul class="list-inline list-inline-sm footer-social-list-2">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 order-sm-first">
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Jejaring Andal Nusantara</span>
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-md-right"><span>PT.Jejearingan Andal Nusantara</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      {{-- <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Contact Us</h4>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact-modal" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-modal-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-modal-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-modal-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-modal-message">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-modal-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    @include('includes.script')
    <!-- coded by Himic-->
  </body>
</html>
