<template>
  <header class="header">
    <div class="header__wrapper">
      <a href="/" class="header__logo-url">
        <img src="../assets/img/logo.svg" alt="Колибри" class="header__logo">
      </a>
      <nav class="header_navigation">
        <ul class="header__menu">
          <li class="header_menu-item">
            <a href="#!" class="header__menu-url">О нас</a>
          </li>
          <li class="header_menu-item">
            <a href="#!" class="header__menu-url">Услуги</a>
          </li>
          <li class="header_menu-item">
            <a href="#!" class="header__menu-url">Расписание и цены</a>
          </li>
        </ul>
        <a href="#!" class="header__contact-btn">Связаться</a>
      </nav>
    </div>
  </header>
</template>

<script>
  export default {
    name: 'Header',

  }
</script>
