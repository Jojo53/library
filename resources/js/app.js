import { createApp } from 'vue'
import store from './store'
import counter from './components/counter.vue'
import selectform from './components/Forms/selectForm.vue'
 
const app = createApp({
    components:{
        counter,
        selectform
    }
})
app.use(store)
app.mount('#app')