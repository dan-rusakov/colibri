<template>
  <div>
    <section class="welcome-section">
      <div class="welcome-section__wrapper">
        <h1 class="welcome-section__title">Гимнастами не рождаются – ими становятся</h1>
        <ul class="welcome-section__contacts">
          <li
              class="welcome-section__contacts-item"
              v-if="pageContent.acf && pageContent.acf.address"
          >—  {{ pageContent.acf.address }}</li>
          <li
              class="welcome-section__contacts-item"
              v-if="pageContent.acf && pageContent.acf.phone"
          >—  {{ pageContent.acf.phone }}</li>
        </ul>
        <img src="../assets/img/ribbon.png" alt="Лента" class="welcome-section__ribbon">
      </div>
    </section>
    <section class="about" v-if="pageContent.acf && pageContent.acf.gallery">
      <div class="about__wrapper">
        <div class="about__gallery">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide about__gallery-slide" v-for="galleryItem in pageContent.acf.gallery">
                <img class="about__gallery-img" :src="galleryItem.image" alt="Фото студии гимнастики">
              </div>
            </div>
            <button class="about__gallery-btn about__gallery-btn--left" type="button" aria-label="Предыдущее изображение">
              <svg class="about__gallery-btn-arrow" width="30" height="30">
                <use xlink:href="#icon-arrow-left" />
              </svg>
            </button>
            <button class="about__gallery-btn about__gallery-btn--right" type="button" aria-label="Следующее изображение">
              <svg class="about__gallery-btn-arrow" width="30" height="30">
                <use xlink:href="#icon-arrow-left" />
              </svg>
            </button>
          </div>
        </div>
        <template v-if="pageContent.acf && pageContent.acf.description_text">
          <div class="about__content" v-html="pageContent.acf.description_text" />
        </template>
      </div>
    </section>
    <section class="services" id="services" v-if="pageContent.acf && pageContent.acf.services">
      <div class="services__wrapper">
        <div class="services__gallery">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <article class="swiper-slide service" v-for="service in pageContent.acf.services">
                <img :src="service.icon.url" :alt="service.icon.alt" class="service__icon" width="60" height="60">
                <h4 class="service__title">{{ service.title }}</h4>
                <p class="service__text">{{ service.text }}</p>
              </article>
            </div>
          </div>
          <button class="services__gallery-btn services__gallery-btn--left" type="button" aria-label="Предыдущая услуга">
            <svg class="services__gallery-btn-arrow" width="40" height="40">
              <use xlink:href="#icon-arrow-left" />
            </svg>
          </button>
          <button class="services__gallery-btn services__gallery-btn--right" type="button" aria-label="Следующая услуга">
            <svg class="services__gallery-btn-arrow" width="40" height="40">
              <use xlink:href="#icon-arrow-left" />
            </svg>
          </button>
        </div>
      </div>
    </section>
    <section class="price-list price-list--home-page" v-if="priceList">
      <div class="price-list__wrapper">
        <ul class="price-list__list">
          <li class="price-list__item" v-for="priceItem in priceList">
            <div class="price-list__left-box">
              <p class="price-list__name">{{ priceItem.name }}</p>
              <p class="price-list__description">{{ priceItem.description }}</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">{{ priceItem.price }}</p>
              <p class="price-list__price-description">р/мес</p>
            </div>
          </li>
          <li class="price-list__item">
            <router-link
                :to="{name: 'Schedule', hash: '#price'}"
                class="price-list__more-btn"
                @click.native="scrollFix('#price')"
            >Больше цен</router-link>
          </li>
        </ul>
      </div>
    </section>
  </div>
</template>

<script>
  import { Swiper, Navigation, EffectFade, Autoplay } from 'swiper';
  import 'swiper/swiper.scss';
  import 'swiper/components/effect-fade/effect-fade.scss';
  import 'swiper/components/navigation/navigation.scss';
  import { mapGetters } from 'vuex';

  Swiper.use([Navigation, EffectFade, Autoplay]);

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
        return this.page('main-page');
      },
      schedulePage() {
        return this.page('schedule');
      },
      priceList() {
        return this.schedulePage.acf?.price_list
          ? this.schedulePage.acf.price_list.filter((item, index) => index < 3)
          : [];
      }
    },
    methods: {
      aboutSwiperInit() {
        this.swiper = new Swiper('.about__gallery .swiper-container', {
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
      servicesSwiperInit() {
        this.swiper = new Swiper('.services .swiper-container', {
          loop: true,
          spaceBetween: 20,
          autoplay: {
            delay: 3500,
          },
          slidesPerView: 1,
          navigation: {
            prevEl: '.services__gallery-btn--left',
            nextEl: '.services__gallery-btn--right',
          },
          breakpoints: {
            320: {
              slidesPerView: 1,
            },
            602: {
              slidesPerView: 2,
            },
            992: {
              slidesPerView: 3,
            },
          },
        })
      },
      scrollFix(hashbang) {
        location.href = hashbang;
      },
    },
    mounted() {
      this.aboutSwiperInit();
      this.servicesSwiperInit();
    }
  };
</script>
