import { createApp } from 'vue'
import store from './store'
import selectform from './components/Forms/selectForm.vue'
import createauthor from './components/Contents/Authors/create.vue'
import updateauthor from './components/Contents/Authors/update.vue'
import deleteauthor from './components/Contents/Authors/delete.vue'
import createeditor from './components/Contents/Editors/create.vue'
import updateeditor from './components/Contents/Editors/update.vue'
import deleteeditor from './components/Contents/Editors/delete.vue'
const app = createApp({
    components:{
        selectform,
        createauthor,
        updateauthor,
        deleteauthor,
        createeditor,
        updateeditor,
        deleteeditor
    }
})
app.use(store)
app.mount('#app')