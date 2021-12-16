new Vue({
    el: '#categoryPage',
    data: {
        category: {
            name: '',
        },
        categories: [],

    },
    methods: {
        getCategoryList() {
            axios.get(CategoryListRoute)
                .then((response) => {
                    if (response.status === 200) {
                        this.categories = response.data;
                    } else {
                        toastr.error(response.data.message);
                    }
                })
                .catch(error => {
                    toastr.error(error.message)
                })
        },

        createCategory(route) {
            axios.post(route, this.category).then((response) => {
                if (response.status === 201) {
                    toastr.success(response.data.message);
                    this.resetCategory();
                    this.getCategoryList();
                } else {
                    toastr.error(response.data.message);
                }
            }).catch(error => {
                console.error(error.message);
            })
        },

        resetCategory() {
            this.category = {
                name: "",
            }
        }
    },
    computed: {

    },
    watch: {

    },
    created() {
        this.getCategoryList();

    },
    mounted() {
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    }
});