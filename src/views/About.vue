<template>
  <div>
    <section class="about about--about-page" v-if="pageContent.acf && pageContent.acf.description_line.length">
      <div class="about__wrapper">
        <div class="about__gallery about__gallery--multiline">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div
                class="swiper-slide about__gallery-slide"
                v-for="galleryItem in pageContent.acf.description_line[0].gallery"
              >
                <img class="about__gallery-img" :src="galleryItem.image.url" :alt="galleryItem.image.alt">
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
        <div
          class="about__content about__content--multiline"
          v-html="pageContent.acf.description_line[0].description_text"
        />
        <div
            class="about__content about__content--multiline"
            v-html="pageContent.acf.description_line[1].description_text"
        />
        <div class="about__gallery about__gallery--multiline">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div
                class="swiper-slide about__gallery-slide"
                v-for="galleryItem in pageContent.acf.description_line[1].gallery"
              >
                <img class="about__gallery-img" :src="galleryItem.image.url" :alt="galleryItem.image.alt">
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
    <section class="trainers" v-show="pageContent.acf && pageContent.acf.trainers.length">
      <div class="trainers__wrapper">
        <h2 class="trainers__title">Наши тренера</h2>
        <ul class="trainers__list">
          <li class="trainers__list-item" v-for="(trainer, index) in this.pageContent.acf.trainers" :key="index">
            <button
                type="button"
                :class="['trainers__list-btn', {'trainers__list-btn--active': index === activeTrainerIndex}]"
                @click="activeTrainerIndex = index"
            >{{ shortTrainerName(trainer.trainer_name) }}</button>
          </li>
          <li class="trainers__list-item">
            <button
                type="button"
                class="trainers__list-next-btn"
                @click="nextTrainer"
            >Следующий тренер ></button>
          </li>
        </ul>
      </div>
      <article class="trainer-card" v-if="activeTrainer" ref="trainers">
        <div class="trainer-card__wrapper">
          <div class="trainer-card__img-wrapper">
            <div class="trainer-card__img-box">
              <img
                  :src="this.activeTrainer.trainer_photo.url"
                  :alt="this.activeTrainer.trainer_name"
                  class="trainer-card__img"
              >
            </div>
          </div>
          <div class="trainer-card__text-box">
            <strong class="trainer-card__trainer-name">{{ this.activeTrainer.trainer_name }}</strong>
            <div v-html="this.activeTrainer.trainer_description" />
          </div>
        </div>
      </article>
    </section>
  </div>
</template>

<script>
  import Swiper from 'swiper';
  import 'swiper/swiper-bundle.css';
  import { mapGetters } from 'vuex';
  import smoothReflow from 'vue-smooth-reflow';

  export default {
    name: 'About',
    mixins: [smoothReflow],
    data() {
      return {
        swiper: null,
        activeTrainerIndex: 0,
      }
    },
    computed: {
      ...mapGetters({
        page: 'page',
      }),
      pageContent() {
        return this.page('about');
      },
      activeTrainer() {
        return this.pageContent.acf.trainers
          ? this.pageContent.acf.trainers[this.activeTrainerIndex]
          : null;
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
      shortTrainerName(name) {
          return name.split(' ')[1];
      },
      nextTrainer() {
        if (this.activeTrainerIndex < this.pageContent.acf.trainers.length - 1) {
          this.activeTrainerIndex++;
        } else {
          this.activeTrainerIndex = 0;
        }
      }
    },
    mounted() {
      this.swiperInit();
      this.$smoothReflow({
        el: this.$refs.trainers,
        property: ['height'],
        transition: 'height .35s ease',
      });
    }
  }
</script>
