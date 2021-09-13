import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from '@fortawesome/fontawesome-svg-core'
import { faTachometerAlt, faClipboardList, faUser, faSignOutAlt, faUserShield, faQuestionCircle, faHandsHelping, faBell } from '@fortawesome/free-solid-svg-icons'

library.add(faTachometerAlt)
library.add(faClipboardList)
library.add(faUser)
library.add(faSignOutAlt)
library.add(faUserShield)
library.add(faQuestionCircle)
library.add(faHandsHelping)
library.add(faBell)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).use(store).use(router).mount('#app')
