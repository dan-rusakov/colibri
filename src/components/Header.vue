<template>
  <header class="header">
    <div class="header__wrapper">
      <a href="/" class="header__logo-url">
        <img src="../assets/img/logo.svg" alt="Колибри" class="header__logo">
      </a>
      <nav class="header__navigation">
        <ul class="header__menu">
          <li class="header__menu-item">
            <a href="#!" class="header__menu-url">О нас</a>
          </li>
          <li class="header__menu-item">
            <a href="#!" class="header__menu-url">Услуги</a>
          </li>
          <li class="header__menu-item">
            <a href="#!" class="header__menu-url">Расписание и цены</a>
          </li>
        </ul>
        <a href="#!" class="header__contact-btn">Связаться</a>
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
              <a href="#!" class="header__mobile-menu-url">О нас</a>
            </li>
            <li class="header__mobile-menu-item">
              <a href="#!" class="header__mobile-menu-url">Услуги</a>
            </li>
            <li class="header__mobile-menu-item">
              <a href="#!" class="header__mobile-menu-url">Расписание и цены</a>
            </li>
          </ul>
          <a href="#!" class="header__contact-btn header__contact-btn--mobile">Связаться</a>
        </div>
      </transition>
    </div>
  </header>
</template>

<script>
  export default {
    name: 'Header',
    data() {
      return {
        mobileMenuOpened: false,
      }
    }
  }
</script>
