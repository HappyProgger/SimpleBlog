import { createStore } from 'vuex'
import VuexPersistence from 'vuex-persist'
import { Link } from "@inertiajs/inertia-vue3";

const vuexLocal = new VuexPersistence({
    storage: window.localStorage,
    key: 'my-app'
})



const store = createStore({
    plugins: [vuexLocal.plugin],
    state: {
        choosen_page: {
            '/': false,
            '/articles': false,
        }
// здесь определяются начальные значения состояния
    },
    mutations: {
        show_curret_page (state,$url) {

            Object.keys(state.choosen_page).forEach( (key) => key === $url ?
                state.choosen_page[key] = true : state.choosen_page[key] = false)

        }
// здесь определяются мутации для изменения состояния
    },
    actions: {
// здесь определяются действия для взаимодействия с мутациями
    },
    getters: {
// здесь определяются геттеры для получения состояния
    }
})

export {store};
