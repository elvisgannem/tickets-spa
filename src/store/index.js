import { createStore } from 'vuex'

export default createStore({
  state: {
      menu: [
        {name: 'Dashboard', icon: 'tachometer-alt', url: '/', id: 0, active: 1},
        {name: 'Tickets', icon: 'clipboard-list', url: '/tickets', id: 1, active: 0},
        {name: 'User info', icon: 'user', url: '/user-info', id: 2, active: 0},
        {name: 'Administrator', icon: 'user-shield', url: '/admin', id: 3, active: 0},
        {name: 'Help', icon: 'question-circle', url: '/help', id: 4, active: 0},
    ],
    active: 0
  },
  mutations: {
    fetchMenu(state, id){
      let menuClickedId = id
      for(let i = 0; i < state.menu.length; i++){
        if(menuClickedId == state.menu[i].id){
          state.active = menuClickedId
        }
      }
    },
  },
  actions: {
    fetchMenu({commit}, id){
      commit('fetchMenu', id)
    },
  },
  modules: {
  }
})