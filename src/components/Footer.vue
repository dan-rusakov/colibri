<template>
  <footer class="footer">
    <div class="footer__wrapper">
      <p class="footer__copyright">
        <a
            :href="`${require('../assets/files/legal-info.docx')}`"
            class="footer__legal-info"
            target="_blank"
            rel="noopener nofollow"
        >Юридическая информация</a>
        © 2020
      </p>
      <ul class="footer__soc-box">
        <li class="footer__soc-box-item">
          <a href="#!" class="footer__soc-box-url">
            <svg width="26" height="26" class="footer__soc-box-icon">
              <use xlink:href="#icon-vk" />
            </svg>
          </a>
        </li>
        <li class="footer__soc-box-item">
          <a href="#!" class="footer__soc-box-url">
            <svg width="26" height="26" class="footer__soc-box-icon">
              <use xlink:href="#icon-whatsapp" />
            </svg>
          </a>
        </li>
        <li class="footer__soc-box-item">
          <a href="#!" class="footer__soc-box-url">
            <svg width="26" height="26" class="footer__soc-box-icon">
              <use xlink:href="#icon-instagram" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </footer>
</template>

<script>
  export default {
    name: 'Footer',
  }
</script>
