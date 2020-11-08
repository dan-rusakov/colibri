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
          <a
            href="https://vk.com/colibri_kids_gym"
            class="footer__soc-box-url"
            target="_blank"
            rel="noopener nofollow"
            aria-label="Группа ВК"
          >
            <svg width="26" height="26" class="footer__soc-box-icon">
              <use xlink:href="#icon-vk" />
            </svg>
          </a>
        </li>
        <li class="footer__soc-box-item">
          <a
            href="#!"
            сlass="footer__soc-box-url"
            target="_blank"
            rel="noopener nofollow"
            aria-label="Чат Whatsapp"
          >
            <svg width="26" height="26" class="footer__soc-box-icon">
              <use xlink:href="#icon-whatsapp" />
            </svg>
          </a>
        </li>
        <li class="footer__soc-box-item">
          <a
            href="https://www.instagram.com/colibri.kids.gym/"
            сlass="footer__soc-box-url"
            target="_blank"
            rel="noopener nofollow"
            aria-label="Аккаунт инстаграм"
          >
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
