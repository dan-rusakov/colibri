<template>
  <div id="app">
    <Header />
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
    <Footer />
    <svg style="display: none">
      <defs>
        <symbol id="icon-arrow-left" viewBox="0 0 14 14">
          <path d="M3.35061 7.49967L9.64635 13.7933C9.9226 14.0689 10.3702 14.0689 10.6471 13.7933C10.9234 13.5178 10.9234 13.0702 10.6471 12.7946L4.85076 7.00036L10.6464 1.20609C10.9227 0.930531 10.9227 0.482957 10.6464 0.206704C10.3702 -0.0688506 9.92191 -0.0688506 9.64565 0.206704L3.34992 6.50029C3.07791 6.773 3.07791 7.2276 3.35061 7.49967Z"/>
        </symbol>
        <symbol id="icon-whatsapp" viewBox="0 0 22 22">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2957 3.67408C16.3661 1.74225 13.7999 0.677891 11.0661 0.676758C5.43274 0.676758 0.848003 5.26136 0.845737 10.8962C0.844982 12.6975 1.31554 14.4559 2.20995 16.0058L0.76001 21.3018L6.17798 19.8805C7.67085 20.6949 9.35154 21.124 11.0619 21.1245H11.0662C16.6989 21.1245 21.2842 16.5395 21.2863 10.9044C21.2875 8.17346 20.2254 5.60578 18.2957 3.67408ZM11.0661 19.3985H11.0626C9.53835 19.3979 8.04347 18.9882 6.73904 18.2144L6.42899 18.0303L3.21389 18.8737L4.07204 15.739L3.87 15.4176C3.01965 14.0651 2.57061 12.5019 2.57137 10.8969C2.57313 6.21331 6.38392 2.40289 11.0695 2.40289C13.3384 2.40365 15.4713 3.28837 17.0751 4.89403C18.6789 6.49969 19.5616 8.63395 19.5608 10.9038C19.5588 15.5877 15.7483 19.3985 11.0661 19.3985ZM15.7256 13.0364C15.4703 12.9085 14.2147 12.2909 13.9806 12.2056C13.7467 12.1203 13.5762 12.0779 13.4062 12.3335C13.2358 12.589 12.7465 13.1643 12.5975 13.3346C12.4484 13.5051 12.2996 13.5265 12.0442 13.3986C11.7888 13.2708 10.966 13.001 9.99053 12.131C9.23144 11.4539 8.71896 10.6176 8.56992 10.3621C8.42112 10.1063 8.56866 9.98142 8.68195 9.84093C8.9584 9.49765 9.23522 9.13774 9.32032 8.96742C9.40554 8.79697 9.36287 8.6478 9.29892 8.52002C9.23522 8.39225 8.7245 7.13529 8.51176 6.62382C8.3043 6.12607 8.09395 6.19329 7.93709 6.18549C7.7883 6.17806 7.61797 6.17655 7.44765 6.17655C7.27746 6.17655 7.00076 6.24037 6.76661 6.49617C6.53259 6.75184 5.87296 7.36956 5.87296 8.62652C5.87296 9.88348 6.78801 11.0978 6.91566 11.2682C7.04331 11.4387 8.71645 14.018 11.2781 15.1241C11.8874 15.3874 12.363 15.5444 12.7339 15.6621C13.3457 15.8565 13.9023 15.829 14.3424 15.7633C14.8331 15.6899 15.8531 15.1455 16.0661 14.549C16.2789 13.9525 16.2789 13.4412 16.2149 13.3346C16.1512 13.2281 15.9809 13.1643 15.7256 13.0364Z"/>
        </symbol>
        <symbol id="icon-vk" viewBox="0 0 22 22">
          <path d="M11.13,17.88c3.19,0,2-2,2.3-2.6,0-.43,0-.85,0-1.1a4.87,4.87,0,0,1,1.66,1.25C16.61,17,17,17.88,18.22,17.88h2.26a1.46,1.46,0,0,0,1.27-.55A1.43,1.43,0,0,0,21.92,16c-.51-1.58-3.44-4.31-3.62-4.59a.76.76,0,0,1,.09-.16h0c.58-.77,2.79-4.08,3.11-5.41h0a1.34,1.34,0,0,0-.16-1.22,1.4,1.4,0,0,0-1.19-.49H17.91A1.66,1.66,0,0,0,16.29,5.2a16.16,16.16,0,0,1-2.87,4.67c0-1.28,0-2.25,0-3,0-1.41.14-2.77-1.32-2.77H8.56a1.24,1.24,0,0,0-.84,2.18c.83,1,.3,1.62.47,4.5A17,17,0,0,1,5.38,5.47,1.64,1.64,0,0,0,3.72,4.13H1.46A1.28,1.28,0,0,0,0,5.46C0,7.34,4.15,17.88,11.13,17.88ZM3.72,5.5c.2,0,.22,0,.36.42C5,8.56,7,12.47,8.46,12.47c1.11,0,1.11-1.13,1.11-1.56V7.52a3.24,3.24,0,0,0-.74-2h3.22s0,3.76,0,4.66c0,1.29,1,2,2.61.41a19.35,19.35,0,0,0,2.89-4.85c.07-.16.13-.22.35-.22h2.26a27.11,27.11,0,0,1-2.92,5l0,0a1.36,1.36,0,0,0,0,1.79h0l.39.42c.63.65,2.78,2.86,3,3.74-.13,0-.26,0-2.4,0-.45,0-.8-.68-2.16-2-1.22-1.19-2-1.67-2.73-1.67-1.39,0-1.29,1.13-1.28,2.5s0,1,0,1.11a2.52,2.52,0,0,1-.93.1c-5.81,0-9.6-9.23-9.75-11Z"/>
        </symbol>
        <symbol id="icon-instagram" viewBox="0 0 22 22">
          <path d="M4.35,22h13.3A4.35,4.35,0,0,0,22,17.65V4.35A4.35,4.35,0,0,0,17.65,0H4.35A4.35,4.35,0,0,0,0,4.35v13.3A4.35,4.35,0,0,0,4.35,22Zm-3-17.65a3,3,0,0,1,3-3h13.3a3,3,0,0,1,3,3v13.3a3,3,0,0,1-3,3H4.35a3,3,0,0,1-3-3Z"/>
          <path d="M11,16.62A5.62,5.62,0,1,0,5.38,11,5.62,5.62,0,0,0,11,16.62Zm0-9.86A4.24,4.24,0,1,1,6.76,11,4.24,4.24,0,0,1,11,6.76Z"/>
          <path d="M16.83,6.75a1.55,1.55,0,0,0,1.58-1.58,1.59,1.59,0,0,0-3.17,0A1.55,1.55,0,0,0,16.83,6.75ZM17,5c.29.26-.37.57-.37.15C16.62,4.92,17,5,17,5Z"/>
        </symbol>
        <symbol id="icon-close" viewBox="0 0 12 12">
          <path d="M7.1,6l4.67-4.67a.77.77,0,0,0,0-1.1.77.77,0,0,0-1.1,0L6,4.91,1.33.24a.77.77,0,0,0-1.1,0,.77.77,0,0,0,0,1.1L4.9,6,.23,10.68a.77.77,0,0,0,0,1.1.77.77,0,0,0,1.1,0L6,7.11l4.67,4.67a.77.77,0,0,0,1.1,0,.77.77,0,0,0,0-1.1Z"/>
          <path d="M7.1,6l4.67-4.67a.77.77,0,0,0,0-1.1.77.77,0,0,0-1.1,0L6,4.91,1.33.24a.77.77,0,0,0-1.1,0,.77.77,0,0,0,0,1.1L4.9,6,.23,10.68a.77.77,0,0,0,0,1.1.77.77,0,0,0,1.1,0L6,7.11l4.67,4.67a.77.77,0,0,0,1.1,0,.77.77,0,0,0,0-1.1Z"/>
        </symbol>
      </defs>
    </svg>
  </div>
</template>

<script>
import Header from './../../components/Header';
import Footer from './../../components/Footer';
import Multiselect from 'vue-multiselect';
import 'vue-multiselect/dist/vue-multiselect.min.css'

export default {
  name: 'App',
  components: {
    Header,
    Footer,
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
