import { createApp } from 'vue'
import store from './store'
import counter from './components/counter.vue'
import test from './components/forms/test.vue'
 
const app = createApp({
    components:{
        counter,
        test
    }
})
app.use(store)
app.mount('#app')