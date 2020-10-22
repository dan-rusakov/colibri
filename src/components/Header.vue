<template>
  <header class="header">
    <div class="header__wrapper">
      <router-link :to="{ name: 'Home'}" class="header__logo-url">
        <img src="../assets/img/logo.svg" alt="Колибри" class="header__logo">
      </router-link>
      <nav class="header__navigation">
        <ul class="header__menu">
          <li class="header__menu-item">
            <router-link :to="{ name: 'About'}" class="header__menu-url">О нас</router-link>
          </li>
          <li class="header__menu-item">
            <router-link
                :to="{ name: 'Home', hash: '#services'}"
                @click.native="scrollFix('#services')"
                class="header__menu-url"
            >Услуги</router-link>
          </li>
          <li class="header__menu-item">
            <router-link :to="{ name: 'Schedule'}" class="header__menu-url">Расписание и цены</router-link>
          </li>
        </ul>
        <button
            class="header__contact-btn"
            @click="openCallbackPopup"
        >Связаться</button>
        <transition name="fade">
          <div
              v-show="callbackPopupOpened"
              class="callback-form-wrapper"
              ref="callbackForm"
              @click="closeCallbackPopup"
          >
            <form action="/" method="post" class="callback-form">
              <p class="callback-form__title">Нужна помощь?</p>
              <p class="callback-form__description">Оставьте заявку на обратный звонок</p>
              <input type="text" class="callback-form__input" placeholder="Номер телефона" inputmode="numeric">
              <button type="submit" class="callback-form__submit-btn">Отправить</button>
            </form>
          </div>
        </transition>
      </nav>
      <button
          type="button"
          :class="['header__burger', {'header__burger--active': mobileMenuOpened}]"
          @click="mobileMenuOpened = !mobileMenuOpened"
      >
        <span class="header__burger-line"></span>
      </button>
      <transition name="slide-down">
        <div class="header__mobile-menu-wrap" v-if="mobileMenuOpened">
          <ul class="header__mobile-menu">
            <li class="header__mobile-menu-item">
              <a href="/about" class="header__mobile-menu-url">О нас</a>
            </li>
            <li class="header__mobile-menu-item">
              <a href="/#services" class="header__mobile-menu-url">Услуги</a>
            </li>
            <li class="header__mobile-menu-item">
              <a href="/schedule" class="header__mobile-menu-url">Расписание и цены</a>
            </li>
          </ul>
          <button
              type="button"
              class="header__contact-btn header__contact-btn--mobile"
              @click="openCallbackPopup"
          >Связаться</button>
        </div>
      </transition>
    </div>
  </header>
</template>

<script>
  import 'focus-visible/dist/focus-visible.min.js';
  import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock';

  export default {
    name: 'Header',
    data() {
      return {
        mobileMenuOpened: false,
        callbackPopupOpened: false,
      }
    },
    methods: {
      openCallbackPopup() {
        this.callbackPopupOpened = true;
        disableBodyScroll(this.$refs.callbackForm);
        document.addEventListener('keyup', this.closeCallbackPopup);
      },
      closeCallbackPopup(evt) {
        if (evt.key === 'Escape' || (evt.type === 'click' && !evt.target.closest('.callback-form'))) {
          this.callbackPopupOpened = false;
          enableBodyScroll(this.$refs.callbackForm);
          document.removeEventListener('keyup', this.closeCallbackPopup);
        }
      },
      scrollFix(hashbang) {
        location.href = hashbang;
      },
    },
  }
</script>
