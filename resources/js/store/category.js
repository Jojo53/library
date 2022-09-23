
import axios from "axios"
namespaced: true
export default{
   
    state:{
        categories: [],
    },
    getters:{
        getCategory(state){
            return state.categories
        },
    },
    actions:{
        async getCategories(state){
            let result = await axios.get('categories').then((reponse)=>{
                console.log(reponse);
            })
        }
    }
}