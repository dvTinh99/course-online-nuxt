<template>
  <div class="modal-overlay">
    <div class="modal" v-on-click-outside="clickOutside">
      <main class="section main">
        <div class="main__info">
          <div class="main__profile-name">
            <span class="main__avatar"
              ><img
                src="https://s240-ava-talk.zadn.vn/8/a/0/b/1/240/65177ce798bdca8752c16d9958f31555.jpg"
                alt="Avatar"
            /></span>
            <div>
              <h1 class="main__name">Bray Nguyễn</h1>
              <div class="main__profile-type">Liên hệ</div>
              <a href="zalo://conversation?id=8696624200497859066" target="_blank">
                <button
                  type="button"
                  class="button medium"
                  title="Nhắn tin qua Zalo"
                  aria-pressed="false"
                  style="width: 240px"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 25 24"
                    width="24"
                    height="24"
                  >
                    <path
                      fill="#ffffff"
                      fill-rule="evenodd"
                      d="M16.2 4.563a8.315 8.315 0 0 0-3.687-.863 8.315 8.315 0 0 0-7.217 4.198 8.294 8.294 0 0 0 .08 8.342c.141.238.198.516.16.79l-.27 1.88v.08a.28.28 0 0 0 .28.24l1.922-.27h.17c.218 0 .432.06.62.17a8.315 8.315 0 0 0 10.452-1.603 8.299 8.299 0 0 0 1.959-7.103A8.295 8.295 0 0 0 16.2 4.563Zm-8.473-.774A9.517 9.517 0 0 1 12.513 2.5a9.518 9.518 0 0 1 7.55 3.753 9.496 9.496 0 0 1-4.017 14.558 9.518 9.518 0 0 1-8.408-.641l-1.882.27h-.21a1.483 1.483 0 0 1-1.472-1.69l.27-1.88A9.493 9.493 0 0 1 7.728 3.789ZM7.739 10a.6.6 0 0 1 .6-.6h6.347a.6.6 0 1 1 0 1.2H8.339a.6.6 0 0 1-.6-.6Zm0 3.5a.6.6 0 0 1 .6-.6h2.933a.6.6 0 1 1 0 1.2H8.34a.6.6 0 0 1-.6-.6Z"
                      clip-rule="evenodd"
                    ></path></svg
                  >Nhắn tin
                </button>
              </a>
            </div>
          </div>
          <div class="profile">
            <h2>Giới thiệu bản thân</h2>
            <div class="profile__description">DEV</div>
          </div>
        </div>
        <figure class="main__qr-block">
          <div class="main__qr">
            <img
              src="https://qr-talk.zdn.vn/1/259823972/40a13e783224db7a8235.jpg"
              alt="QR-Code"
            />
          </div>
          <figcaption class="main__help-text">
            Mở Zalo, bấm quét QR để quét và xem trên điện thoại
          </figcaption>
        </figure>
      </main>
    </div>
  </div>
</template>

<script setup lang="ts">
import { defineModel } from "vue";
const showModal = defineModel("showModal");
import { vOnClickOutside } from '@vueuse/components'

const clickOutside = () => {
  console.log("clickOutside");
  showModal.value = false;
};
</script>

<style scoped>
.modal-overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  z-index: 99;
  background-color: #000000da;
}

.modal {
  height: 550px;
  margin-top: 10%;
  padding: 60px 0;
  border-radius: 20px;
}
.close {
  margin: 10% 0 0 16px;
  cursor: pointer;
}

.close-img {
  width: 25px;
}

.check {
  width: 150px;
}

h6 {
  font-weight: 500;
  font-size: 28px;
  margin: 20px 0;
}

p {
  font-size: 16px;
  margin: 20px 0;
}

</style>
<style scoped>
:root {
  --color-primary: #0068ff;
  --shadow: 0 4px 8px rgba(0, 0, 0, 0.02), 0 4px 8px rgba(0, 0, 0, 0.02);
}

*,
:after,
:before {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  background-color: #e4e8ec;
  color: #33485c;
  font-family: Roboto, sans-serif;
  font-size: 15px;
  font-weight: 400;
  line-height: 20px;
  margin: 0;
  min-height: 100vh;
  position: relative;
  text-align: left;
  word-break: break-word;
}

a {
  color: var(--color-primary);
  text-decoration: none;
}

h1,
h2 {
  font-style: normal;
  font-weight: 500;
  margin-bottom: 8px;
  margin-top: 0;
}

h1 {
  color: #001a33;
  font-size: 24px;
  line-height: 1.25;
}

h2 {
  color: #001121;
  font-size: 20px;
  line-height: 1.3;
}

p {
  margin-bottom: 8px;
}

ol,
p,
ul {
  margin-top: 0;
}

ol,
ul {
  list-style: none;
  padding-left: 0;
}

ol,
ol ol,
ol ul,
ul,
ul ol,
ul ul {
  margin-bottom: 0;
}

img {
  object-fit: cover;
  vertical-align: middle;
}

button,
input,
select {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  margin: 0;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

[type="button"],
[type="reset"],
[type="submit"],
button {
  -webkit-appearance: button;
  appearance: button;
  border-width: 0;
  padding-left: 12px;
  padding-right: 12px;
}

[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled),
button:not(:disabled) {
  cursor: pointer;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

select {
  word-wrap: normal;
}

main {
  display: block;
}

[hidden] {
  display: none !important;
}

figure {
  margin: 0;
}

@-webkit-keyframes fadein {
  0% {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes fadein {
  0% {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@-webkit-keyframes fadeout {
  to {
    opacity: 0;
  }
}

@keyframes fadeout {
  to {
    opacity: 0;
  }
}

.relative {
  position: relative;
}

.section {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: var(--shadow);
  margin-bottom: 16px;
  padding: 40px;
}

.app-content {
  margin: 0 auto;
  max-width: 960px;
  padding: 24px 24px 76px;
}

.footer {
  bottom: 0;
  color: #667685;
  left: 0;
  padding: 24px;
  position: absolute;
  text-align: center;
  width: 100%;
}

.header {
  align-items: center;
  background-color: #fff;
  box-shadow: var(--shadow);
  display: flex;
  height: 64px;
  justify-content: center;
  padding: 0 48px;
}

.header__logo {
  height: 24px;
  margin: 20px 12px;
  width: 70px;
}

.header__list {
  display: none;
}

.header__list-item {
  color: #33485c;
  cursor: pointer;
  margin-left: 40px;
  padding: 22px 12px;
}

.header__link {
  display: none;
}

.header__highlight {
  align-items: center;
  background-color: transparent;
  color: var(--color-primary);
  display: inline-flex;
  font-weight: 500;
  margin-left: 8px;
}

.header__highlight > svg {
  margin-left: 4px;
}

.header__language-menu {
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 8px;
  box-shadow: none;
  height: 0;
  overflow: hidden;
  position: absolute;
  right: 0;
  top: 58px;
  transition: all 0.3s ease;
  z-index: 1;
}

.header__language-menu:hover {
  border-color: #e4e8ec;
  box-shadow: var(--shadow);
  height: 96px;
}

.header__language-menu > li:last-of-type {
  border-top: 1px solid #e4e8ec;
}

.header__language-menu-item {
  cursor: pointer;
  padding: 14px 20px;
  transition: all 0.3s ease;
  -webkit-user-select: none;
  user-select: none;
}

.header__language-menu-item.hovered {
  background-color: #e5efff;
}

.header__language-menu-item:before {
  border: solid var(--color-primary);
  border-width: 0 2px 2px 0;
  content: "";
  display: inline-block;
  height: 14px;
  margin-right: 12px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  visibility: hidden;
  width: 8px;
}

.header__language-menu-item.chosen:before {
  visibility: visible;
}

.header__language-toggle {
  background-color: transparent;
  border: 0;
}

.header__language-toggle:focus + .header__language-menu,
.header__language-toggle:hover + .header__language-menu {
  border-color: #e4e8ec;
  box-shadow: var(--shadow);
  height: 96px;
}

@media screen and (min-width: 480px) {
  .header {
    height: auto;
    justify-content: space-between;
  }

  .header__list {
    display: block;
  }

  .header__list > li {
    display: inline-block;
  }
}

@media screen and (min-width: 768px) {
  .header__link {
    display: inline-block;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .header__link:hover {
    color: var(--color-primary);
  }
}

.button {
  align-items: center;
  background-color: var(--color-primary);
  border: none;
  border-radius: 8px;
  color: #fff;
  display: inline-flex;
  font-weight: 500;
  justify-content: center;
  text-decoration: none;
  transition: all 0.3s ease;
}

.button.medium {
  height: 48px;
}

.button.small {
  height: 32px;
}

.button {
  background-color: #004de8;
}

.button:focus {
  box-shadow: 0 0 0 4px rgba(0, 104, 255, 0.3);
  outline: none;
}

.button > * {
  margin-right: 8px;
}

.button.outline {
  background-color: #e5efff;
  color: var(--color-primary);
}

.button.outline:hover {
  background-color: #cddefa;
}

@-webkit-keyframes popup-fadein {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  to {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes popup-fadein {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  to {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@-webkit-keyframes popup-fadeout {
  to {
    opacity: 0;
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}

@keyframes popup-fadeout {
  to {
    opacity: 0;
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}

.popup {
  -webkit-animation: popup-fadein 0.3s ease 0s forwards;
  animation: popup-fadein 0.3s ease 0s forwards;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: var(--shadow);
  max-width: 576px;
  width: 100%;
}

.popup.closing {
  -webkit-animation-name: popup-fadeout;
  animation-name: popup-fadeout;
}

.popup__wrapper {
  align-items: flex-start;
  display: flex;
  height: 100vh;
  justify-content: center;
  left: 0;
  padding: 56px 16px 0;
  position: fixed;
  top: 0;
  width: 100vw;
  z-index: 100;
}

.popup__backdrop {
  -webkit-animation: fadein 0.3s ease 0s forwards;
  animation: fadein 0.3s ease 0s forwards;
  background-color: rgba(0, 0, 0, 0.75);
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}

.popup__backdrop.closing {
  -webkit-animation-name: fadeout;
  animation-name: fadeout;
}

.popup__figure {
  border-bottom: 1px solid #dbdfe2;
  padding: 40px 40px 24px;
  text-align: center;
}

.popup__guide-image {
  height: 160px;
}

.popup__guide-image > img {
  height: 100%;
}

.popup__information {
  font-size: 16px;
  line-height: 1.375;
  margin-top: 16px;
  white-space: pre-wrap;
}

.popup__button-wrapper {
  padding: 16px 24px;
  text-align: right;
}

.popup__button-wrapper > * {
  margin-left: 16px;
}

.profile > h2 {
  margin-bottom: 16px;
}

.profile > ul {
  border-bottom: 1px solid #e4e8ec;
  margin-bottom: 24px;
}

.profile svg {
  font-size: 22px;
}

.profile__list-item {
  align-items: center;
  display: flex;
  font-size: 16px;
  line-height: 1.375;
  margin-bottom: 10px;
}

.profile__list-item > svg {
  flex-shrink: 0;
  margin-right: 12px;
}

.profile__list-item:last-of-type {
  margin-bottom: 24px;
}

.profile__description {
  line-height: 1.6;
  white-space: pre-wrap;
}

.profile__description.empty {
  color: #667685;
}

.profile__description.min-height {
  min-height: 96px;
}

.profile__highlight {
  background-color: transparent;
  color: #47bd8e;
  font-weight: 500;
}

.main {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.main button {
  margin: auto;
  max-width: 300px;
  width: 100% !important;
}

.main__info {
  flex-grow: 1;
}

.main__qr-block {
  flex-shrink: 0;
  padding-top: 40px;
  text-align: center;
  width: 100%;
}

.main__qr-block > button {
  width: 100% !important;
}

.main__profile-name {
  display: flex;
  flex-direction: column;
  margin-bottom: 40px;
  text-align: center;
  word-break: break-word;
}

.main__profile-name.small-mb {
  margin-bottom: 24px;
}

.main__name {
  align-items: center;
  display: flex;
  justify-content: center;
}

.main__name > svg {
  flex-shrink: 0;
  margin-left: 8px;
}

.main__business-label {
  background-color: #e0f4fe;
  border-radius: 4px;
  color: #1092bd;
  font-family: Inter, Roboto, sans-serif;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: -0.2px;
  line-height: 1.5;
  margin-left: 8px;
  padding: 0 8px;
  white-space: nowrap;
}

.main__avatar {
  display: inline-block;
  flex-shrink: 0;
  height: 80px;
  margin: 0 auto 16px;
  width: 80px;
}

.main__avatar > img {
  border-radius: 100%;
  height: 100%;
  width: 100%;
}

.main__profile-type {
  font-size: 16px;
  line-height: 1.375;
  margin-bottom: 16px;
}

.main__help-text {
  font-size: 12px;
  line-height: 16px;
  margin-top: 8px;
  text-align: center;
}

.main__qr {
  border-radius: 4px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
  height: 200px;
  margin: auto;
  position: relative;
  width: 200px;
}

.main__qr > .hide-shadow {
  background-color: #fff;
  height: 100%;
  position: absolute;
  right: 12px;
  top: 12px;
  width: 100%;
}

.main__qr > img {
  border-radius: 4px;
  height: 100%;
  width: 100%;
}

@media screen and (min-width: 480px) {
  .main button {
    margin: 0;
    max-width: none;
    width: 240px !important;
  }

  .main__profile-name {
    flex-direction: row;
    text-align: left;
  }

  .main__name {
    justify-content: flex-start;
  }

  .main__avatar {
    margin: 0 24px 0 0;
  }
}

@media screen and (min-width: 768px) {
  .main {
    flex-direction: row;
    justify-content: flex-start;
  }

  .main__info {
    padding-right: 40px;
  }

  .main__qr-block {
    padding-top: 0;
    text-align: left;
    width: 200px;
  }
}

@-webkit-keyframes dropdown-slide-down {
  0% {
    border: 1px solid transparent;
    box-shadow: none;
    height: 0;
  }

  to {
    border-color: #e4e8ec;
    box-shadow: var(--shadow);
    height: var(--height);
  }
}

@keyframes dropdown-slide-down {
  0% {
    border: 1px solid transparent;
    box-shadow: none;
    height: 0;
  }

  to {
    border-color: #e4e8ec;
    box-shadow: var(--shadow);
    height: var(--height);
  }
}

@-webkit-keyframes dropdown-slide-up {
  0% {
    border: 1px solid #e4e8ec;
    box-shadow: var(--shadow);
    height: var(--height);
  }

  to {
    border-color: transparent;
    box-shadow: none;
    height: 0;
  }
}

@keyframes dropdown-slide-up {
  0% {
    border: 1px solid #e4e8ec;
    box-shadow: var(--shadow);
    height: var(--height);
  }

  to {
    border-color: transparent;
    box-shadow: none;
    height: 0;
  }
}

.outline-none {
  outline: none;
}

.dropdown-menu {
  background-color: #fff;
  border: 1px solid #e4e8ec;
  border-radius: 8px;
  color: #001a33;
  cursor: pointer;
  display: block;
  overflow: hidden;
  padding: 13px 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  text-overflow: ellipsis;
  transition: all 0.3s ease;
  white-space: nowrap;
  width: 100%;
}

.dropdown-menu:focus,
.dropdown-menu:hover {
  border-color: currentcolor;
  color: var(--color-primary);
}

.dropdown-menu:focus {
  outline: none;
}

.dropdown-menu.with-icon {
  padding-right: 44px;
}

.dropdown-menu.with-icon > svg {
  color: #667685;
  pointer-events: none;
  position: absolute;
  right: 12px;
  top: 11px;
  transition: all 0.3s ease;
}

.dropdown-menu.with-icon.active > svg,
.dropdown-menu.with-icon:focus > svg,
.dropdown-menu.with-icon:hover > svg {
  color: var(--color-primary);
}

.dropdown-menu.with-icon.active {
  border-color: currentcolor;
  color: var(--color-primary);
}

.dropdown-menu.with-icon.active > svg {
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.dropdown-menu.with-icon.active.top > svg {
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}

.dropdown-menu.item {
  border: none;
  border-bottom: 1px solid #e4e8ec;
  border-radius: 0;
  padding-bottom: 14px;
  padding-top: 14px;
}

.dropdown-menu.item:focus,
.dropdown-menu.item:hover {
  border: none;
  border-bottom: 1px solid #e4e8ec;
  color: #001a33;
}

.dropdown-menu.item.active {
  background-color: #e5efff;
}

.dropdown-menu__menu {
  -webkit-animation: dropdown-slide-down 0.3s ease 0s forwards;
  animation: dropdown-slide-down 0.3s ease 0s forwards;
  border: 1px solid #e4e8ec;
  border-radius: 8px;
  box-shadow: var(--shadow);
  height: var(--height);
  left: 0;
  overflow: hidden;
  position: absolute;
  width: 100%;
  z-index: 1;
}

.dropdown-menu__menu.closing {
  -webkit-animation-name: dropdown-slide-up;
  animation-name: dropdown-slide-up;
}

.dropdown-menu__menu.bottom {
  top: 60px;
}

.dropdown-menu__menu.top {
  bottom: 60px;
}

.dropdown-menu__menu > li:last-of-type > .dropdown-menu__item {
  border-bottom: none;
}

.snackbar {
  -webkit-animation: fadein 0.3s ease 0s forwards;
  animation: fadein 0.3s ease 0s forwards;
  background-color: #323232;
  border-radius: 8px;
  color: #fff;
  left: 50%;
  padding: 16px 32px;
  position: fixed;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 200;
}

.snackbar.closing {
  -webkit-animation-name: fadeout;
  animation-name: fadeout;
}

.services__heading {
  margin-bottom: 24px;
}

.services__wrapper {
  grid-gap: 16px;
  display: grid;
  grid-template-columns: minmax(0, 1fr);
}

@media screen and (min-width: 576px) {
  .services__wrapper {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media screen and (min-width: 768px) {
  .services__wrapper {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
}

.promote-banner {
  background-image: linear-gradient(90deg, #006af5, #8fc1ff);
  border-radius: 8px;
  color: #fff;
  display: flex;
  line-height: 1.6;
  margin-bottom: 16px;
  padding: 16px;
  position: relative;
}

.promote-banner svg {
  flex-shrink: 0;
  margin-right: 16px;
}

.promote-banner__button.promote-banner__button {
  background-color: #fff;
  display: inline-flex;
  font-size: 14px;
  line-height: 18px;
  margin-top: 16px;
  padding: 0 40px;
  position: relative;
  z-index: 10;
}

.promote-banner__decorator {
  height: 100%;
  max-width: 100%;
  position: absolute;
  right: 0;
  top: 0;
}

.cookie_popup {
  background: #fff;
  border-radius: 8px;
  bottom: 20px;
  box-shadow: 0 0 15px #ccc;
  display: block;
  left: 10px;
  margin-left: auto;
  margin-right: auto;
  max-width: 1272px;
  padding: 12px 16px;
  position: absolute;
  width: 25%;
  z-index: 10;
}

.cookie_popup .title {
  font-size: 16px;
  padding-bottom: 8px;
}

.cookie_popup .content {
  color: #4e4e4e;
  font-size: 13px;
  text-align: left;
}

.cookie_popup .buttons {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
}

.cookie_popup .buttons .btn-reject {
  background: #0573ff;
  background-color: #fff;
  border: 1px solid #0573ff;
  border-radius: 10px;
  color: #0573ff;
  margin: 6px;
  min-width: 40%;
  padding: 6px 12px;
}

.cookie_popup .buttons .btn-accept {
  background: #0573ff;
  border: #ffdead;
  border-radius: 10px;
  color: #fff;
  margin: 6px;
  min-width: 40%;
  padding: 6px 12px;
}
</style>
