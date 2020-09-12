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
  </div>
</template>

<script>
import Header from './../../components/Header'

export default {
  name: 'App',
  components: {
    Header,
  }
}
</script>
