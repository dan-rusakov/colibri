<template>
  <div id="app">
    <Header />
    <section class="welcome-section">
      <div class="welcome-section__wrapper">
        <h1 class="welcome-section__title">Гимнастами не рождаются – ими становятся</h1>
        <ul class="welcome-section__contacts">
          <li class="welcome-section__contacts-item">—  ул. Белинского 97</li>
          <li class="welcome-section__contacts-item">—  +7 (922) 357-84-61</li>
        </ul>
        <img src="../../assets/img/ribbon.png" alt="Лента" class="welcome-section__ribbon">
      </div>
    </section>
    <section class="about">
      <div class="about__wrapper">
        <div class="about__gallery">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide about__gallery-slide">
                <img class="about__gallery-img" src="../../assets/img/about-gallery-img.jpg" alt="">
              </div>
              <div class="swiper-slide about__gallery-slide">
                <img class="about__gallery-img" src="../../assets/img/about-gallery-img.jpg" alt="">
              </div>
            </div>
            <button class="about__gallery-btn about__gallery-btn--left">
              <svg class="about__gallery-btn-arrow" width="30" height="30">
                <use xlink:href="#icon-arrow-left" />
              </svg>
            </button>
            <button class="about__gallery-btn about__gallery-btn--right">
              <svg class="about__gallery-btn-arrow" width="30" height="30">
                <use xlink:href="#icon-arrow-left" />
              </svg>
            </button>
          </div>
        </div>
        <div class="about__content">
          <h2 class="about__title">Студия гимнастики в Первоуральске</h2>
          <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi purus, congue et ornare sit amet</p>
          <p class="about__text">tempus eu tellus. Aenean sapien turpis, dictum et odio ac, aliquam euismod orci. Proin cursus placerat vestibulum.</p>
          <a href="#!" class="about__more-btn">Подробнее</a>
        </div>
      </div>
    </section>
    <svg style="display: none">
      <defs>
        <symbol id="icon-arrow-left" viewBox="0 0 14 14">
          <path d="M3.35061 7.49967L9.64635 13.7933C9.9226 14.0689 10.3702 14.0689 10.6471 13.7933C10.9234 13.5178 10.9234 13.0702 10.6471 12.7946L4.85076 7.00036L10.6464 1.20609C10.9227 0.930531 10.9227 0.482957 10.6464 0.206704C10.3702 -0.0688506 9.92191 -0.0688506 9.64565 0.206704L3.34992 6.50029C3.07791 6.773 3.07791 7.2276 3.35061 7.49967Z"/>
        </symbol>
      </defs>
    </svg>
  </div>
</template>

<script>
import Header from './../../components/Header'
import { Swiper, Navigation, EffectFade } from 'swiper';
import 'swiper/swiper-bundle.css';

Swiper.use([Navigation, EffectFade]);

export default {
  name: 'App',
  components: {
    Header,
  },
  data() {
    return {
      swiper: null,
    }
  },
  methods: {
    swiperInit() {
      this.swiper = new Swiper('.about__gallery', {
        loop: true,
        effect: 'fade',
        autoplay: {
          delay: 3500,
        },
        navigation: {
          prevEl: '.about__gallery-btn--left',
          nextEl: '.about__gallery-btn--right',
        },
      })
    },
  },
  mounted() {
    this.swiperInit();
  }
}
</script>
