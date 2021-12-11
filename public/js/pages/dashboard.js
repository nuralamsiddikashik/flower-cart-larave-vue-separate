new Vue({
    el: '#app',
    data: {
        category: 'hello world',
    },
    methods: {

    },
    computed: {

    },
    watch: {

    },
    mounted() {
        toastr.success('Hello');
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    }
});