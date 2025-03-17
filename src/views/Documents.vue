<template>
  <div>
    <section class="documents documents--documents-page" v-if="pageContent.acf && pageContent.acf.documents.length">
      <div class="documents__wrapper">
        <h2 class="documents__title">Документы</h2>
        <div class="documents-list">
          <a target="_blank" v-for="document in pageContent.acf.documents" :href="document.file" class="documents-list__link">
            {{ document.name }}
            <svg class="documents-list_link-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.00005 19L19 5.99996M19 5.99996V18.48M19 5.99996H6.52005" stroke="#7784F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex';
  import smoothReflow from 'vue-smooth-reflow';

  export default {
    name: 'Documents',
    mixins: [smoothReflow],
    data() {
      return {}
    },
    computed: {
      ...mapGetters({
        page: 'page',
      }),
      pageContent() {
        return this.page('documents');
      },
    },
    mounted() {
      this.$smoothReflow({
        el: this.$refs.trainers,
        property: ['height'],
        transition: 'height .35s ease',
      });
    }
  }
</script>
