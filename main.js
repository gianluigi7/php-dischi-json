const {createApp} = Vue;

createApp({
    data() {
        return {
            title: "Disco-Jackson",
            discs: [],
            apiURL: 'http://localhost/php-dischi-json/server/server.php'
        };
    },
    methods: {
       apiCallDisc() {
        axios.get(this.apiURL).then((response) => {
            console.log(response);
            this.discs = response.data;
        })
       },
    },
    created() {
        this.apiCallDisc();
    }
}).mount('#App');