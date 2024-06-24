const {createApp} = Vue;

createApp({
    data() {
        return {
            title: "Disco-Jackson",
            discs: [],
        };
    },
    methods: {
       apiCallDisc() {
        axios.get
       }
    },
    created() {
        this.apiCallDisc();
    }
}).mount('#App');