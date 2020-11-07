<template>
  <div>
    <section class="schedule-section">
      <div class="schedule-section__wrapper">
        <h2 class="schedule-section__title">Расписание</h2>
        <div class="schedule-section__filters">
          <div class="schedule-section__filters-box">
            <div class="schedule-section__filter">
              <p class="schedule-section__filter-name">Тренер</p>
              <multiselect
                  v-model="trainersValue"
                  :options="trainersList"
                  :searchable="false"
                  :close-on-select="true"
                  :show-labels="false"
                  track-by="id"
                  label="trainer_name"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.trainer_name}}</p>
                </template>
                <template slot="caret">
                  <svg class="schedule-section__arrow" width="14" height="14">
                    <use xlink:href="#icon-arrow-left"/>
                  </svg>
                </template>
              </multiselect>
            </div>
            <div class="schedule-section__filter">
              <p class="schedule-section__filter-name">Группа</p>
              <multiselect
                  v-model="groupValue"
                  :options="groupList"
                  :searchable="false"
                  :close-on-select="true"
                  :show-labels="false"
                  track-by="id"
                  label="group_name"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.group_name}}</p>
                </template>
                <template slot="caret">
                  <svg class="schedule-section__arrow" width="14" height="14">
                    <use xlink:href="#icon-arrow-left"/>
                  </svg>
                </template>
              </multiselect>
            </div>
            <div class="schedule-section__filter">
              <p class="schedule-section__filter-name">Время (после)</p>
              <multiselect
                  v-model="timeAfterValue"
                  :options="timeList"
                  :searchable="false"
                  :close-on-select="true"
                  :show-labels="false"
                  track-by="id"
                  label="time"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.time}}</p>
                </template>
                <template slot="caret">
                  <svg class="schedule-section__arrow" width="14" height="14">
                    <use xlink:href="#icon-arrow-left"/>
                  </svg>
                </template>
              </multiselect>
            </div>
            <div class="schedule-section__filter">
              <p class="schedule-section__filter-name">Время (до)</p>
              <multiselect
                  v-model="timeBeforeValue"
                  :options="timeList"
                  :searchable="false"
                  :close-on-select="true"
                  :show-labels="false"
                  track-by="id"
                  label="time"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.time}}</p>
                </template>
                <template slot="caret">
                  <svg class="schedule-section__arrow" width="14" height="14">
                    <use xlink:href="#icon-arrow-left"/>
                  </svg>
                </template>
              </multiselect>
            </div>
          </div>
          <button
              v-show="resetBtnVisible"
              class="schedule-section__reset-btn"
              title="Сбросить фильтры"
              @click="resetFilter"
          >
            <svg class="schedule-section__reset-icon" width="12" height="12">
              <use xlink:href="#icon-close"/>
            </svg>
            <span class="schedule-section__reset-btn-text">Сбросить</span>
          </button>
        </div>
        <div class="schedule-section__days-box">
          <div class="schedule-section__day" v-show="scheduleByDay('monday').length">
            <p class="schedule-section__day-name">ПН</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class" v-for="(schedule, index) in scheduleByDay('monday')" :key="index">
                <time class="schedule-section__class-time">{{ schedule.schedule_time }}</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">{{ schedule.group_select }}</p>
                  <p class="schedule-section__trainer-name">{{ schedule.trainer_select }}</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day" v-show="scheduleByDay('tuesday').length">
            <p class="schedule-section__day-name">ВТ</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class" v-for="(schedule, index) in scheduleByDay('tuesday')" :key="index">
                <time class="schedule-section__class-time">{{ schedule.schedule_time }}</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">{{ schedule.group_select }}</p>
                  <p class="schedule-section__trainer-name">{{ schedule.trainer_select }}</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day" v-show="scheduleByDay('wednesday').length">
            <p class="schedule-section__day-name">СР</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class" v-for="(schedule, index) in scheduleByDay('wednesday')" :key="index">
                <time class="schedule-section__class-time">{{ schedule.schedule_time }}</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">{{ schedule.group_select }}</p>
                  <p class="schedule-section__trainer-name">{{ schedule.trainer_select }}</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day" v-show="scheduleByDay('thursday').length">
            <p class="schedule-section__day-name">ЧТ</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class" v-for="(schedule, index) in scheduleByDay('thursday')" :key="index">
                <time class="schedule-section__class-time">{{ schedule.schedule_time }}</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">{{ schedule.group_select }}</p>
                  <p class="schedule-section__trainer-name">{{ schedule.trainer_select }}</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day" v-show="scheduleByDay('friday').length">
            <p class="schedule-section__day-name">ПТ</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class" v-for="(schedule, index) in scheduleByDay('friday')" :key="index">
                <time class="schedule-section__class-time">{{ schedule.schedule_time }}</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">{{ schedule.group_select }}</p>
                  <p class="schedule-section__trainer-name">{{ schedule.trainer_select }}</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day" v-show="scheduleByDay('saturday').length">
            <p class="schedule-section__day-name">СБ</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class" v-for="(schedule, index) in scheduleByDay('saturday')" :key="index">
                <time class="schedule-section__class-time">{{ schedule.schedule_time }}</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">{{ schedule.group_select }}</p>
                  <p class="schedule-section__trainer-name">{{ schedule.trainer_select }}</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day" v-show="scheduleByDay('sunday').length">
            <p class="schedule-section__day-name">ВС</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class" v-for="(schedule, index) in scheduleByDay('sunday')" :key="index">
                <time class="schedule-section__class-time">{{ schedule.schedule_time }}</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">{{ schedule.group_select }}</p>
                  <p class="schedule-section__trainer-name">{{ schedule.trainer_select }}</p>
                </div>
              </li>
            </ul>
          </div>
          <form
              :action="feedbackAction"
              method="post"
              class="schedule-callback"
              @submit.prevent="submitFeedbackForm"
          >
            <p class="schedule-callback__title">Нужна помощь с выбором группы для ребенка?</p>
            <p class="schedule-callback__description">Оставьте заявку на звонок</p>
            <input
                v-model="phone"
                type="text"
                class="schedule-callback__input"
                placeholder="Номер телефона"
                inputmode="numeric"
            >
            <button type="submit" class="schedule-callback__submit-btn" :disabled="feedbackSent">
              {{ feedbackSent ? 'Отправлено' : 'Отправить' }}
            </button>
          </form>
        </div>
      </div>
    </section>
    <section class="price-list price-list--home-page" id="price">
      <div class="price-list__wrapper">
        <h2 class="price-list__title">Прайс-лист</h2>
        <ul class="price-list__list">
          <li class="price-list__item" v-for="(priceList, index) in pageContent.acf.price_list" :key="index">
            <div class="price-list__left-box">
              <p class="price-list__name">{{ priceList.name }}</p>
              <p class="price-list__description">{{ priceList.description }}</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">{{ priceList.price }}</p>
              <p class="price-list__price-description">р/мес</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</template>

<script>
  import Multiselect from 'vue-multiselect';
  import 'vue-multiselect/dist/vue-multiselect.min.css';
  import { mapGetters } from 'vuex';
  import axios from 'axios';

  export default {
    name: 'Schedule',
    components: {
      Multiselect,
    },
    data() {
      return {
        trainersValue: null,
        groupValue: null,
        timeAfterValue: null,
        timeBeforeValue: null,
        feedbackAction: '/wp-json/api/feedback',
        feedbackSent: false,
        phone: '',
      }
    },
    computed: {
      ...mapGetters({
        page: 'page',
      }),
      pageContent() {
        return this.page('schedule');
      },
      trainersList() {
        return this.pageContent.acf.trainers
          ? this.pageContent.acf.trainers.map((item, index) => {
            item.id = index;
            return item;
          })
          : [];
      },
      groupList() {
        return this.pageContent.acf.groups
          ? this.pageContent.acf.groups.map((item, index) => {
            item.id = index;
            return item;
          })
          : [];
      },
      timeList() {
        if (this.pageContent.acf.schedule) {
          const timeList = this.pageContent.acf.schedule.map((item, index) => {
            return {
              id: index,
              time: item.schedule_time,
            }
          });

          return timeList.sort((a, b) => a.time.localeCompare(b.time));
        } else {
          return [];
        }
      },
      resetBtnVisible() {
        return !!(this.trainersValue || this.groupValue || this.timeAfterValue || this.timeBeforeValue);
      },
      filteredSchedule() {
        const getTime = time => new Date(2019, 9, 2, time.substring(0, 2), time.substring(3, 5), 0, 0);
        let filteredSchedule = this.pageContent.acf.schedule;

        if (this.trainersValue) {
          filteredSchedule = filteredSchedule.filter(item => item.trainer_select === this.trainersValue.trainer_name);
        }

        if (this.groupValue) {
          filteredSchedule = filteredSchedule.filter(item => item.group_select === this.groupValue.group_name);
        }

        if (this.groupValue) {
          filteredSchedule = filteredSchedule.filter(item => item.group_select === this.groupValue.group_name);
        }

        if (this.timeAfterValue) {
          filteredSchedule = filteredSchedule.filter(item => getTime(item.schedule_time) >= getTime(this.timeAfterValue.time));
        }

        if (this.timeBeforeValue) {
          filteredSchedule = filteredSchedule.filter(item => getTime(item.schedule_time) <= getTime(this.timeBeforeValue.time));
        }

        return filteredSchedule;
      },
    },
    methods: {
      resetFilter() {
        this.trainersValue = null;
        this.groupValue = null;
        this.timeAfterValue = null;
        this.timeBeforeValue = null;
      },
      scheduleByDay(day) {
        return this.filteredSchedule.filter(item => item.week_day === day);
      },
      submitFeedbackForm() {
        if (!this.phone) return;

        axios.post(this.feedbackAction, {
          phone: this.phone,
        })
          .then(() => {
            this.feedbackSent = true;
            this.phone = '';
          })
          .catch(error => {
            if (!error.response) {
              this.errors.phone = 'Ошибка сети. Проверьте ваше подключение к интернету.';
              console.log(error);
            } else {
              this.errors.phone = error.response.data.message || error.message;
            }
          })
      },
    },
  }
</script>
