<template>
  <label class="consent">
    <input
        type="checkbox"
        class="consent__checkbox"
        :checked="checked"
        required
        @change="$emit('change', $event.target.checked)"
    >
    <span class="consent__text">
      Нажимая кнопку «Отправить», я подтверждаю согласие на обработку указанных персональных данных в целях обработки моего обращения. Ознакомлен(а) с
      <a
          :href="`${require('../assets/files/privacy-policy.pdf')}`"
          class="consent__link"
          target="_blank"
          rel="noopener nofollow"
      >Политикой конфиденциальности</a>
    </span>
  </label>
</template>

<script>
  export default {
    name: 'ConsentCheckbox',
    model: {
      prop: 'checked',
      event: 'change',
    },
    props: {
      checked: {
        type: Boolean,
        default: false,
      },
    },
  }
</script>
