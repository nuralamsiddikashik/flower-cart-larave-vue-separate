new Vue({
    el: '#categoryPage',
    data: {
        category: {
            name:'',
        }
    },
    methods: {
        createCategory(route){
            axios.post(route, this.category).then((response) => {
                if(response.status === 201){
                    toastr.success(response.data.message); 
                    this.resetCategory();
                }else{
                    toastr.error(response.data.message);
                }
            }).catch(error => {
                console.error(error.message);
            })
        },
        resetCategory(){
            this.category = {
                name:"",
            }
        }
    },
    computed: {

    },
    watch: {

    },
    mounted() {
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    }
});