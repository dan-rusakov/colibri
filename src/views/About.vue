<template>
  <div>
    <section class="about about--about-page">
      <div class="about__wrapper">
        <div class="about__gallery about__gallery--multiline">
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
        <div class="about__content about__content--multiline">
          <h2 class="about__title">Студия гимнастики в Первоуральске</h2>
          <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi purus, congue et ornare sit amet</p>
          <p class="about__text">tempus eu tellus. Aenean sapien turpis, dictum et odio ac, aliquam euismod orci. Proin cursus placerat vestibulum.</p>
          <a href="#!" class="about__more-btn">Подробнее</a>
        </div>
        <div class="about__content about__content--multiline">
          <h2 class="about__title">Студия гимнастики в Первоуральске</h2>
          <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi purus, congue et ornare sit amet</p>
          <p class="about__text">tempus eu tellus. Aenean sapien turpis, dictum et odio ac, aliquam euismod orci. Proin cursus placerat vestibulum.</p>
          <a href="#!" class="about__more-btn">Подробнее</a>
        </div>
        <div class="about__gallery about__gallery--multiline">
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
      </div>
    </section>
    <section class="trainers">
      <div class="trainers__wrapper">
        <h2 class="trainers__title">Наши тренера</h2>
        <ul class="trainers__list">
          <li class="trainers__list-item">
            <button type="button" class="trainers__list-btn">Светлана</button>
          </li>
          <li class="trainers__list-item">
            <button type="button" class="trainers__list-btn">Анастасия</button>
          </li>
          <li class="trainers__list-item">
            <button type="button" class="trainers__list-btn">Екатерина</button>
          </li>
          <li class="trainers__list-item">
            <button
                type="button"
                class="trainers__list-next-btn"
            >Следующий тренер ></button>
          </li>
        </ul>
      </div>
      <article class="trainer-card">
        <div class="trainer-card__wrapper">
          <div class="trainer-card__img-wrapper">
            <div class="trainer-card__img-box">
              <img src="../assets/img/trainer-img.jpg" alt="Светлана" class="trainer-card__img">
            </div>
          </div>
          <div class="trainer-card__text-box">
            <strong class="trainer-card__trainer-name">Смирнова Светлана</strong>
            <p class="trainer-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi purus, congue et ornare sit amet</p>
            <p class="trainer-card__text">tempus eu tellus. Aenean sapien turpis</p>
            <h4 class="trainer-card__subtitle">Образование</h4>
            <ul class="trainer-card__description-list">
              <li class="trainer-card__description-list-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
              <li class="trainer-card__description-list-item">Lorem ipsum dolor sit aetur adipiscing elit.</li>
              <li class="trainer-card__description-list-item">Lorem ipsu ect etur adipi scing elit consectetur. sit aetur adipiscing.</li>
            </ul>
            <h4 class="trainer-card__subtitle">Опыт</h4>
            <ul class="trainer-card__description-list">
              <li class="trainer-card__description-list-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
              <li class="trainer-card__description-list-item">Lorem ipsum dolor sit aetur adipiscing elit.</li>
              <li class="trainer-card__description-list-item">Lorem ipsu ect etur adipi scing elit consectetur.</li>
            </ul>
          </div>
        </div>
      </article>
    </section>
  </div>
</template>

<script>
  import { Swiper } from 'swiper';
  import 'swiper/swiper-bundle.css';

  export default {
    name: 'App',
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
