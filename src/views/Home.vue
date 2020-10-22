<template>
  <div>
    <section class="welcome-section">
      <div class="welcome-section__wrapper">
        <h1 class="welcome-section__title">Гимнастами не рождаются – ими становятся</h1>
        <ul class="welcome-section__contacts">
          <li class="welcome-section__contacts-item">—  ул. Белинского 97</li>
          <li class="welcome-section__contacts-item">—  +7 (922) 357-84-61</li>
        </ul>
        <img src="../assets/img/ribbon.png" alt="Лента" class="welcome-section__ribbon">
      </div>
    </section>
    <section class="about">
      <div class="about__wrapper">
        <div class="about__gallery">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide about__gallery-slide">
                <img class="about__gallery-img" src="../assets/img/about-gallery-img.jpg" alt="">
              </div>
              <div class="swiper-slide about__gallery-slide">
                <img class="about__gallery-img" src="../assets/img/about-gallery-img.jpg" alt="">
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
    <section class="services" id="services">
      <div class="services__wrapper">
        <article class="service">
          <svg class="service__icon" width="60" height="60">
            <use xlink:href="#icon-ribbon"/>
          </svg>
          <h4 class="service__title">Lorem ipsum dolor sit ame</h4>
          <p class="service__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi purus, congue et ornare</p>
        </article>
        <article class="service">
          <svg class="service__icon" width="60" height="60">
            <use xlink:href="#icon-group"/>
          </svg>
          <h4 class="service__title">Lorem ipsum dolor sit ame</h4>
          <p class="service__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi purus, congue et ornare</p>
        </article>
        <article class="service">
          <svg class="service__icon" width="60" height="60">
            <use xlink:href="#icon-gymnast"/>
          </svg>
          <h4 class="service__title">Lorem ipsum dolor sit ame</h4>
          <p class="service__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi purus, congue et ornare</p>
        </article>
      </div>
    </section>
    <section class="price-list price-list--home-page">
      <div class="price-list__wrapper">
        <ul class="price-list__list">
          <li class="price-list__item">
            <div class="price-list__left-box">
              <p class="price-list__name">Групповые занятия</p>
              <p class="price-list__description">пн, ср - 19:00</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">3600</p>
              <p class="price-list__price-description">р/мес</p>
            </div>
          </li>
          <li class="price-list__item">
            <div class="price-list__left-box">
              <p class="price-list__name">Групповые занятия</p>
              <p class="price-list__description">пн, ср - 19:00</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">3600</p>
              <p class="price-list__price-description">р/мес</p>
            </div>
          </li>
          <li class="price-list__item">
            <div class="price-list__left-box">
              <p class="price-list__name">Групповые занятия</p>
              <p class="price-list__description">пн, ср - 19:00</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">3600</p>
              <p class="price-list__price-description">р/мес</p>
            </div>
          </li>
          <li class="price-list__item">
            <a href="#!" class="price-list__more-btn">Больше цен</a>
          </li>
        </ul>
      </div>
    </section>
  </div>
</template>

<script>
  import { Swiper } from 'swiper';
  import 'swiper/swiper-bundle.css';
  import { mapGetters } from 'vuex';

  export default {
    name: 'Home',
    data() {
      return {
        swiper: null,
      }
    },
    computed: {
      ...mapGetters({
        page: 'page',
      }),
      pageContent() {
        return this.page(12);
      },
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
  };
</script>
