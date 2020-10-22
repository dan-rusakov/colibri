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
                  label="title"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.title}}</p>
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
                  label="title"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.title}}</p>
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
                  :options="timeAfterList"
                  :searchable="false"
                  :close-on-select="true"
                  :show-labels="false"
                  track-by="id"
                  label="title"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.title}}</p>
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
                  :options="timeBeforeList"
                  :searchable="false"
                  :close-on-select="true"
                  :show-labels="false"
                  track-by="id"
                  label="title"
                  placeholder="Выбрать"
                  class="schedule-section__multiselect"
              >
                <template slot="option" slot-scope="props">
                  <p class="schedule-section__option-text">{{props.option.title}}</p>
                </template>
                <template slot="caret">
                  <svg class="schedule-section__arrow" width="14" height="14">
                    <use xlink:href="#icon-arrow-left"/>
                  </svg>
                </template>
              </multiselect>
            </div>
          </div>
          <button class="schedule-section__reset-btn" title="Сбросить фильтры">
            <svg class="schedule-section__reset-icon" width="12" height="12">
              <use xlink:href="#icon-close"/>
            </svg>
            <span class="schedule-section__reset-btn-text">Сбросить</span>
          </button>
        </div>
        <div class="schedule-section__days-box">
          <div class="schedule-section__day">
            <p class="schedule-section__day-name">ПН</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day">
            <p class="schedule-section__day-name">ВТ</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
            </ul>
            <p class="schedule-section__exception-date">! 27 сентября</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="schedule-section__day">
            <p class="schedule-section__day-name">СР</p>
            <ul class="schedule-section__class-list">
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
              <li class="schedule-section__class">
                <time class="schedule-section__class-time">16:00</time>
                <div class="schedule-section__class-text-box">
                  <p class="schedule-section__class-name">Группа спортивной подготовки</p>
                  <p class="schedule-section__trainer-name">Темнякова Светлана</p>
                </div>
              </li>
            </ul>
          </div>
          <form action="/" method="post" class="schedule-callback">
            <p class="schedule-callback__title">Нужна помощь с выбором группы для ребенка?</p>
            <p class="schedule-callback__description">Оставьте заявку на звонок</p>
            <input type="text" class="schedule-callback__input" placeholder="Номер телефона" inputmode="numeric">
            <button type="submit" class="schedule-callback__submit-btn">Отправить</button>
          </form>
        </div>
      </div>
    </section>
    <section class="price-list price-list--home-page">
      <div class="price-list__wrapper">
        <h2 class="price-list__title">Прайс-лист</h2>
        <ul class="price-list__list">
          <li class="price-list__item">
            <div class="price-list__left-box">
              <p class="price-list__name">Групповые занятия</p>
              <p class="price-list__description">пн, ср - 19:00</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">3600</p>
              <p class="price-list__price-description">р/мес</p>
            </div>
          </li>
          <li class="price-list__item">
            <div class="price-list__left-box">
              <p class="price-list__name">Групповые занятия</p>
              <p class="price-list__description">пн, ср - 19:00</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">3600</p>
              <p class="price-list__price-description">р/мес</p>
            </div>
          </li>
          <li class="price-list__item">
            <div class="price-list__left-box">
              <p class="price-list__name">Групповые занятия</p>
              <p class="price-list__description">пн, ср - 19:00</p>
            </div>
            <div class="price-list__right-box">
              <p class="price-list__price">3600</p>
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

  export default {
    name: 'Schedule',
    components: {
      Multiselect,
    },
    data() {
      return {
        trainersList: [
          {
            id: 1,
            title: 'Тренер 1',
          },
          {
            id: 2,
            title: 'Тренер 2',
          },
        ],
        trainersValue: null,
        groupList: [
          {
            id: 1,
            title: 'Группа 1',
          },
          {
            id: 2,
            title: 'Группа 2',
          },
        ],
        groupValue: null,
        timeAfterList: [
          {
            id: 1,
            title: '15:00',
          },
          {
            id: 2,
            title: '16:00',
          },
        ],
        timeAfterValue: null,
        timeBeforeList: [
          {
            id: 1,
            title: '19:00',
          },
          {
            id: 2,
            title: '21:00',
          },
        ],
        timeBeforeValue: null,
      }
    },
  }
</script>
